<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_log_login_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function log_login_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (log_login_id like '%{$keyword}%' or profile_name_th like '%{$keyword}%' or profile_surname_th like '%{$keyword}%' or log_login_datetime_create like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$this->db->join('ci_profile', 'ci_log_login.profile_id = ci_profile.profile_id');
		$query = $this->db->get('ci_log_login');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_log_login')->join('ci_profile', 'ci_log_login.profile_id = ci_profile.profile_id')->where($condition)->count_all_results();
		$count = $this->db->from('ci_log_login')->join('ci_profile', 'ci_log_login.profile_id = ci_profile.profile_id')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>