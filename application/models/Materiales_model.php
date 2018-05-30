<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materiales_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }


    public function insert($var){
      $this->db->insert('Materiales',$var);
    }

    public function delete($var){
      $this->db->delete('Materiales', array('materialID' => $var));
    }

    public function update($cuenta, $var){
      $this->db->where('materialId',$materialID);
      $this->db->update('Materiales',$var);
    }

    public function get_materiales()
    {
        $res = $this->db->get('materiales');
        $data = $res->result_array();
        return $data;
    }
    public function getbyID($materialID)
    {
      $this->db->where('materialID',$materialID);
      $data = $res->result_array();
      return $data;
    }
    public function getbyNombre($nombre)
    {
      $this->db->where('nombre',$nombre);
      $data = $res->result_array();
      return $data;
    }
}
