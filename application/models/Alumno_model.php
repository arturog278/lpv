<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('alumnos',$var);
      $rows = $this->db->affected_rows();
      return $rows;
    }

    public function delete($var){
      $this->db->delete('alumnos', array('cuenta' => $var));
      return $this->db->affected_rows();
    }

    public function update1($data) {
    extract($data);
    $this->db->where('cuenta',$cuenta);
    $this->db->update($table_name, array('title' => $title));
    return true;
}

    public function update($cuenta, $var){
      $this->db->where('cuenta',$cuenta);
      $this->db->update('alumnos',$var);
    }

    public function get_credenciales($cuenta){
      $this->db->select('nombre');
      $this->db->where('cuenta',$user);
      $res = $this->db->get('alumnos');
      $data = $res->result_array();
      return $data[0];
    }

    public function getall($cuenta,$nombre,$apellidop,$apellidom,$divisionID)
    {
      $array = array('cuenta' => $cuenta,'alumnos.nombre' => $nombre,'appelidop' => $apellidop,'apellidom' => $apellidom,'divisiones.nombre' => $divisionID);
      $this->db->select('alumnos.nombre')
      ->select('divisiones.nombre division')
      ->select('appelidop')
      ->select('cuenta')
      ->select('apellidom');
      $this->db->from('alumnos');
      $this->db->join('divisiones', 'alumnos.divisionID = divisiones.divisionID');
      $this->db->like($array);
      $query = $this->db->get();
      $data = $query->result();
      return $data;
    }
}
