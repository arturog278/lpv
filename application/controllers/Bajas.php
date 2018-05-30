<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bajas extends CI_Controller {

  public function alumnos($cuenta){
    $this->load->model('Alumno_model');
    $res = $this->Alumno_model->delete($cuenta);
    if($res!=0){
      echo "<script>alert('No existe ningun registro con ese numero de cuenta')</script>";
    }else{
      echo "<script>alert('Alumno eliminado correctamente')</script>";
    }
  }

}
