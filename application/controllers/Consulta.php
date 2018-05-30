<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends CI_Controller {

  public function index()
  {
      $data['title'] = "Your Application Title"; // can be change according to views
      $this->load->template('AdminSoli', $data); // this will load the view file
  }

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $data->Alumno_model->getall();
    return $data;
  }

  public function administradores()
  {
    $this->load->model('Admin_model');
    $data->Admin_model->getall();
    return $data;
  }
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $data->Materiales_model->getall();
    return $data;
  }
  public function profesores(){
    $this->load->model('Profesores_model');
    $data->Profesores_model->getall($data);
    return $data;
  }
}
