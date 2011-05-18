<?php

class jawaban_ganda extends CI_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            redirect('admin_login', 'refresh');
        }
        $this->load->model('jawaban_ganda_model');
    }

    function index() {

        $config = array(
            'base_url' => site_url() . '/admin/jawaban_ganda/index/',
            'total_rows' => $this->db->count_all('jawaban_ganda'),
            'per_page' => 5,
            'uri_segment'=>4
        );
        $this->pagination->initialize($config);
        $data['content'] = 'admin/jawaban_ganda_all';
        $data['pagination'] = $this->pagination->create_links();
        $data['jawaban_gandas'] = $this->jawaban_ganda_model->get_all($config['per_page'], $this->uri->segment(4));
        $this->load->view('admin/template', $data);
    }

    function add() {
        $config = array(
        
            array(
                'field' => 'id_mahasiswa',
                'label' => 'id_mahasiswa',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'jawaban',
                'label' => 'jawaban',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_mk',
                'label' => 'id_mk',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'prake',
                'label' => 'prake',
                'rules' => 'required'
            ),
            
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('post')) {

                $this->jawaban_ganda_model->insert();
                $this->session->set_flashdata('notif', 'data has been inserted');
                redirect('admin/jawaban_ganda');
            }
        }
        $data['content'] = 'admin/form_jawaban_ganda';
        $data['type_form'] = 'post';
        $this->load->view('admin/template', $data);
    }

    function form_update($id='') {
        if ($id != '') {

            $data['isi'] = $this->jawaban_ganda_model->get_one($id);
            $data['content'] = 'admin/form_jawaban_ganda';
            $data['type_form'] = 'update';
            $this->load->view('admin/template', $data);
        } else {
            $this->session->set_flashdata('notif', 'no data');
            redirect('admin/jawaban_ganda');
        }
    }

    function update() {
        $config = array(
          
            array(
                'field' => 'id_mahasiswa',
                'label' => 'id_mahasiswa',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'jawaban',
                'label' => 'jawaban',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_mk',
                'label' => 'id_mk',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'prake',
                'label' => 'prake',
                'rules' => 'required'
            ),
            
           
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('update')) {

            
                $this->jawaban_ganda_model->update($this->input->post('id'));
                $this->session->set_flashdata('notif', 'Data is updated');
                redirect('admin/jawaban_ganda');
            }
        } else {
            $this->form_update($this->input->post('id'));
        }
    }

    function delete() {
        if (isset($_POST['id'])) {
            $this->jawaban_ganda_model->delete($_POST['id']);
            
             $this->session->set_flashdata('notif','data has been deleted');
                redirect('admin/jawaban_ganda');
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
            redirect('admin/jawaban_ganda');
        }
    }

}

?>
