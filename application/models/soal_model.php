<?php
class Soal_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function soalganda_get(){
       $query= $this->db->get('soal_ganda');
       if($query->num_rows() >0){
           return $query->result_array();
       }
       else{
           return array();
       }
    }
    function soalessay_get(){
       $query= $this->db->get('soal_essay');
       if($query->num_rows() >0){
           return $query->result_array();
       }
       else{
           return array();
       } 
    }
}
?>
