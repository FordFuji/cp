<?php
class Model_idp extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("idp_id","asc");
		$query = $this->db->get("ci_idp");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_idp', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("idp_id", $id);
		$query = $this->db->get("ci_idp");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('idp_id', $id);
		$this->db->update('ci_idp', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('idp_id', $val);
		return $this->db->delete('ci_idp');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}

	public function getSkillList() {
		$this->db->order_by('skill_id', 'asc');
		$query = $this->db->get('ci_skill');
		
		return $query->result();
	}
}