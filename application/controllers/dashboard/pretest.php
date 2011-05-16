<?php

class Pretest extends CI_Controller {

//konstruktor class in ci 2.0
    function __construct() {
        parent:: __construct();
        $this->load->model('soal_model');
    }

    function index() {
       
    }
    function soal(){
        $data['cheked'];
        $data['soal_ganda']= $this->soal_model->soalganda_get(); 
        $this->load->view('dashboard/template',$data);
    }
    function submit(){
        
    }

}

?>
