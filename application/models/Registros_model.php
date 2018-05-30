<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registros_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Registros',$var);
    }

    public function delete($var){
      $this->db->delete('Registros', array('registroID' => $var));
    }

    public function update($registroID, $var){
      $this->db->where('registroID',$registroID);
      $this->db->update('Registros',$var);
    }

    public function getall($registroID,$claseID,$horaPrestamo,	$horaEntrega	,$firmaPrestamo	,$formaEntrega	,$fecha	,$adminID){

//registroID	claseID	horaPrestamo	horaEntrega	firmaPrestamo	formaEntrega	fecha	adminID
      $array = array('registroID' => $registroID, 'claseID' => $claseID, 'horaPrestamo' => $horaPrestamo
    , 'horaEntrega' => $horaEntrega, 'firmaPrestamo' => $firmaPrestamo, 'formaEntrega' => $formaEntrega
  , 'fecha' => $fecha, 'adminID' => $adminID);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Registros');
      $data = $res->result_array();
      return $data;
    }


  }
