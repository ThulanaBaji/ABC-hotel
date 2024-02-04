<?php

class Inventory_model extends CI_Model
{
    public function Addstock($data)
    {
        $insert_data = array(
            'Item_code' => $data['itemname'],
            'Item_name' => $data['item'],
            'In_use_stock' => $data['inuse'],
            'Available_stock' => $data['available']
        );

        print_r($data);
        $this->db->insert('inventory', $insert_data);
    }
}
