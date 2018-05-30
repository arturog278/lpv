<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Horarios_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }
    public function insert($var){
      $this->db->insert('Horarios',$var);
    }

    public function delete($var){
      $this->db->delete('Horarios', array('horarioID' => $var));
    }

    public function update($horarioID, $var){
      $this->db->where('horarioID',$horarioID);
      $this->db->update('Horarios',$var);
    }

    public function getall($horarioID,$dia,$hora){
      $array = array('horarioID' => $horarioID, 'dia' => $dia, 'hora' => $hora);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('Horarios');
      $data = $res->result_array();
      return $data;
    }


  }
