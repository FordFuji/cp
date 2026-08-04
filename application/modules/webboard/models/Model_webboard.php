<?php
class Model_webboard extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("webboard_id","asc");
		$query = $this->db->get("ci_webboard");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_webboard', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("webboard_id", $id);
		$query = $this->db->get("ci_webboard");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('webboard_id', $id);
		$this->db->update('ci_webboard', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('webboard_id', $val);
		return $this->db->delete('ci_webboard');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}

	public function getAllProfileResult() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('ci_profile');

		return $query->result();
	}

	public function getWebboardLasted() {
		$this->db->order_by('webboard_id', 'desc');
		$query = $this->db->get('ci_webboard');

		return $query->row();
	}

	public function getChatHistoryResult($webboard_id, $profile_id) {
		$this->db->where('ci_my_message.webboard_id', $webboard_id);
		$this->db->where('ci_my_message.profile_id', $profile_id);
		//$this->db->or_where('ci_my_message.user_id !=', '');
		$this->db->order_by('ci_my_message.my_message_id', 'asc');
		$query = $this->db->get('ci_my_message');

		return $query->result();
	}

	public function getProfileRow($profile_id) {
		$this->db->where('profile_id', $profile_id);
		$query = $this->db->get('ci_profile');

		return $query->row();
	}

	public function getUserRow($user_id) {
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user');

		return $query->row();
	}

	public function getChatHistory($webboard_id) {
		$this->db->group_by('webboard_id');
		$this->db->group_by('profile_id');
		$this->db->where('webboard_id', $webboard_id);
		$this->db->where('profile_id !=', 0);
		$query = $this->db->get('ci_my_message');

		return $query->result();
	}
}