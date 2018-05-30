<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestamos_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Prestamos',$var);
    }

    public function delete($var){
      $this->db->delete('Prestamos', array('prestamoID' => $var));
    }

    public function update($prestamoID, $var){
      $this->db->where('prestamoID',$prestamoID);
      $this->db->update('Prestamos',$var);
    }

    public function getall($prestamoID,$registroID,$materialID){
      $array = array('prestamoID' => $prestamoID, 'registroID' => $registroID, 'materialID' => $materialID);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Prestamos');
      $data = $res->result_array();
      return $data;
    }


  }
