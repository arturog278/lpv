<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminMenu extends Auth_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
          $this->load->template('AdminMenu', $data); // this will load the view file
    }

    public function LogOut(){
      $this->session->sess_destroy();
      $this->session->unset_userdata('logged_in');
      redirect(site_url());
    }
}
