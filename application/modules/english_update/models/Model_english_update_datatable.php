<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_english_update_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function english_update_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (english_update_id like '%{$keyword}%' or profile_name_th like '%{$keyword}%' or profile_surname_th like '%{$keyword}%' or english_update_year like '%{$keyword}%' or english_update_quarter like '%{$keyword}%' or english_update_hours like '%{$keyword}%' or english_update_level like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$this->db->join('ci_profile', 'ci_english_update.profile_id = ci_profile.profile_id', 'inner');
		$query = $this->db->get('ci_english_update');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_english_update')->join('ci_profile', 'ci_english_update.profile_id = ci_profile.profile_id', 'inner')->where($condition)->count_all_results();
		$count = $this->db->from('ci_english_update')->join('ci_profile', 'ci_english_update.profile_id = ci_profile.profile_id', 'inner')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>