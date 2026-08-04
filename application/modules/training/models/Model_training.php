<?php
class Model_training extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("training_id","asc");
		$query = $this->db->get("ci_training");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_training', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("training_id", $id);
		$query = $this->db->get("ci_training");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('training_id', $id);
		$this->db->update('ci_training', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('training_id', $val);
		return $this->db->delete('ci_training');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}