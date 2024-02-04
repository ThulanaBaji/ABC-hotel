<?php 

//acc base controller for http://ABC-hotel.com/acc

class Login extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }
}