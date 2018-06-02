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
    echo '<script type="text/javascript"> window.location.href = "'.site_url('Consulta/alumnos').'" </script>;';
  }
  public function alumno($cuenta){
    $data['title'] = "Your Application Title"; // can be change according to views
    $this->load->model('Alumno_model');
    $data['alumnos'] = $this->Alumno_model->getall($cuenta,'','','','');
    $this->load->template('AAluE', $data); // this will load the view file
  }
}
