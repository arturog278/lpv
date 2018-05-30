<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aulas_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('aulas',$var);
      $rows = $this->db->affected_rows();
      return $rows;
    }

    public function delete($var){
      $this->db->delete('aulas', array('aulaID' => $var));
    }

    public function getall($aulaID,$numero,$edificio)
    {
      $array = array('aulaID' => $aulaID,'numero' => $numero,'edificio' => $edificio);
      $this->db->select('*');
      $this->db->from('aulas');
    //  $this->db->join('registroalumnos', 'cuenta = alumnoID');
      $this->db->like($array);
      $query = $this->db->get();
      $data = $query->result_array();
      return $data;
    }

    public function update($id,$data){
      $this->db->where('aulaID', $id);
      $this->db->update('aulas', $data);
    }

}
