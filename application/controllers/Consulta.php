<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends Auth_Controller {

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
    $cuenta = $this->input->post('adminID');
    $nombre = $this->input->post('nombre');
    $apellidop = $this->input->post('apellidoP');
    $apellidom = $this->input->post('apellidoM');
    $divisionID = $this->input->post('user');
    $data['admin'] = $this->Admin_model->getall($cuenta,$nombre,$apellidop,$apellidom,$user);
    $this->load->template('AAdmC',$data);
  }
  public function anotaciones(){
    $this->load->model('Anotaciones_model');
    $anotacionID = $this->input->post('anotacionID');
    $prestamoID = $this->input->post('prestamoID');
    $descripcion = $this->input->post('descripcion');
    $resuelto = $this->input->post('resuelto');
    $data['anotaciones'] = $this->Anotaciones_model->getall($anotacionID,$prestamoID,$descripcion,$resuelto);
    $this->load->template('AAnoC',$data);
  }
  public function aulas(){
    $this->load->model('Aulas_model');
    $aulaID = $this->input->post('aulaID');
    $numero = $this->input->post('numero');
    $edificio = $this->input->post('edificio');
    $data['aulas'] = $this->Aulas_model->getall($aulaID,$numero,$edificio);
    $this->load->template('AAulC',$data);
  }
  public function divisiones(){
    $this->load->model('Divisiones_model');
    $divisionID = $this->input->post('divisionID');
    $sigla = $this->input->post('sigla');
    $nombre = $this->input->post('nombre');
    $data['divisiones'] = $this->Divisiones_model->getall($divisionID,$sigla,$nombre);
    $this->load->template('ADivC',$data);
  }
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $materialID = $this->input->post('materialID');
    $nombre = $this->input->post('nombre');
    $descripcion = $this->input->post('descripcion');
    $fechaAdquisicion = $this->input->post('fechaAdquisicion');
    $modelo = $this->input->post('modelo');
    $data['materiales'] = $this->Materiales_model->getall($materialID,$descripcion,$nombre,$fechaAdquisicion,$modelo);
    $this->load->template('aMatC',$data);
  }
  public function profesores(){
    $this->load->model('Profesores_model');
    $profesorID = $this->input->post('profesorID');
    $nombre = $this->input->post('nombre');
    $pass = $this->input->post('pass');
    $apellidom = $this->input->post('apellidoM');
    $apellidop = $this->input->post('apellidoP');
    $data['profesores'] = $this->Profesores_model->getall($profesorID,$pass,$nombre,$apellidom,$apellidop);
    $this->load->template('aProC',$data);
  }
}
