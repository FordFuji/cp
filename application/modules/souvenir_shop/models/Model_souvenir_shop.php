<?php
class Model_souvenir_shop extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("souvenir_shop_id","asc");
		$query = $this->db->get("ci_souvenir_shop");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_souvenir_shop', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("souvenir_shop_id", $id);
		$query = $this->db->get("ci_souvenir_shop");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('souvenir_shop_id', $id);
		$this->db->update('ci_souvenir_shop', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('souvenir_shop_id', $val);
		return $this->db->delete('ci_souvenir_shop');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}