<?php

class soal_random_essay extends CI_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            redirect('admin_login', 'refresh');
        }
        $this->load->model('soal_random_essay_model');
    }

    function index() {

        $config = array(
            'base_url' => site_url() . '/admin/soal_random_essay/index/',
            'total_rows' => $this->db->count_all('soal_random_essay'),
            'per_page' => 5,
            'uri_segment'=>4
        );
        $this->pagination->initialize($config);
        $data['content'] = 'admin/soal_random_essay_all';
        $data['pagination'] = $this->pagination->create_links();
        $data['soal_random_essays'] = $this->soal_random_essay_model->get_all($config['per_page'], $this->uri->segment(4));
        $this->load->view('admin/template', $data);
    }

    function add() {
        $config = array(
        
            array(
                'field' => 'prake',
                'label' => 'prake',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_mahasiswa',
                'label' => 'id_mahasiswa',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_soal',
                'label' => 'id_soal',
                'rules' => 'required'
            ),
            
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('post')) {

                $this->soal_random_essay_model->insert();
                $this->session->set_flashdata('notif', 'data has been inserted');
                redirect('admin/soal_random_essay');
            }
        }
        $data['content'] = 'admin/form_soal_random_essay';
        $data['type_form'] = 'post';
        $this->load->view('admin/template', $data);
    }

    function form_update($id='') {
        if ($id != '') {

            $data['isi'] = $this->soal_random_essay_model->get_one($id);
            $data['content'] = 'admin/form_soal_random_essay';
            $data['type_form'] = 'update';
            $this->load->view('admin/template', $data);
        } else {
            $this->session->set_flashdata('notif', 'no data');
            redirect('admin/soal_random_essay');
        }
    }

    function update() {
        $config = array(
          
            array(
                'field' => 'prake',
                'label' => 'prake',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_mahasiswa',
                'label' => 'id_mahasiswa',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'id_soal',
                'label' => 'id_soal',
                'rules' => 'required'
            ),
            
           
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('update')) {

            
                $this->soal_random_essay_model->update($this->input->post('id'));
                $this->session->set_flashdata('notif', 'Data is updated');
                redirect('admin/soal_random_essay');
            }
        } else {
            $this->form_update($this->input->post('id'));
        }
    }

    function delete() {
        if (isset($_POST['id'])) {
            $this->soal_random_essay_model->delete($_POST['id']);
            
             $this->session->set_flashdata('notif','data has been deleted');
                redirect('admin/soal_random_essay');
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
            redirect('admin/soal_random_essay');
        }
    }

}

?>
