<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_register_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function register_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (profile_id like '%{$keyword}%' or profile_capital_type like '%{$keyword}%' or profile_card_no like '%{$keyword}%' or profile_name_th like '%{$keyword}%' or profile_surname_th like '%{$keyword}%' or profile_institute like '%{$keyword}%' or profile_gpax like '%{$keyword}%' or profile_email_personal like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$query = $this->db->get('ci_profile');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_profile')->where($condition)->count_all_results();
		$count = $this->db->from('ci_profile')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>