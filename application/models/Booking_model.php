<?php

class Booking_model extends CI_Model
{
    public function bookRoom($data)
    {
        $currentTimestamp = time();
        $insert_data = array(
            'Customer_id' => $currentTimestamp / 2,
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'country' => $data['country'],
            'adults' => $data['adults'],
            'children' => $data['children'],
            'arrival' =>   $data['arrival'],
            'departure' =>   $data['departure'],
            'message' =>   $data['message']);

        $this->db->insert('booking', $insert_data);

        if ($this->db->affected_rows() == 1) {
            return 'success'; 
            return 'failure'; 
        }
    }

    public function roomc($data){
        $currentTimestamp = time();
        $insert_data = array(
            'Customer_id' => $currentTimestamp / 2,
            'room_Name' => $data['room'],
            
        );
        $this->db->insert('room', $insert_data);

        if ($this->db->affected_rows() == 1) {
            return 'success'; 
            return 'failure'; 
        }
    }



}