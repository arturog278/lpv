<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('AdminLogin', $data);
        $this->load->model('Admin_model');
    }
    
    public function LogIn()
    {
      $this->load->model('Admin_model');
      $user = $this->input->post('inputText');
      $pass = $this->input->post('inputPassword');
      //$data = array('user' => $user,'pass' => $pass);
      $res = $this->Admin_model->get_credenciales($user,$pass);
      $data = array('res' => $res);
      if($res!=0){
        $this->load->template('AdminMenu',$data);
        redirect(base_url() . 'AdminMenu');
      }else{
        $this->load->template('AdminLogin',$data);
        redirect(base_url() . 'AdminLogin');
      }
    }
}
