<?php
class AdminLogin extends CI_Controller {
    public function index()
    {
        $data['title'] = "Your Application Title"; // can be change according to views
        $this->load->template('UserMenu', $data); // this will load the view file
    }

}
