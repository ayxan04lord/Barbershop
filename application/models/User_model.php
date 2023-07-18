<?php 

class User_model extends CI_Model{
    public function u_get_all_staff(){
        return $this->db 
        ->where("s_status", "Active")
        ->join("position", "position.p_id = staff.s_position", "left" )
        ->get("staff")->result_array();
    }

    public function get_single_staff($id){
        return $this->db
        ->where('s_id',$id)
        ->where("s_status", "Active")
        ->join("position", "position.p_id = staff.s_position", "left" )
        ->get("staff")->row_array();
    }
}