<?php
class Model_my_profile extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// Chat
	public function get_chat_list(){		
		$this->db->order_by("chat_id","asc");
		$query = $this->db->get("ci_chat");
			
		return $query->result();
	}
	
	public function insert_chat($data){
		$this->db->insert('ci_chat', $data); 
	}
	
	public function get_chat_single($id){
		$this->db->where("chat_id", $id);
		$query = $this->db->get("ci_chat");
		return $query->row();	
	}
	
	public function update_chat($data,$id){
		$this->db->where('chat_id', $id);
		$this->db->update('ci_chat', $data);
	}
	
	public function delete_chat($val){
		$this->db->where_in('chat_id', $val);
		return $this->db->delete('ci_chat');
	}
	// End Chat

	// education
	public function get_education_list(){		
		$this->db->order_by("education_id","asc");
		$query = $this->db->get("ci_education");
			
		return $query->result();
	}
	
	public function insert_education($data){
		$this->db->insert('ci_education', $data); 
	}
	
	public function get_education_single($id){
		$this->db->where("education_id", $id);
		$query = $this->db->get("ci_education");
		return $query->row();	
	}
	
	public function update_education($data,$id){
		$this->db->where('education_id', $id);
		$this->db->update('ci_education', $data);
	}
	
	public function delete_education($val){
		$this->db->where_in('education_id', $val);
		return $this->db->delete('ci_education');
	}
	// End education

	// extra_curriculum
	public function get_extra_curriculum_list(){		
		$this->db->order_by("extra_curriculum_id","asc");
		$query = $this->db->get("ci_extra_curriculum");
			
		return $query->result();
	}
	
	public function insert_extra_curriculum($data){
		$this->db->insert('ci_extra_curriculum', $data); 
	}
	
	public function get_extra_curriculum_single($id){
		$this->db->where("extra_curriculum_id", $id);
		$query = $this->db->get("ci_extra_curriculum");
		return $query->row();	
	}
	
	public function update_extra_curriculum($data,$id){
		$this->db->where('extra_curriculum_id', $id);
		$this->db->update('ci_extra_curriculum', $data);
	}
	
	public function delete_extra_curriculum($val){
		$this->db->where_in('extra_curriculum_id', $val);
		return $this->db->delete('ci_extra_curriculum');
	}
	// End extra_curriculum

	// training_experiences
	public function get_training_experiences_list(){		
		$this->db->order_by("training_experiences_id","asc");
		$query = $this->db->get("ci_training_experiences");
			
		return $query->result();
	}
	
	public function insert_training_experiences($data){
		$this->db->insert('ci_training_experiences', $data); 
	}
	
	public function get_training_experiences_single($id){
		$this->db->where("training_experiences_id", $id);
		$query = $this->db->get("ci_training_experiences");
		return $query->row();	
	}
	
	public function update_training_experiences($data,$id){
		$this->db->where('training_experiences_id', $id);
		$this->db->update('ci_training_experiences', $data);
	}
	
	public function delete_training_experiences($val){
		$this->db->where_in('training_experiences_id', $val);
		return $this->db->delete('ci_training_experiences');
	}
	// End training_experiences

	// certificate
	public function get_certificate_list(){		
		$this->db->order_by("certificate_id","asc");
		$query = $this->db->get("ci_certificate");
			
		return $query->result();
	}
	
	public function insert_certificate($data){
		$this->db->insert('ci_certificate', $data); 
	}
	
	public function get_certificate_single($id){
		$this->db->where("certificate_id", $id);
		$query = $this->db->get("ci_certificate");
		return $query->row();	
	}
	
	public function update_certificate($data,$id){
		$this->db->where('certificate_id', $id);
		$this->db->update('ci_certificate', $data);
	}
	
	public function delete_certificate($val){
		$this->db->where_in('certificate_id', $val);
		return $this->db->delete('ci_certificate');
	}
	// End certificate

	// standardized_tests
	public function get_standardized_tests_list(){		
		$this->db->order_by("standardized_tests_id","asc");
		$query = $this->db->get("ci_standardized_tests");
			
		return $query->result();
	}
	
	public function insert_standardized_tests($data){
		$this->db->insert('ci_standardized_tests', $data); 
	}
	
	public function get_standardized_tests_single($id){
		$this->db->where("standardized_tests_id", $id);
		$query = $this->db->get("ci_standardized_tests");
		return $query->row();	
	}
	
	public function update_standardized_tests($data,$id){
		$this->db->where('standardized_tests_id', $id);
		$this->db->update('ci_standardized_tests', $data);
	}
	
	public function delete_standardized_tests($val){
		$this->db->where_in('standardized_tests_id', $val);
		return $this->db->delete('ci_standardized_tests');
	}
	// End standardized_tests

	// active_participation
	public function get_active_participation_list(){		
		$this->db->order_by("active_participation_id","asc");
		$query = $this->db->get("ci_active_participation");
			
		return $query->result();
	}
	
	public function insert_active_participation($data){
		$this->db->insert('ci_active_participation', $data); 
	}
	
	public function get_active_participation_single($id){
		$this->db->where("active_participation_id", $id);
		$query = $this->db->get("ci_active_participation");
		return $query->row();	
	}
	
	public function update_active_participation($data,$id){
		$this->db->where('active_participation_id', $id);
		$this->db->update('ci_active_participation', $data);
	}
	
	public function delete_active_participation($val){
		$this->db->where_in('active_participation_id', $val);
		return $this->db->delete('ci_active_participation');
	}
	// End active_participation

	// award
	public function get_award_list(){		
		$this->db->order_by("award_id","asc");
		$query = $this->db->get("ci_award");
			
		return $query->result();
	}
	
	public function insert_award($data){
		$this->db->insert('ci_award', $data); 
	}
	
	public function get_award_single($id){
		$this->db->where("award_id", $id);
		$query = $this->db->get("ci_award");
		return $query->row();	
	}
	
	public function update_award($data,$id){
		$this->db->where('award_id', $id);
		$this->db->update('ci_award', $data);
	}
	
	public function delete_award($val){
		$this->db->where_in('award_id', $val);
		return $this->db->delete('ci_award');
	}
	// End award
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}