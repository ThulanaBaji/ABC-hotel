<?php 

//admin base controller for http://ABC-hotel.com/admin

class Inventory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('Inventory_model');

    }

    public function index()
    {
        if ($this->checkSessionExist()) {
            $data = $this->session->userdata('admininfo');

            $success = $this->session->flashdata('success');
            $error = $this->session->flashdata('error');
            if($success != '')
                $data['success'] = $success;
            if($error != '')
                $data['error'] = $error;

            $data['items'] = $this->Inventory_model->getItems();

            $this->session->flashdata('error');
            $this->load->view('admin/inventory', $data);
        }
    }

    private function checkSessionExist()
    {
        if (!$this->session->has_userdata('admininfo')) {
            $this->session->set_flashdata('error', 'Please login first to access the page');
            redirect('admin');
        } else {
            return true;
        }
    }

    public function add()
    {
        $result = $this->Inventory_model->Addstock($_POST);

        if ($result == -1) {
            $this->session->set_flashdata('error', 'Duplicate item code !');
            redirect('admin/inventory');
        }

        $this->session->set_flashdata('success', 'Item added');
        redirect('admin/inventory');
        
    }

    public function edit(){
        $this->Inventory_model->editItem($_POST);
        redirect('admin/inventory');
    }

    public function delete($id){
        $this->Inventory_model->deleteItem($id);
        redirect('admin/inventory');
    }
}
