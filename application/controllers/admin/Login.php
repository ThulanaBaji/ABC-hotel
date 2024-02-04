<?php 

//admin base controller for http://ABC-hotel.com/admin

class Login extends CI_Controller 
{
    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index(){
        if ($this->isAcc())
            redirect('acc/dashboard');

        $success = $this->session->flashdata('success');
		$error = $this->session->flashdata('error');
        $data = [];
        if (!empty($success)) {
            $data['success'] = $success;
        }
        if (!empty($error)) {
            $data['error'] = $error;
        }
        if(isset($data['error']) || isset($data['success'])){
            $this->load->view('admin/login',$data);
        }else{
            if($this->checkSessionExist()){
                redirect('admin/dashboard');
            }else{
                $this->load->view('admin/login',$data);
            }
        }
    }

    public function login(){
        $this->load->model('admin_model');
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/login');
        }else{
            $result = $this->admin_model->authenticate(array('email' => $_POST['email'], 'password' => md5($_POST['password'])));

            if($result){
                $result = $this->admin_model->getinfo($_POST['email']);
                $session_user = $result[0];
                $this->session->set_userdata('admininfo', $session_user);
                redirect('admin/dashboard');
            }else{
                $this->session->set_flashdata('error','Email or password incorrect. Please check');
                redirect('admin');
            }
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('admininfo')){
            return false;
        }else{
            return true;
        }
    }

    private function isAcc(){
        if(!$this->session->has_userdata('accinfo')){
            return false;
        }else{
            return true;
        }
    }
}