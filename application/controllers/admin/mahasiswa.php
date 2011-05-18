<?php

class mahasiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            redirect('admin_login', 'refresh');
        }
        $this->load->model('mahasiswa_model');
    }

    function index() {

        $config = array(
            'base_url' => site_url() . '/admin/mahasiswa/index/',
            'total_rows' => $this->db->count_all('mahasiswa'),
            'per_page' => 5,
            'uri_segment'=>4
        );
        $this->pagination->initialize($config);
        $data['content'] = 'admin/mahasiswa_all';
        $data['pagination'] = $this->pagination->create_links();
        $data['mahasiswas'] = $this->mahasiswa_model->get_all($config['per_page'], $this->uri->segment(4));
        $this->load->view('admin/template', $data);
    }

    function add() {
        $config = array(
        
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ),
            
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('post')) {

                $this->mahasiswa_model->insert();
                $this->session->set_flashdata('notif', 'data has been inserted');
                redirect('admin/mahasiswa');
            }
        }
        $data['content'] = 'admin/form_mahasiswa';
        $data['type_form'] = 'post';
        $this->load->view('admin/template', $data);
    }

    function form_update($id='') {
        if ($id != '') {

            $data['isi'] = $this->mahasiswa_model->get_one($id);
            $data['content'] = 'admin/form_mahasiswa';
            $data['type_form'] = 'update';
            $this->load->view('admin/template', $data);
        } else {
            $this->session->set_flashdata('notif', 'no data');
            redirect('admin/mahasiswa');
        }
    }

    function update() {
        $config = array(
          
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ),
            
           
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('update')) {

            
                $this->mahasiswa_model->update($this->input->post('id_mahasiswa'));
                $this->session->set_flashdata('notif', 'Data is updated');
                redirect('admin/mahasiswa');
            }
        } else {
            $this->form_update($this->input->post('id_mahasiswa'));
        }
    }

    function delete() {
        if (isset($_POST['id_mahasiswa'])) {
            $this->mahasiswa_model->delete($_POST['id_mahasiswa']);
            
             $this->session->set_flashdata('notif','data has been deleted');
                redirect('admin/mahasiswa');
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
            redirect('admin/mahasiswa');
        }
    }

}

?>
