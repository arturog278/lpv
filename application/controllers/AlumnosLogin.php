<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AlumnosLogin extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('AlumnosLogin', $data); // this will load the view file
    }
}
