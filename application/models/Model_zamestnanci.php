<?php
class Model_zamestnanci extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function get_zamestnanec($id = FALSE){
    if($id === FALSE){
      $query = $this->db->get('zamestnanci');
      return $query->result_array();
    }
    $query = $this->db->get_where('zamestnanci', array('id' =>$id));
    return $query ->row_array();
  }
}
