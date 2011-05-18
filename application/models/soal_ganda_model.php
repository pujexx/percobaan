<?php

class Soal_ganda_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('soal_ganda', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('soal_ganda');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'soal' => $this->input->post('soal', TRUE),
           
            'a' => $this->input->post('a', TRUE),
           
            'b' => $this->input->post('b', TRUE),
           
            'c' => $this->input->post('c', TRUE),
           
            'd' => $this->input->post('d', TRUE),
           
            'id_mk' => $this->input->post('id_mk', TRUE),
           
            'prake' => $this->input->post('prake', TRUE),
           
            'key' => $this->input->post('key', TRUE),
           
        );
        $this->db->insert('soal_ganda', $data);
    }

    function update($id) {
        $data = array(
         
       'soal' => $this->input->post('soal', TRUE),
       
       'a' => $this->input->post('a', TRUE),
       
       'b' => $this->input->post('b', TRUE),
       
       'c' => $this->input->post('c', TRUE),
       
       'd' => $this->input->post('d', TRUE),
       
       'id_mk' => $this->input->post('id_mk', TRUE),
       
       'prake' => $this->input->post('prake', TRUE),
       
       'key' => $this->input->post('key', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('soal_ganda', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('soal_ganda');
        }
    }

}
?>
