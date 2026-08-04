<?php
class Model_english_update extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("english_update_id","asc");
		$query = $this->db->get("ci_english_update");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_english_update', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("english_update_id", $id);
		$query = $this->db->get("ci_english_update");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('english_update_id', $id);
		$this->db->update('ci_english_update', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('english_update_id', $val);
		return $this->db->delete('ci_english_update');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}