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
      $this->db->delete('profesores', array('profesorID' => $var));
      $rows = $this->db->affected_rows();
      return $rows;
    }

    public function update($cuenta, $var){
      $this->db->where('profesorID',$cuenta);
      $this->db->update('profesores',$var);
      $rows = $this->db->affected_rows();
      return $rows;
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
      $data = $res->result();
      return $data;
    }

    public function getforPrestamo($nombre,$apellidop,$apellidom,$nombreM){
      $array = array('profesores.nombre' => $nombre,'apellidop' => $apellidop,'apellidom' => $apellidom,'materias.nombre' => $nombreM);
      $this->db->select('profesores.profesorID profesorID, profesores.nombre nombre, apellidop, apellidom, materias.nombre nombreM');
      $this->db->from('profesores');
      $this->db->join('clases', 'profesores.profesorID = clases.profesorID');
      $this->db->join('materias', 'clases.materiaID = materias.materiaID');
      $this->db->join('horarios', 'clases.horarioID = horarios.horarioID');
      $this->db->like($array);
      $this->db->where('hora <', date("H:i",strtotime(gmdate("H:i"))-7200));
      $this->db->where('dia', date("Y-m-d"));
      $query = $this->db->get();
      $data = $query->result();
      return $data;
    }
  }
