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

    public function bookings()
    {
        $this->form_validation->set_rules('room', 'Roomname');
        $this->form_validation->set_rules('name', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Telephone', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('message', 'Message');
        $this->form_validation->set_rules('adult', 'Adults', 'required');
        $this->form_validation->set_rules('child', 'Child', 'required');
        $this->form_validation->set_rules('arrival', 'Arrival', 'required');
        $this->form_validation->set_rules('departure', 'Departure', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('rooms/deluxe.php');
        } else {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'adults' => $_POST['adult'],
                'children' => $_POST['child'],
                'room' => $_POST['room'],
                'arrival' => $_POST['arrival'],
                'departure' => $_POST['departure'],
                'message' => $_POST['message']
            );

            $this->load->model('Booking_model');
            $result = $this->Booking_model->bookRoom($data);
            $this->Booking_model->roomc($data);

            echo $result;
            if ($result == -1) {
                echo 'error';
            }

            print_r($data);
        }
    }
}
