<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registroalumnos_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Registroalumnos',$var);
    }

    public function delete($var){
      $this->db->delete('Registroalumnos', array('alumnoID' => $var));
    }

    public function update($alumnoID, $var){
      $this->db->where('alumnoID',$alumnoID);
      $this->db->update('Registroalumnos',$var);
    }

    public function getall($alumnoID,$hora){
      $array = array('alumnoID' => $alumnoID, 'hora' => $hora);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Registroalumnos');
      $data = $res->result_array();
      return $data;
    }


  }
