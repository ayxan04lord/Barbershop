<?php

class Admin_model extends CI_Model
{

    public function insert_staff($data)
    {
        $this->db->insert('staff', $data);
    }

    public function get_all_data()
    {
        return $this->db->order_by('s_id', "DESC")->get('staff')->result_array();
    }

    public function get_single_staff($id)
    {
        return $this->db->where('s_id', $id)->get('staff')->row_array();
       
    }

    public function delete_staff($id){
        $this->db->where('s_id',$id)->delete('staff');
        redirect(base_url('a_staff_list'));
    }
}
