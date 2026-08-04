<?php
class Model_ford extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("ford_id","asc");
		$query = $this->db->get("ci_ford");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_ford', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("ford_id", $id);
		$query = $this->db->get("ci_ford");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('ford_id', $id);
		$this->db->update('ci_ford', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('ford_id', $val);
		return $this->db->delete('ci_ford');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}