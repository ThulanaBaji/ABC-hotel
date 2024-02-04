<?php 

//acc base controller for http://ABC-hotel.com/acc

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
            $data = $this->session->userdata('accinfo');
            $this->load->view('acc/dashboard', $data);
        }
    }

    public function logout(){
        if ($this->checkSessionExist()) {
            $this->session->unset_userdata('accinfo');
            redirect('/');
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('accinfo')){
            $this->session->set_flashdata('error','Please login first to access the page');
            redirect('acc');
        }else{
            return true;
        }
    }
}