<?php

class soal_ganda extends CI_Controller {

    function __construct() {
        parent::__construct();
          if ($this->session->userdata("login") != TRUE) {
            $this->session->set_flashdata('login_notif','<p>You must be logged in</p>');
            redirect('admin_login', 'refresh');
        }
        $this->load->model('soal_ganda_model');
    }

    function index() {

        $config = array(
            'base_url' => site_url() . '/admin/soal_ganda/index/',
            'total_rows' => $this->db->count_all('soal_ganda'),
            'per_page' => 5,
            'uri_segment'=>4
        );
        $this->pagination->initialize($config);
        $data['content'] = 'admin/soal_ganda_all';
        $data['pagination'] = $this->pagination->create_links();
        $data['soal_gandas'] = $this->soal_ganda_model->get_all($config['per_page'], $this->uri->segment(4));
        $this->load->view('admin/template', $data);
    }

    function add() {
        $config = array(
        
            array(
                'field' => 'soal',
                'label' => 'soal',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'a',
                'label' => 'a',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'b',
                'label' => 'b',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'c',
                'label' => 'c',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'd',
                'label' => 'd',
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
            
            array(
                'field' => 'key',
                'label' => 'key',
                'rules' => 'required'
            ),
            
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('post')) {

                $this->soal_ganda_model->insert();
                $this->session->set_flashdata('notif', 'data has been inserted');
                redirect('admin/soal_ganda');
            }
        }
        $data['content'] = 'admin/form_soal_ganda';
        $data['type_form'] = 'post';
        $this->load->view('admin/template', $data);
    }

    function form_update($id='') {
        if ($id != '') {

            $data['isi'] = $this->soal_ganda_model->get_one($id);
            $data['content'] = 'admin/form_soal_ganda';
            $data['type_form'] = 'update';
            $this->load->view('admin/template', $data);
        } else {
            $this->session->set_flashdata('notif', 'no data');
            redirect('admin/soal_ganda');
        }
    }

    function update() {
        $config = array(
          
            array(
                'field' => 'soal',
                'label' => 'soal',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'a',
                'label' => 'a',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'b',
                'label' => 'b',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'c',
                'label' => 'c',
                'rules' => 'required'
            ),
            
            array(
                'field' => 'd',
                'label' => 'd',
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
            
            array(
                'field' => 'key',
                'label' => 'key',
                'rules' => 'required'
            ),
            
           
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == TRUE) {
            if ($this->input->post('update')) {

            
                $this->soal_ganda_model->update($this->input->post('id'));
                $this->session->set_flashdata('notif', 'Data is updated');
                redirect('admin/soal_ganda');
            }
        } else {
            $this->form_update($this->input->post('id'));
        }
    }

    function delete() {
        if (isset($_POST['id'])) {
            $this->soal_ganda_model->delete($_POST['id']);
            
             $this->session->set_flashdata('notif','data has been deleted');
                redirect('admin/soal_ganda');
        } else {
            $this->session->set_flashdata('notif', 'no data deleted');
            redirect('admin/soal_ganda');
        }
    }

}

?>
