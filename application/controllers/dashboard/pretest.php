<?php

class Pretest extends CI_Controller {

//konstruktor class in ci 2.0
    function __construct() {
        parent:: __construct();
        $this->load->model('soal_model');
    }

    function index() {
        $data['content'] = 'dashboard/pretest';
        $this->load->view('dashboard/template', $data);
    }

    function soal() {
   //     $data['cheked'];
        
        //  $data['soal_ganda'] = $this->soal_model->soalganda_get();
        $data['soal_essay'] =  $this->soal_model->soalessay_get();
        $data['content'] = 'dashboard/soal_essay';
        $this->load->view('dashboard/template', $data);
    }

    function submit() {
        
    }

}

?>
