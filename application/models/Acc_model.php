<?php

Class Acc_model extends CI_Model {
    public function getinfo($email){
        $condition = "email = '{$email}' AND status = 'available'";
        $query =$this->db->select('id, email, username')
        ->where($condition)
        ->get('acc');

        return $query->result_array();
    }

    public function authenticate($data){
        $condition = "email='{$data['email']}' AND password='{$data['password']}' AND status='available'";
        $query = $this->db->select('*')
                        ->where($condition)
                        ->get('acc');
                        
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }

    public function addBill($data){
        $insert_data = array(
            'id' => NULL,
            'reference' => $data['reference'],
            'customer_name' => $data['name'],
            'num_adults' => $data['adults'],
            'num_kids' => $data['kids'],
            'check_in' => $data['ci'],
            'check_out' => $data['co'],
            'items' =>   $data['itemjson'],
            'total' =>   $data['total'],
            'status' =>  'paid',
            'room' =>   $data['room']);
        $this->db->insert('bill', $insert_data);
    }

    public function archiveBill($id){
        $str = "UPDATE `bill` SET `status`='archived' WHERE id = ?";
        $this->db->query($str, $id);
    }

    public function getBills(){
        $result = $this->db->select('*')
                    ->where('status !=', 'archived')
                    ->get('bill');
        return $result->result_array();
    }

    public function getBillByID($id){
        $result = $this->db->select('*')
                    ->where('id', $id)
                    ->get('bill');

        return $result->result_array();
    }
}