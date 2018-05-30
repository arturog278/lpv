<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aulas_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('aulas',$var);
    }

    public function delete($var){
      $this->db->delete('aulas', array('aulaID' => $var));
    }

    public function getall()
    {
        $this->db->select(*);
        $res = $this->db->get('aulas');
        $data = $res->result_array();
        return $data;
    }

    public function update($id,$data){
      $this->db->where('aulaID', $id);
      $this->db->update('aulas', $data);
    }

}
