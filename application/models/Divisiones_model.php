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

    public function getall($divisionID,$sigla,$nombre){
      $array = array('divisionID' => $divisionID, 'sigla' => $sigla, 'nombre' => $nombre);
      $this->db->select('*');
      $this->db->like($array);
      $res = $this->db->get('divisiones');
      $data = $res->result_array();
      return $data;
    }


  }
