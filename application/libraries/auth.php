<?php

class Auth {

    function __construct() {
        $this->au = & get_instance();
        $this->ai = & get_instance();
        $this->au->load->database();
        $this->ai->load->database();
    }

    function cekloginmahasiswa($username, $password) {
        $this->au->db->where('username', $username);
        $this->au->db->where('password', md5($password));
        $this->au->db->where('status', 1);
        $result = $this->au->db->get('mahasiswa');
        if ($result->num_rows() == 1) {
            $ses = $result->row_array();
            $prake = $this->ai->db->get('prake');
            $jos = $prake->row_array();
            $sess = array(
            'username' => $ses['username'],
            'id_mahasiswa' => $ses['id_mahasiswa'],
            'nama' => $ses['nama'],
            'login_mahasiswa' => TRUE,
            'prake' => $jos['prake']
            );
            $this->CI->session->set_userdata($sess);

            return TRUE;
        } else {
            return FALSE;
        }
    }

    function process_login($user, $pass) {
        $this->au->db->where('username', $user);

        $this->au->db->where('password', md5($pass));
        $this->au->db->where('status', 1);
        $eo = $this->au->db->get('user_ci');

        if ($eo->num_rows == 1) {
            $login = $eo->row_array();


            $id = $login['id'];
            $sess = array('id' => $id, 'login' => TRUE);
            $this->au->session->set_userdata($sess);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

?>
