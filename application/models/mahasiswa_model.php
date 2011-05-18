<?php

class Mahasiswa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('mahasiswa', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id_mahasiswa', $id);
        $result = $this->db->get('mahasiswa');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'username' => $this->input->post('username', TRUE),
           
            'password' => $this->input->post('password', TRUE),
           
            'nama' => $this->input->post('nama', TRUE),
           
            'status' => $this->input->post('status', TRUE),
           
        );
        $this->db->insert('mahasiswa', $data);
    }

    function update($id) {
        $data = array(
         
       'username' => $this->input->post('username', TRUE),
       
       'password' => $this->input->post('password', TRUE),
       
       'nama' => $this->input->post('nama', TRUE),
       
       'status' => $this->input->post('status', TRUE),
       
        );
        $this->db->where('id_mahasiswa', $id);
        $this->db->update('mahasiswa', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id_mahasiswa', $sip);
            $this->db->delete('mahasiswa');
        }
    }

}
?>
