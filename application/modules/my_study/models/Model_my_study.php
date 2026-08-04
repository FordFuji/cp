<?php
class Model_my_study extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// study
	public function get_study_list(){		
		$this->db->order_by("study_id","asc");
		$query = $this->db->get("ci_study");
			
		return $query->result();
	}
	
	public function insert_study($data){
		$this->db->insert('ci_study', $data); 
	}
	
	public function get_study_single($id){
		$this->db->where("study_id", $id);
		$query = $this->db->get("ci_study");
		return $query->row();	
	}
	
	public function update_study($data,$id){
		$this->db->where('study_id', $id);
		$this->db->update('ci_study', $data);
	}
	
	public function delete_study($val){
		$this->db->where_in('study_id', $val);
		return $this->db->delete('ci_study');
	}
	// End study

	// calendar_study
	public function get_calendar_study_list(){		
		$this->db->order_by("calendar_study_id","asc");
		$query = $this->db->get("ci_calendar_study");
			
		return $query->result();
	}
	
	public function insert_calendar_study($data){
		$this->db->insert('ci_calendar_study', $data); 
	}
	
	public function get_calendar_study_single($id){
		$this->db->where("calendar_study_id", $id);
		$query = $this->db->get("ci_calendar_study");
		return $query->row();	
	}
	
	public function update_calendar_study($data,$id){
		$this->db->where('calendar_study_id', $id);
		$this->db->update('ci_calendar_study', $data);
	}
	
	public function delete_calendar_study($val){
		$this->db->where_in('calendar_study_id', $val);
		return $this->db->delete('ci_calendar_study');
	}
	// End calendar_study
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}