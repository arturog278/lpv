<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('alumnos',$var);
      //$error = $this->db->error_message();
      $rows = $this->db->affected_rows();
    //  $res = array('error' => $error,'rows' => $rows );
      return $rows;
    }

    public function delete($var){
      $this->db->delete('alumnos', array('cuenta' => $var));
      return $this->db->affected_rows();
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
      $array = array('cuenta' => $cuenta,'nombre' => $nombre,'apellidop' => $apellidop,'apellidom' => $apellidom,'divisionID' => $divisionID);
      $this->db->select('*');
      $this->db->from('alumnos');
    //  $this->db->join('registroalumnos', 'cuenta = alumnoID');
      $this->db->like($array);
      $query = $this->db->get();
      $data = $query->result_array();
      return $data;
    }
}
