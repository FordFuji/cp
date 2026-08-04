<?php
class Model_page_diary extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("page_diary_id","asc");
		$query = $this->db->get("ci_page_diary");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_page_diary', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("page_diary_id", $id);
		$query = $this->db->get("ci_page_diary");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('page_diary_id', $id);
		$this->db->update('ci_page_diary', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('page_diary_id', $val);
		return $this->db->delete('ci_page_diary');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}