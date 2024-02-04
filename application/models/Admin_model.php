<?php

Class Admin_model extends CI_Model {
    public function getinfo($email){
        $condition = "email = '{$email}' AND status = 'available'";
        $query =$this->db->select('id, email, username')
        ->where($condition)
        ->get('admin');

        return $query->result_array();
    }

    public function authenticate($data){
        $condition = "email='{$data['email']}' AND password='{$data['password']}' AND status='available'";
        $query = $this->db->select('*')
                        ->where($condition)
                        ->get('admin');
                        
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
}