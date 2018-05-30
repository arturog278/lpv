<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesores_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Profesores',$var);
    }

    public function delete($var){
      $this->db->delete('Profesores', array('profesoresID' => $var));
    }

    public function update($cuenta, $var){
      $this->db->where('materialId',$profesoresID);
      $this->db->update('Materiales',$var);
    }

    public function get_profesores()
    {
        $this->db->select(*);
        $res = $this->db->get('profesores');
        $data = $res->result_array();
        return $data;
    }
    public function getbyID($materialID)
    {
      $this->db->where('profesoresID',$profesoresID);
      $data = $res->result_array();
      return $data;
    }
    public function getbyNombre($nombre)
    {
      $this->db->where('nombre',$nombre);
      $this->db->where('apellidop',$apellidop);
      $this->db->where('appellidom',$apellidom);
      $data = $res->result_array();
      return $data;
    }
  }
