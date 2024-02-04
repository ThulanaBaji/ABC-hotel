<?php

class Inventory_model extends CI_Model
{
    public function Addstock($data)
    {
        $this->db->where('Item_code', $data['itemcode']);
        $this->db->from('inventory');
        $recs = $this->db->count_all_results();

        if ($recs != 0)
            return -1;

        $insert_data = array(
            'Item_code' => $data['itemcode'],
            'Item_name' => $data['item'],
            'In_use_stock' => $data['inuse'],
            'Available_stock' => $data['available']
        );
        $this->db->insert('inventory', $insert_data);
    }

    public function getItems(){
        $query = $this->db->get('inventory');
        return $query->result_array();
    }

    public function editItem($data){
        $qd = array(
            'id' => $data['id'],
            'Item_code'  => $data['itemcode'],
            'Item_name' => $data['item'],
            'In_use_stock' => $data['inuse'],
            'Available_stock' => $data['available']
        );

        $this->db->replace('inventory', $qd);

    }

    public function deleteItem($id){
        $this->db->delete('inventory', array('id' => $id));
    }
}
