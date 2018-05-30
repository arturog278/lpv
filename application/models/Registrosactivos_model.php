<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrosactivos_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Registrosactivos',$var);
    }

    public function delete($var){
      $this->db->delete('Registrosactivos', array('registroActID' => $var));
    }

    public function update($registroActID, $var){
      $this->db->where('registroActID',$registroActID);
      $this->db->update('Registrosactivos',$var);
    }

    public function getall($registroActID,$RegistroID,$status){
      $array = array('registroActID' => $registroActID, 'RegistroID' => $RegistroID, 'status' => $status);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Registrosactivos');
      $data = $res->result_array();
      return $data;
    }


  }
