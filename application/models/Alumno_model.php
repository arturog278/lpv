<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('alumnos',$var);
    }

    public function delete($var){
      $this->db->delete('alumnos', array('cuenta' => $var));
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

    public function getall()
    {
      $this->db->select('*');
      $this->db->from('alumnos');
      $this->db->join('registroalumnos', 'cuenta = alumnoID');

  $query = $this->db->get();
      return $data;
    }
    public function getbyName($nombre,$apellidop,$apellidom)
    {
      $this->db->where('nombre',$nombre);
      $this->db->where('apellidop',$apellidop);
      $this->db->where('apellidom',$apellidom);
      $res = $this->db->get('alumnos');
      $data = $res->result_array();
      return $data;
    }
    public function getbyCuenta($cuenta)
    {
      $this->db->where('cuenta',$cuenta);
      $res = $this->db->get('alumnos');
      $data = $res->result_array();
      return $data;
    }
}
