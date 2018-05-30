<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Altas extends CI_Controller {

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $cuenta = $this->input->post('alumnoID');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $div = $this->input->post('divisionID');
    $data = array('cuenta' => $cuenta, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'divisionID'=>$div);
    $res = $this->Alumno_model->insert($data);
    if($res!=-1){
      echo "<script language=javascript>alert('Alumno agregado correctmente".$res."');</script>";
      redirect(base_url().'AdminBD');
    }else{
      echo "<script language=javascript>alert('Error al insertar el usuario: ".$res."');</script>";
    }
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
    $this->Alumno_model->insert($data);
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
    $this->load->model('Materiales_model');
    $profesoresID = $this ->input->post('profesoresID');
    $pass = $this ->input->post('pass');
    $nombre = $this->input->post('nombre');
    $apellidop = $this->input->post('apellidop');
    $apellidom = $this->input->post('apellidom');
    $data = array('profesoresID' => $profesoresID, 'pass' => $pass,'nombre' => $nombre,'apellidop' => $apellidop,'apellidom' => $apellidom);
    $this->Materiales_model->insert($data);
  }
}
