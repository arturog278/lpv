<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Altas extends Auth_Controller {

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
      echo '<script type="text/javascript">';
      echo 'alert("Alumno agregado correctamente");';
      echo 'window.location.href = "'.site_url('AdminBD/alumnos/1').'";';
      echo '</script>';
    }else{
      echo '<script type="text/javascript">';
      echo 'alert("Ya existe un alumno registrado con el numero de cuenta: '.$cuenta.'");';
      echo 'window.location.href = "'.site_url('AdminBD/alumnos/1').'";';
      echo '</script>';
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
    $this->Admin_model->insert($data);
  }
  public function anotaciones(){
    $this->load->model('Anotaciones_model');
    $anotacionID = $this ->input->post('anotacionID');
    $prestamoID = $this ->input->post('prestamoID');
    $descripcion = $this ->input->post('descripcion');
    $resuelto = $this ->input->post('resuelto');
    $data = array('anotacionID' => $anotacionID, 'prestamoID' => $prestamoID,'descripcion' => $descripcion,'resuelto' => $resuelto);
    $this->Anotaciones_model->insert($data);
  }
  public function aulas(){
    $this->load->model('Aulas_model');
    $aulaID = $this ->input->post('aulaID');
    $numero = $this ->input->post('numero');
    $edificio = $this->input->post('edificio');
    $data = array('aulaID' => $aulaID, 'numero' => $numero,'edificio' => $edificio);
    $res = $this->Aulas_model->insert($data);
    if($res!=-1){
      echo '<script type="text/javascript">';
      echo 'alert("Aula agregada correctamente");';
      echo 'window.location.href = "'.site_url('AdminBD/aulas/1').'";';
      echo '</script>';
    }else{
      echo '<script type="text/javascript">';
      echo 'alert("Ya existe un aula registrada con el numero de aula: '.$aulaID.'");';
      echo 'window.location.href = "'.site_url('AdminBD/aulas/1').'";';
      echo '</script>';
    }
}

public function clases(){
  $this->load->model('clases_model');
  $claseID = $this ->input->post('claseID');
  $aulaID = $this ->input->post('aulaID');
  $profesorID = $this->input->post('profesorID');
  $materiaID = $this ->input->post('materiaID');
  $horarioID = $this ->input->post('horarioID');
  $data = array('claseID' => $claseID, 'aulaID' => $aulaID,'profesorID' => $profesorID, 'materiaID' => $materiaID,'horarioID' => $horarioID);
  $this->Clases_model->insert($data);
}
public function divisiones(){
  $this->load->model('Divisiones_model');
  $divisionID = $this ->input->post('divisionID');
  $nombre = $this ->input->post('nombre');
  $sigla = $this->input->post('sigla');
  $data = array('divisionID' => $divisionID, 'nombre' => $nombre,'sigla' => $sigla);
  $this->Divisiones_model->insert($data);
}
public function horarios(){
  $this->load->model('Horarios_model');
  $horarioID = $this ->input->post('horarioID');
  $dia = $this ->input->post('dia');
  $hora = $this->input->post('hora');
  $data = array('horarioID' => $horarioID, 'dia' => $dia,'hora' => $hora);
  $this->Horarios_model->insert($data);
}
  public function materiales()
  {
    $this->load->model('Materiales_model');
    $nombre = $this ->input->post('nombre');
    $descripcion = $this ->input->post('descripcion');
    $fechaAdquisicion= $this ->input->post('fechaAdquisicion');
    $modelo = $this ->input->post('modelo');
    $data = array('nombre' => $nombre, 'descripcion' => $descripcion,'fechaAdquisicion' => $fechaAdquisicion,'modelo' => $modelo);
    $res = $this->Materiales_model->insert($data);
    if($res!=-1){
      echo '<script type="text/javascript">';
      echo 'alert("Material agregado correctamente");';
      echo 'window.location.href = "'.site_url('AdminBD/materiales/1').'";';
      echo '</script>';
    }else{
      echo '<script type="text/javascript">';
      echo 'alert("Error al agregar el material");';
      echo 'window.location.href = "'.site_url('AdminBD/materiales/1').'";';
      echo '</script>';
    }
  }
  public function materias(){
    $this->load->model('Materias_model');
    $materiaID = $this ->input->post('materiaID');
    $nombre = $this ->input->post('nombre');
    $divisionID= $this ->input->post('divisionId');
    $data = array('materiaID' => $materiaID, 'nombre' => $nombre,'divisionID' => $divisionID);
    $this->Materias_model->insert($data);
  }
  public function prestamos(){
    $this->load->model('Prestamos_model');
    $prestamosID = $this ->input->post('prestamosID');
    $registroID = $this ->input->post('registroID');
    $materialID= $this ->input->post('materialID');
    $data = array('prestamosID' => $prestamosID, 'registroID' => $registroID,'materialID' => $materialID);
    $this->Prestamos_model->insert($data);
  }
  public function profesores(){
    $this->load->model('Profesores_model');
    $profesorID = $this ->input->post('profesorID');
    $pass = $this ->input->post('pass');
    $nombre = $this->input->post('nombre');
    $apellidop = $this->input->post('apellidop');
    $apellidom = $this->input->post('apellidom');
    $data = array('profesorID' => $profesorID, 'pass' => $pass,'nombre' => $nombre,'apellidop' => $apellidop,'apellidom' => $apellidom);
    $res = $this->Profesores_model->insert($data);
    if($res!=-1){
      echo '<script type="text/javascript">';
      echo 'alert("Profesor agregado correctamente");';
      echo 'window.location.href = "'.site_url('AdminBD/profesores/1').'";';
      echo '</script>';
    }else{
      echo '<script type="text/javascript">';
      echo 'alert("Error al agregar el profesor");';
      echo 'window.location.href = "'.site_url('AdminBD/profesores/1').'";';
      echo '</script>';
  }
}

  public function registroalumnos(){
    $this->load->model('Registroalumnos_model');
    $alumnoID = $this ->input->post('alumnoID');
    $hora = $this ->input->post('hora');
    $data = array('alumnoId' => $alumnoID, 'hora' => $hora);
    $this->Registroalumnos_model->insert($data);
  }
  public function registros(){
    //registroID	claseID	horaPrestamo	horaEntrega	firmaPrestamo	formaEntrega	fecha	adminID
    $this->load->model('Registros_model');
    $registroID = $this ->input->post('registroID');
    $claseID = $this ->input->post('claseID');
    $horaPrestamo = $this ->input->post('horaPrestamo');
    $horaEntrega = $this ->input->post('horaEntrega');
    $firmaPrestamo = $this ->input->post('firmaPrestamo');
    $formaEntrega = $this ->input->post('formaEntrega');
    $fecha = $this ->input->post('fecha');
    $adminID = $this ->input->post('adminID');
    $data = array('registroID' => $registroID, 'claseID' => $claseID,'horaPrestamo' => $horaPrestamo,'horaEntrega' => $horaEntrega,'firmaPrestamo' => $firmaPrestamo,'formaEntrega' => $formaEntrega,'fecha' => $fecha,'adminID' => $adminID);
    $this->Registros_model->insert($data);
  }
  public function registrosactivos(){
    $this->load->model('Registrosactivos_model');
    $registroActID = $this ->input->post('regustroActID');
    $registroID = $this ->input->post('registroID');
    $status = $this ->input->post('status');
    $data  = array('$registroActID' => $registroActID, 'registroID' => $registroID, 'status' => $status);
    $this->Registroalumnos_model->insert($data);
  }
}
