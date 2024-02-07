<?php

class Rooms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('rooms/index');
    }

    public function deluxe()
    {
        $this->load->view('rooms/deluxe');
    }
    public function double()
    {
        $this->load->view('rooms/double');
    }
    public function triple()
    {
        $this->load->view('rooms/triple');
    }

}
