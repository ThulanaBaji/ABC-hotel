<?php 

//admin base controller for http://ABC-hotel.com/admin

class Billhistory extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('Admin_model');
    }

    public function index(){
        if ($this->checkSessionExist()){
            $data = $this->session->userdata('admininfo');
            $data['bills'] = $this->Admin_model->getBills();
            $this->load->view('admin/billhistory', $data);
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