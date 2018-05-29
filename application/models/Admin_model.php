<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __constructor()
    {
        parent::__construct();
    }

    public function insert($var){
      $this->db->insert('admin',$var);
    }

    public function delete($var){
      $this->db->delete('admin', array('adminID' => $var));
    }

    public function get_credenciales($user,$pass){
      $this->db->select('adminID');
      $this->db->where('usuario',$user);
      $this->db->where('pass',$pass);
      $res = $this->db->get('admin');
      $data = $res->result_array();
      return $data[0];
    }

    public function get_users()
    {
        $this->db->select('usuario','nombre','apellidop','apellidom','lvl','adminID');
        $res = $this->db->get('admin');
        $data = $res->result_array();
        return $data;
    }

    public function update_usuario($id,$data){
      $this->db->where('adminID', $id);
      $this->db->update('admin', $data);
    }

}
