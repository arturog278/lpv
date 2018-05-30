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

    public function update($materialID, $var){
      $this->db->where('materialID',$materialID);
      $this->db->update('Materiales',$var);
    }

    public function getall($materialID,$descripcion,$nombre,$fechaAdquisicion,$modelo){
      $array = array('materialID' => $materialID, 'descripcion' => $descripcion, 'nombre' => $nombre, 'fechaAdquisicion' => $fechaAdquisicion, 'modelo' => $modelo);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('materiales');
      $data = $res->result_array();
      return $data;
    }

}
