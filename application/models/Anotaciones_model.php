<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anotaciones_model extends CI_Model {

  public function __constructor()
  {
      parent::__construct();
  }

  public function insert($data){
    $this->db->insert('anotaciones',$data);
  }

  public function delete($var){
    $this->db->delete('anotaciones', array('anotacionID' => $var));
  }

  public function get_by_prestamo($var){
    $this->db->select('anotacionID','descripcion','resuelto');
    $this->db->where('descripcionID',$var);
    $res = $this->db->get('anotaciones');
    $data = $res->result_array();
    return $data;
  }

  public function get_all(){
    $res = $this->db->get('anotaciones');
    $data = $res->result_array();
    return $data;
  }

  public function update($id,$data){
    $this->db->where('anotacionID',$id);
    $this->db->update('anotaciones',$data);
  }

}
