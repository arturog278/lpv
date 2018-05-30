<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends CI_Controller {

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $cuenta = $this->input->post('cuenta');
    $nombre = $this->input->post('nombre');
    $apellidop = $this->input->post('appelidoP');
    $apellidom = $this->input->post('apellidoM');
    $divisionID = $this->input->post('divisionID');
    $data['alumnos'] = $this->Alumno_model->getall($cuenta,$nombre,$apellidop,$apellidom,$divisionID);
    $this->load->template('AAluC',$data);
  //  redirect(base_url().'AdminBD/Alumnos/4');
  }

  public function administradores()
  {
    $this->load->model('Admin_model');
    $data->Admin_model->ggetall($adminID,$nombre,$apellidop,$apellidom,$user,$pass);
    return $data;
  }
  public function anotaciones(){
    $this->load->model('Anotaciones_model');
    $data->Anotaciones_model->getall($anotacionID,$prestamoID,$descripcion,$resuelto);
    return $data;
  }
  public function aulas(){
    $this->load->model('Aulas_model');
    $data->Aulas_model->getall($aulaID,$numero,$edificio);
    return $data;
  }
  public function divisiones(){
    $this->load->model('Divisiones_model');
    $data->Divisiones_model->getall($divisionID,$sigla,$nombre);
    return $data;
  }
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $data->Materiales_model->getall($materialID,$descripcion,$nombre,$fechaAdquisicion,$modelo);
    return $data;
  }
  public function profesores(){
    $this->load->model('Profesores_model');
    $data->Profesores_model->getall($profesorID,$pass,$nombre,$apellidom,$apellidop);
    return $data;
  }
}
