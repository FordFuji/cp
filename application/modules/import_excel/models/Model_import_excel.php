<?php
class Model_import_excel extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("import_excel_id","asc");
		$query = $this->db->get("ci_import_excel");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_import_excel', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("import_excel_id", $id);
		$query = $this->db->get("ci_import_excel");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('import_excel_id', $id);
		$this->db->update('ci_import_excel', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('import_excel_id', $val);
		return $this->db->delete('ci_import_excel');
	}
	
	public function getProfileList() {
		$this->db->order_by('profile_id', 'asc');
		$query = $this->db->get('profile');
		
		return $query->result();
	}
}