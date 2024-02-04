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

    public function index(){
        if ($this->isAdmin())
            redirect('admin/dashboard');

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
            $this->load->view('acc/login',$data);
        }else{
            if($this->checkSessionExist()){
                $this->load->view('acc/dashboard');
            }else{
                $this->load->view('acc/login',$data);
            }
        }
    }

    public function login(){
        $this->load->model('acc_model');
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('acc/login');
        }else{
            $result = $this->acc_model->authenticate(array('email' => $_POST['email'], 'password' => md5($_POST['password'])));

            if($result){
                $result = $this->acc_model->getinfo($_POST['email']);
                $session_user = $result[0];
                $this->session->set_userdata('accinfo', $session_user);
                redirect('acc/dashboard');
            }else{
                $this->session->set_flashdata('error','Email or password incorrect. Please check');
                redirect('acc');
            }
        }
    }

    private function checkSessionExist(){
        if(!$this->session->has_userdata('accinfo')){
            return false;
        }else{
            return true;
        }
    }

    private function isAdmin(){
        if(!$this->session->has_userdata('admininfo')){
            return false;
        }else{
            return true;
        }
    }
}