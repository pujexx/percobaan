<?php
class Home extends CI_Controller {

//konstruktor class in ci 2.0
    function __construct() {
        parent:: __construct();
    }

        function index() {
        $this->load->view(template("index"));
    }

}
?>
