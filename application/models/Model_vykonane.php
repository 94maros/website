<?php
class Model_vykonane extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_vykonana($id = FALSE){
    if($id === FALSE){
      $query = $this->db->get('vykonane');
      return $query->result_array();
    }
    $query = $this->db->get_where('vykonane', array('id' =>$id));
    return $query ->row_array();
  }
}
