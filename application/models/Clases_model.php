<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clases_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('clases',$var);
    }

    public function delete($var){
      $this->db->delete('clases', array('claseID' => $var));
    }

    public function getall($claseID,$aulaID,$profesorID,$horarioID,$materiaID)
    {
      $array = array('claseID' => $claseID,'aulaID' => $aulaID,'profesorID' => $profesorID,'horarioID' => $horarioID,'materiaID' => $materiaID);
      $this->db->select('*');
      $this->db->from('clases');
    //  $this->db->join('registroalumnos', 'cuenta = alumnoID');
      $this->db->like($array);
      $query = $this->db->get();
      $data = $query->result_array();
      return $data;
    }

    public function update($id,$data){
      $this->db->where('claseID', $id);
      $this->db->update('clases', $data);
    }

}
