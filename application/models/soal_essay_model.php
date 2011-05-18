<?php

class Soal_essay_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('soal_essay', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('soal_essay');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'soal' => $this->input->post('soal', TRUE),
           
            'prake' => $this->input->post('prake', TRUE),
           
        );
        $this->db->insert('soal_essay', $data);
    }

    function update($id) {
        $data = array(
         
       'soal' => $this->input->post('soal', TRUE),
       
       'prake' => $this->input->post('prake', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('soal_essay', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('soal_essay');
        }
    }

}
?>
