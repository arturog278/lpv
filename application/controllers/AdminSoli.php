<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminSoli extends Auth_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('AdminSoli', $data); // this will load the view file
    }
}
