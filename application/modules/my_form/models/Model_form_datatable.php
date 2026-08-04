<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_form_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function form_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (form_id like '%{$keyword}%' or form_name like '%{$keyword}%' or form_description like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$this->db->join('ci_category_form', 'ci_form.category_form_id = ci_category_form.category_form_id', 'inner');
		$query = $this->db->get('ci_form');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_form')->where($condition)->count_all_results();
		$count = $this->db->from('ci_form')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>