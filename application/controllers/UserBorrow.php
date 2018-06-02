<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserBorrow extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('UserBorrow', $data); // this will load the view file
    }

    public function Prestamos($parametro){
      switch($parametro){
        case 1:
            $this->load->model('Profesores_model');
            $data['profesores'] = $this->Profesores_model->getforPrestamo('','','','');
            $this->load->template('UserBorrow',$data);
            break;
      }
    }
}
