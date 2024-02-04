<?php 

//admin base controller for http://ABC-hotel.com/admin

class Inventory extends CI_Controller 
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
            $this->load->view('admin/inventory', $data);
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

    public function add(){

        $data = array(
            'itemname' => $_POST['itemname'],
            'item' => $_POST['item'],
            'inuse' => $_POST['inuse'],
            'available' => $_POST['available'],
        );

        $this->load->model('Inventory_model');
        $result = $this->Inventory_model->Addstock($data);

        echo $result;
        if ($result == -1) {
            echo 'error';
        }

        print_r($data);
    
        }

    }
