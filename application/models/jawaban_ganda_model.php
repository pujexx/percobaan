<?php

class Jawaban_ganda_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('jawaban_ganda', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('jawaban_ganda');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'id_mahasiswa' => $this->input->post('id_mahasiswa', TRUE),
           
            'jawaban' => $this->input->post('jawaban', TRUE),
           
            'id_mk' => $this->input->post('id_mk', TRUE),
           
            'prake' => $this->input->post('prake', TRUE),
           
        );
        $this->db->insert('jawaban_ganda', $data);
    }

    function update($id) {
        $data = array(
         
       'id_mahasiswa' => $this->input->post('id_mahasiswa', TRUE),
       
       'jawaban' => $this->input->post('jawaban', TRUE),
       
       'id_mk' => $this->input->post('id_mk', TRUE),
       
       'prake' => $this->input->post('prake', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('jawaban_ganda', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('jawaban_ganda');
        }
    }

}
?>
