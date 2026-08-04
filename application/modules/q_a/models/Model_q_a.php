<?php
class Model_q_a extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("q_a_id","asc");
		$query = $this->db->get("ci_q_a");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_q_a', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("q_a_id", $id);
		$query = $this->db->get("ci_q_a");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('q_a_id', $id);
		$this->db->update('ci_q_a', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('q_a_id', $val);
		return $this->db->delete('ci_q_a');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}