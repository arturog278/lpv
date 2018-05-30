<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profesores_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('profesores',$var);
      $res = $this->db->affected_rows();
      return $res;
    }

    public function delete($var){
      $this->db->delete('profesores', array('profesoresID' => $var));
    }

    public function update($cuenta, $var){
      $this->db->where('materialId',$profesoresID);
      $this->db->update('profesores',$var);
    }

    public function get_credenciales($user,$pass){
      $this->db->select('nombre');
      $this->db->where('profesorID',$user);
      $this->db->where('pass',$pass);
      $res = $this->db->get('profesores');
      $data = $res->result_array();
      return $data[0];
    }

    public function getall($profesorID,$pass,$nombre,$apellidom,$apellidop){
      $array = array('profesorID' => $profesorID, 'pass' => $pass, 'nombre' => $nombre, 'apellidom' => $apellidom, 'apellidop' => $apellidop);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('profesores');
      $data = $res->result_array();
      return $data;
    }
  }
