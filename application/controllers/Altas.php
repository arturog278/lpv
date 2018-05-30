<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Altas extends CI_Controller {

  public function index()
  {
      $data['title'] = "Your Application Title"; // can be change according to views
      $this->load->template('AdminSoli', $data); // this will load the view file
  }

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $cuenta = $this->input->post('alumnoID');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $div = $this->input->post('divisionID');
    $data = array('cuenta' => $cuenta, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'divisionID'=>$div);
    $this->Alumno_model->insert($data);
  }

  public function alumnos()
  {
    $this->load->model('Admin_model');
    $user = $this->input->post('user');
    $pass = $this->input->post('pass');
    $lvl = $this->input->post('lvl');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $data = array('user' => $user, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'lvl'=>$lvl,'pass'=>$pass);
    $this->Alumno_model->insert($data);
  }
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $user =
  }


}
