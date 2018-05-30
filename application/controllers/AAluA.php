<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AAlua extends CI_Controller {

  public function index()
  {
      $data['title'] = "Your Application Title"; // can be change according to views
      $this->load->template('AAluA', $data); // this will load the view file
  }

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $cuenta = $this->input->post('alumnoID');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoP');
    $div = $this->input->post('divisionID');
    $data = array('cuenta' => $cuenta, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'divisionID'=>$div);
    $this->Alumno_model->insert($data);
  }

}
