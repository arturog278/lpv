<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bajas extends Auth_Controller {

  public function admin($cuenta){
    $this->load->model('Admin_model');
    $res = $this->Admin_model->delete($cuenta);
    if($res!=0){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function alumnos($cuenta){
    $this->load->model('Alumno_model');
    $res = $this->Alumno_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/alumnos').'" </script>;';
  }
  public function anotaciones($cuenta){
    $this->load->model('Anotaciones_model');
    $res = $this->Anotaciones_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function aulas($cuenta){
    $this->load->model('Aulas_model');
    $res = $this->Aulas_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de aula')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function clases($cuenta){
    $this->load->model('Clases_model');
    $res = $this->Clases_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function divisiones($cuenta){
    $this->load->model('Divisiones_model');
    $res = $this->Divisiones_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function horarios($cuenta){
    $this->load->model('Horarios_model');
    $res = $this->Horarios_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function materiales($cuenta){
    $this->load->model('Materiales_model');
    $res = $this->Materiales_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/materiales').'" </script>;';
  }
  public function materias($cuenta){
    $this->load->model('Materias_model');
    $res = $this->Materias_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function prestamos($cuenta){
    $this->load->model('Prestamos_model');
    $res = $this->Prestamos_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function profesores($cuenta){
    $this->load->model('Profesores_model');
    $res = $this->Profesores_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function registroalumnos($cuenta){
    $this->load->model('Registroalumnos_model');
    $res = $this->Registroalumnos_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function registros($cuenta){
    $this->load->model('Registros_model');
    $res = $this->Registros_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
  public function registrosactivos($cuenta){
    $this->load->model('Registrosactivos_model');
    $res = $this->Registrosactivos_model->delete($cuenta);
    if($res!=1){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }
}
