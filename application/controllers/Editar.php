<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar extends Auth_Controller {

  public function alumno(){
    $data = array('table_name' => 'alumnos', 'id' => $this->input->post('id'), 'title' => $this->input->post('title'));
    $this->load->model('Alumno_model');
    if($this->Alumno_model->update1($data)){
      "<script>alert('No se pudo modificar alumno')</script>";
    } else{
      echo "<script>alert('Alumno modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/alumnos').'" </script>;';
  }
}
