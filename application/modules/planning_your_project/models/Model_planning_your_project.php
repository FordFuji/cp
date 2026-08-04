<?php
class Model_planning_your_project extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// level_planning_your_project
	public function get_level_planning_your_project_list(){		
		$this->db->order_by("level_planning_your_project_id","asc");
		$query = $this->db->get("ci_level_planning_your_project");
			
		return $query->result();
	}
	
	public function insert_level_planning_your_project($data){
		$this->db->insert('ci_level_planning_your_project', $data); 
	}
	
	public function get_level_planning_your_project_single($id){
		$this->db->where("level_planning_your_project_id", $id);
		$query = $this->db->get("ci_level_planning_your_project");
		return $query->row();	
	}
	
	public function update_level_planning_your_project($data,$id){
		$this->db->where('level_planning_your_project_id', $id);
		$this->db->update('ci_level_planning_your_project', $data);
	}
	
	public function delete_level_planning_your_project($val){
		$this->db->where_in('level_planning_your_project_id', $val);
		return $this->db->delete('ci_level_planning_your_project');
	}
	// End level_planning_your_project

	// planning_your_project
	public function get_planning_your_project_list(){		
		$this->db->order_by("planning_your_project_id","asc");
		$query = $this->db->get("ci_planning_your_project");
			
		return $query->result();
	}
	
	public function insert_planning_your_project($data){
		$this->db->insert('ci_planning_your_project', $data); 
	}
	
	public function get_planning_your_project_single($id){
		$this->db->where("planning_your_project_id", $id);
		$query = $this->db->get("ci_planning_your_project");
		return $query->row();	
	}
	
	public function update_planning_your_project($data,$id){
		$this->db->where('planning_your_project_id', $id);
		$this->db->update('ci_planning_your_project', $data);
	}
	
	public function delete_planning_your_project($val){
		$this->db->where_in('planning_your_project_id', $val);
		return $this->db->delete('ci_planning_your_project');
	}

	public function getLevelPlanningYourProject() {
		$this->db->order_by('ci_level_planning_your_project.level_planning_your_project_id', 'asc');
		$this->db->join('ci_profile', 'ci_level_planning_your_project.profile_id = ci_profile.profile_id', 'inner');
		$query = $this->db->get('ci_level_planning_your_project');

		return $query->result();
	}
	// End planning_your_project
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');
		
		return $query->result();
	}
}