<?php
class Model_my_form extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// cateogry_form
	public function get_category_form_list(){		
		$this->db->order_by("category_form_id","asc");
		$query = $this->db->get("ci_category_form");
			
		return $query->result();
	}
	
	public function insert_category_form($data){
		$this->db->insert('ci_category_form', $data); 
	}
	
	public function get_category_form_single($id){
		$this->db->where("category_form_id", $id);
		$query = $this->db->get("ci_category_form");
		return $query->row();	
	}
	
	public function update_category_form($data,$id){
		$this->db->where('category_form_id', $id);
		$this->db->update('ci_category_form', $data);
	}
	
	public function delete_category_form($val){
		$this->db->where_in('category_form_id', $val);
		return $this->db->delete('ci_category_form');
	}
	// End category_form

	// form
	public function get_form_list(){		
		$this->db->order_by("form_id","asc");
		$query = $this->db->get("ci_form");
			
		return $query->result();
	}
	
	public function insert_form($data){
		$this->db->insert('ci_form', $data); 
	}
	
	public function get_form_single($id){
		$this->db->where("form_id", $id);
		$query = $this->db->get("ci_form");
		return $query->row();	
	}
	
	public function update_form($data,$id){
		$this->db->where('form_id', $id);
		$this->db->update('ci_form', $data);
	}
	
	public function delete_form($val){
		$this->db->where_in('form_id', $val);
		return $this->db->delete('ci_form');
	}
	// End form
}