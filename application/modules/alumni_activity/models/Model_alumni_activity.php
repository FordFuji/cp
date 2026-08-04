<?php
class Model_alumni_activity extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	// alumni_activity
	public function get_alumni_activity_list(){		
		$this->db->order_by("alumni_activity_id","asc");
		$query = $this->db->get("ci_alumni_activity");
			
		return $query->result();
	}
	
	public function insert_alumni_activity($data){
		$this->db->insert('ci_alumni_activity', $data); 
	}
	
	public function get_alumni_activity_single($id){
		$this->db->where("alumni_activity_id", $id);
		$query = $this->db->get("ci_alumni_activity");
		return $query->row();	
	}
	
	public function update_alumni_activity($data,$id){
		$this->db->where('alumni_activity_id', $id);
		$this->db->update('ci_alumni_activity', $data);
	}
	
	public function delete_alumni_activity($val){
		$this->db->where_in('alumni_activity_id', $val);
		return $this->db->delete('ci_alumni_activity');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
	// End alumni_activity

	// photo_gallery
	public function get_photo_gallery_list(){		
		$this->db->order_by("photo_gallery_id","asc");
		$query = $this->db->get("ci_photo_gallery");
			
		return $query->result();
	}
	
	public function insert_photo_gallery($data){
		$this->db->insert('ci_photo_gallery', $data); 
	}
	
	public function get_photo_gallery_single($id){
		$this->db->where("photo_gallery_id", $id);
		$query = $this->db->get("ci_photo_gallery");
		return $query->row();	
	}
	
	public function update_photo_gallery($data,$id){
		$this->db->where('photo_gallery_id', $id);
		$this->db->update('ci_photo_gallery', $data);
	}
	
	public function delete_photo_gallery($val){
		$this->db->where_in('photo_gallery_id', $val);
		return $this->db->delete('ci_photo_gallery');
	}
	// End photo_gallery

	// profile_update
	public function get_profile_update_list(){		
		$this->db->order_by("profile_update_id","asc");
		$query = $this->db->get("ci_profile_update");
			
		return $query->result();
	}
	
	public function insert_profile_update($data){
		$this->db->insert('ci_profile_update', $data); 
	}
	
	public function get_profile_update_single($id){
		$this->db->where("profile_update_id", $id);
		$query = $this->db->get("ci_profile_update");
		return $query->row();	
	}
	
	public function update_profile_update($data,$id){
		$this->db->where('profile_update_id', $id);
		$this->db->update('ci_profile_update', $data);
	}
	
	public function delete_profile_update($val){
		$this->db->where_in('profile_update_id', $val);
		return $this->db->delete('ci_profile_update');
	}
	// End profile_update
}