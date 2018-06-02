<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar extends Auth_Controller {

  public function alumnos($cuenta)
  {
    $this->load->model('Alumno_model');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $div = $this->input->post('divisionID');
    $data = array('cuenta' => $cuenta);
    if ($nombre!='') {$data['nombre'] = $nombre;}
    if ($appat!=''){$data['appelidop'] = $appat;}
    if ($apmat!=''){$data['apellidom'] = $apmat;}
    if ($div!=''){$data['divisionID'] = $div;}
    $rows = $this->Alumno_model->update($cuenta, $data);
    if($rows!=1){
      echo "<script>alert('No se pudo modificar alumno')</script>";
    } else{
      echo "<script>alert('Alumno modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/Alumnos').'" </script>;';
  }
  public function alumno($cuenta){
    $data['title'] = "Your Application Title"; // can be change according to views
    $this->load->model('Alumno_model');
    $data['alumnos'] = $this->Alumno_model->getall($cuenta,'','','','');
    $this->load->template('AAluE', $data); // this will load the view file
  }
  public function Aulas($cuenta)
  {
    $this->load->model('Aulas_model');
    $numero = $this->input->post('numero');
    $edificio = $this->input->post('edificio');
    $data = array('cuenta' => $cuenta);
    if ($numero!='') {$data['numero'] = $numero;}
    if ($edificio!=''){$data['edificio'] = $edificio;}
    $rows = $this->Aulas_model->update($cuenta, $data);
    if($rows!=1){
      echo "<script>alert('No se pudo modificar alumno')</script>";
    } else{
      echo "<script>alert('Alumno modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/Aulas').'" </script>;';
  }
  public function Aula($cuenta){
    $data['title'] = "Your Application Title"; // can be change according to views
    $this->load->model('Aulas_model');
    $data['aulas'] = $this->Aulas_model->getall($cuenta,'','');
    $this->load->template('AAulE', $data); // this will load the view file
  }
  public function Profesores($cuenta)
  {
    $this->load->model('Profesores_model');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $pass = $this->input->post('pass');
    $data = array('profesorID' => $cuenta);
    if ($nombre!='') {$data['nombre'] = $nombre;}
    if ($appat!=''){$data['appelidop'] = $appat;}
    if ($apmat!=''){$data['apellidom'] = $apmat;}
    if ($pass!=''){$data['pass'] = $pass;}
    $rows = $this->Profesores_model->update($cuenta, $data);
    if($rows!=1){
      echo "<script>alert('No se pudo modificar profesor')</script>";
    } else{
      echo "<script>alert('Profesor modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/Profesores').'" </script>;';
  }
  public function Profesor($cuenta){
    $data['title'] = "Your Application Title"; // can be change according to views
    $this->load->model('Profesores_model');
    $data['Profesores'] = $this->Profesores_model->getall($cuenta,'','','','');
    $this->load->template('AProE', $data); // this will load the view file
  }
  public function Materiales($materialID)
  {
    $this->load->model('Materiales_model');
    $nombre = $this->input->post('nombre');
    $descripcion = $this->input->post('descripcion');
    $fechaAdquisicion = $this->input->post('fechaAdquisicion');
    $modelo = $this->input->post('modelo');
    $data = array('materialID' => $materialID);
    if ($nombre!='') {$data['nombre'] = $nombre;}
    if ($descripcion!=''){$data['descripcion'] = $descripcion;}
    if ($fechaAdquisicion!=''){$data['fechaAdquisicion'] = $fechaAdquisicion;}
    if ($modelo!=''){$data['modelo'] = $modelo;}
    $rows = $this->Materiales_model->update($materialID, $data);
    if($rows!=1){
      echo "<script>alert('No se pudo modificar material')</script>";
    } else{
      echo "<script>alert('Material modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/Materiales').'" </script>;';
  }
  public function Material($cuenta){
    $data['title'] = "Your Application Title"; // can be change according to views
    $this->load->model('Materiales_model');
    $data['Materiales'] = $this->Materiales_model->getall($cuenta,'','','','');
    $this->load->template('AMatE', $data); // this will load the view file
  }
}
