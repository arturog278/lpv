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

  public function administradores()
  {
    $this->load->model('Admin_model');
    $user = $this->input->post('user');
    $pass = $this->input->post('pass');
    $lvl = $this->input->post('lvl');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $data = array('user' => $user, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'lvl'=>$lvl,'pass'=>$pass);
    $this->Admin_model->insert($data);
  }
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $nombre = $this ->input->post('nombre');
    $descripcion = $this ->input->post('descripcion');
    $fechaAdquisicion= $this ->input->post('fechaAdquisicion');
    $modelo = $this ->input->post('modelo');
    $data = array('nombre' => $nombre, 'descripcion' => $descripcion,'fechaAdquisicion' => $fechaAdquisicion,'modelo' => $modelo);
    $this->Materiales_model->insert($data);
  }
  public function profesores(){
    $this->load->model('Profesores_model');
    $profesorID = $this ->input->post('profesorID');
    $pass = $this ->input->post('pass');
    $nombre = $this->input->post('nombre');
    $apellidop = $this->input->post('apellidop');
    $apellidom = $this->input->post('apellidom');
    $data = array('profesorID' => $profesorID, 'pass' => $pass,'nombre' => $nombre,'apellidop' => $apellidop,'apellidom' => $apellidom);
    $this->Profesores_model->insert($data);
  }
  public function aulas(){
    $this->load->model('Aulas_model');
    $aulaID = $this ->input->post('aulaID');
    $numero = $this ->input->post('numero');
    $edificio = $this->input->post('edificio');
    $data = array('aulaID' => $aulaID, 'numero' => $numero,'edificio' => $edificio);
    $this->Aulas_model->insert($data);
  }
}
