<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_calendar_study_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function calendar_study_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (ci_profile.profile_id like '%{$keyword}%' or profile_name_th like '%{$keyword}%' or calendar_study_open1 like '%{$keyword}%' or calendar_study_register1 like '%{$keyword}%' or calendar_study_exam_mid_term1 like '%{$keyword}%' or calendar_study_exam_final_term1 like '%{$keyword}%' or calendar_study_term_break1 like '%{$keyword}%' or calendar_study_term2 like '%{$keyword}%' or calendar_study_register2 like '%{$keyword}%' or calendar_study_exam_mid_term2 like '%{$keyword}%' or calendar_study_exam_final_term2 like '%{$keyword}%' or calendar_study_term_break2 like '%{$keyword}%' or profile_surname_th like '%{$keyword}% or calendar_study_open3 like '%{$keyword}%' or calendar_study_register3 like '%{$keyword}%' or calendar_study_exam_mid_term3 like '%{$keyword}%' or calendar_study_exam_final_term3 like '%{$keyword}%' or calendar_study_term_break3 like '%{$keyword}%'')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$this->db->join('ci_calendar_study', 'ci_profile.profile_id = ci_calendar_study.profile_id', 'inner');
		$query = $this->db->get('ci_profile');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_profile')->join('ci_calendar_study', 'ci_profile.profile_id = ci_calendar_study.profile_id', 'inner')->where($condition)->count_all_results();
		$count = $this->db->from('ci_profile')->join('ci_calendar_study', 'ci_profile.profile_id = ci_calendar_study.profile_id', 'inner')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>