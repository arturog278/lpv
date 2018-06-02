<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materiales_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }


    public function insert($var){
      $this->db->insert('materiales',$var);
      $res = $this->db->affected_rows();
      return $res;
    }

    public function delete($var){
      $this->db->delete('materiales', array('materialID' => $var));
      return $this->db->affected_rows();
    }

    public function update($materialID, $var){
      $this->db->where('materialID',$materialID);
      $this->db->update('materiales',$var);
      return $this->db->affected_rows();
    }

    public function getall($materialID,$descripcion,$nombre,$fechaAdquisicion,$modelo){
      $array = array('materialID' => $materialID, 'descripcion' => $descripcion, 'nombre' => $nombre, 'fechaAdquisicion' => $fechaAdquisicion, 'modelo' => $modelo);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('materiales');
      $data = $res->result();
      return $data;
    }

}
