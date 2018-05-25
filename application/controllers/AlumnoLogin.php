<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AlumnoLogin extends CI_Controller {

    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('AlumnoLogin', $data); // this will load the view file
    }
}
