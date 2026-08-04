<?php
class Model_banner_slide extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("banner_slide_id","asc");
		$query = $this->db->get("ci_banner_slide");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_banner_slide', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("banner_slide_id", $id);
		$query = $this->db->get("ci_banner_slide");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('banner_slide_id', $id);
		$this->db->update('ci_banner_slide', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('banner_slide_id', $val);
		return $this->db->delete('ci_banner_slide');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}