<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisiones_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Divisiones',$var);
    }

    public function delete($var){
      $this->db->delete('Divisiones', array('divisionID' => $var));
    }

    public function update($cuenta, $var){
      $this->db->where('divisionID',$profesoresID);
      $this->db->update('Divisiones',$var);
    }

    public function getall()
    {
        $res = $this->db->get('profesores');
        $data = $res->result_array();
        return $data;
    }

    public function getbyNombre($nombre)
    {
      $this->db->where('nombre',$nombre);
      $res = $this->db->get('Divisiones');
      $data = $res->result_array();
      return $data;
    }
  }
