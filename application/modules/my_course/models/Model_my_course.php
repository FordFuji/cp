<?php
class Model_my_course extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// courses_offer_by_cp
	public function get_courses_offer_by_cp_list(){		
		$this->db->order_by("courses_offer_by_cp_id","asc");
		$query = $this->db->get("ci_courses_offer_by_cp");
			
		return $query->result();
	}
	
	public function insert_courses_offer_by_cp($data){
		$this->db->insert('ci_courses_offer_by_cp', $data); 
	}
	
	public function get_courses_offer_by_cp_single($id){
		$this->db->where("courses_offer_by_cp_id", $id);
		$query = $this->db->get("ci_courses_offer_by_cp");
		return $query->row();	
	}
	
	public function update_courses_offer_by_cp($data,$id){
		$this->db->where('courses_offer_by_cp_id', $id);
		$this->db->update('ci_courses_offer_by_cp', $data);
	}
	
	public function delete_courses_offer_by_cp($val){
		$this->db->where_in('courses_offer_by_cp_id', $val);
		return $this->db->delete('ci_courses_offer_by_cp');
	}
	// End courses_offer_by_cp

	// courses_on_demand
	public function get_courses_on_demand_list(){		
		$this->db->order_by("courses_on_demand_id","asc");
		$query = $this->db->get("ci_courses_on_demand");
			
		return $query->result();
	}
	
	public function insert_courses_on_demand($data){
		$this->db->insert('ci_courses_on_demand', $data); 
	}
	
	public function get_courses_on_demand_single($id){
		$this->db->where("courses_on_demand_id", $id);
		$query = $this->db->get("ci_courses_on_demand");
		return $query->row();	
	}
	
	public function update_courses_on_demand($data,$id){
		$this->db->where('courses_on_demand_id', $id);
		$this->db->update('ci_courses_on_demand', $data);
	}
	
	public function delete_courses_on_demand($val){
		$this->db->where_in('courses_on_demand_id', $val);
		return $this->db->delete('ci_courses_on_demand');
	}
	// End courses_on_demand
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}