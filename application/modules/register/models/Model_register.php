<?php
class Model_register extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("profile_id","asc");
		$query = $this->db->get("ci_profile");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_profile', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("profile_id", $id);
		$query = $this->db->get("ci_profile");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('profile_id', $id);
		$this->db->update('ci_profile', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('profile_id', $val);
		return $this->db->delete('ci_profile');
	}
}