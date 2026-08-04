<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_category_project_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function category_project_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (category_project_id like '%{$keyword}%' or profile_type like '%{$keyword}%' or profile_name_th like '%{$keyword}%' or profile_surname_th like '%{$keyword}%' or category_project_name like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$this->db->join('ci_profile', 'ci_category_project.profile_id = ci_profile.profile_id', 'inner');
		$query = $this->db->get('ci_category_project');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_category_project')->join('ci_profile', 'ci_category_project.profile_id = ci_profile.profile_id', 'inner')->where($condition)->count_all_results();
		$count = $this->db->from('ci_category_project')->join('ci_profile', 'ci_category_project.profile_id = ci_profile.profile_id', 'inner')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>