<?php
class Model_ponuk extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_ponuky($id = FALSE){
    if($id === FALSE){
      $query = $this->db->get('ponuka');
      return $query->result_array();
    }
    $query = $this->db->get_where('ponuka', array('id' =>$id));
    return $query ->row_array();
  }
}
