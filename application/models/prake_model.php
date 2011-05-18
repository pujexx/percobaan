<?php

class Prake_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('prake', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('prake');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'prake' => $this->input->post('prake', TRUE),
           
        );
        $this->db->insert('prake', $data);
    }

    function update($id) {
        $data = array(
         
       'prake' => $this->input->post('prake', TRUE),
       
        );
        $this->db->where('id', $id);
        $this->db->update('prake', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('prake');
        }
    }

}
?>
