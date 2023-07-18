<?php 

class User_model extends CI_Model{
    public function u_get_all_staff(){
        return $this->db 
        ->join("position", "position.p_id = staff.s_position", "left" )
        ->get("staff")->result_array();
    }
}