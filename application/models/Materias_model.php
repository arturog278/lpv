<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }


    public function insert($var){
      $this->db->insert('Materias',$var);
    }

    public function delete($var){
      $this->db->delete('Materias', array('materiaID' => $var));
    }

    public function update($materiaID, $var){
      $this->db->where('materiaID',$materiaID);
      $this->db->update('Materias',$var);
    }

    public function getall($materiaID,$nombre,$divisionID){
      $array = array('materiaID' => $materiaID, 'nombre' => $nombre, 'divisionID' => $divisionID);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Materias');
      $data = $res->result_array();
      return $data;
    }

}
