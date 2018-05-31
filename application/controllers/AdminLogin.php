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

      if($res['lvl']!=0){
        $this->session->set_userdata('logged_in',$res);
        $this->load->template('AdminMenu');
        redirect(base_url() . 'AdminMenu');
      }else{
        $this->load->template('AdminLogin');
        redirect(base_url() . 'AdminLogin');
      }
    }

}
