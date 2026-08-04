<?php
class Model_document_download extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        $this->load->database();	
	}
	
	public function get_data_list(){		
		$this->db->order_by("document_download_id","asc");
		$query = $this->db->get("ci_document_download");
			
		return $query->result();
	}
	
	public function insert_data($data){
		$this->db->insert('ci_document_download', $data); 
	}
	
	public function get_data_single($id){
		$this->db->where("document_download_id", $id);
		$query = $this->db->get("ci_document_download");
		return $query->row();	
	}
	
	public function update_data($data,$id){
		$this->db->where('document_download_id', $id);
		$this->db->update('ci_document_download', $data);
	}
	
	public function delete_data($val){
		$this->db->where_in('document_download_id', $val);
		return $this->db->delete('ci_document_download');
	}
}