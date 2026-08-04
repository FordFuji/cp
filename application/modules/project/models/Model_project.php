<?php
class Model_project extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// category_project
	public function get_category_project_list(){		
		$this->db->order_by("category_project_id","asc");
		$query = $this->db->get("ci_category_project");
			
		return $query->result();
	}
	
	public function insert_category_project($data){
		$this->db->insert('ci_category_project', $data); 
	}
	
	public function get_category_project_single($id){
		$this->db->where("category_project_id", $id);
		$query = $this->db->get("ci_category_project");
		return $query->row();	
	}
	
	public function update_category_project($data,$id){
		$this->db->where('category_project_id', $id);
		$this->db->update('ci_category_project', $data);
	}
	
	public function delete_category_project($val){
		$this->db->where_in('category_project_id', $val);
		return $this->db->delete('ci_category_project');
	}
	// End category_project

	// project
	public function get_project_list(){		
		$this->db->order_by("project_id","asc");
		$query = $this->db->get("ci_project");
			
		return $query->result();
	}
	
	public function insert_project($data){
		$this->db->insert('ci_project', $data); 
	}
	
	public function get_project_single($id){
		$this->db->where("project_id", $id);
		$query = $this->db->get("ci_project");
		return $query->row();	
	}
	
	public function update_project($data,$id){
		$this->db->where('project_id', $id);
		$this->db->update('ci_project', $data);
	}
	
	public function delete_project($val){
		$this->db->where_in('project_id', $val);
		return $this->db->delete('ci_project');
	}

	public function getCategoryProject() {
		$this->db->order_by('ci_category_project.category_project_id', 'asc');
		$this->db->join('ci_profile', 'ci_category_project.profile_id = ci_profile.profile_id', 'inner');
		$query = $this->db->get('ci_category_project');

		return $query->result();
	}
	// End project

	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}