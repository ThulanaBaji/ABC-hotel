<?php 

//admin base controller for http://ABC-hotel.com/admin

class Dashboard extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index(){
        if ($this->checkSessionExist()){
            $data = $this->session->userdata('admininfo');
            $this->load->view('admin/dashboard', $data);
        }
    }

    public function logout(){
        if ($this->checkSessionExist()) {
            $this->session->unset_userdata('admininfo');
            redirect('admin');
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('admininfo')){
            $this->session->set_flashdata('error','Please login first to access the page');
            redirect('admin');
        }else{
            return true;
        }
    }
}