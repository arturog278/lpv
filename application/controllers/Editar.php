<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editar extends Auth_Controller {

  public function alumnos()
  {
    $this->load->model('Alumno_model');
    $cuenta = $this->input->post('alumnoID');
    $nombre = $this->input->post('nombre');
    $appat = $this->input->post('apellidoP');
    $apmat = $this->input->post('apellidoM');
    $div = $this->input->post('divisionID');
    $data = array('cuenta' => $cuenta, 'nombre' => $nombre,'appelidop' => $appat,'apellidom' => $apmat,'divisionID'=>$div);
    if($this->Alumno_model->update($cuenta, $data)){
      echo "<script>alert('No se pudo modificar alumno')</script>";
    } else{
      echo "<script>alert('Alumno modificado correctamente')</script>";
    }
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/alumnos').'" </script>;';
  }
  public function alumno($cuenta){
    
  }
}
