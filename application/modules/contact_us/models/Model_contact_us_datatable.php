<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_contact_us_datatable extends CI_Model { 
 	
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
 	// datatable
     public function contact_us_datatable($param){
		$keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
			$condition .= " and (contact_us_id like '%{$keyword}%' or contact_us_name like '%{$keyword}%' or contact_us_email like '%{$keyword}%' or contact_us_telephone like '%{$keyword}%' or contact_us_topic like '%{$keyword}%' or contact_us_message like '%{$keyword}%' or contact_us_datetime_create like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$query = $this->db->get('ci_contact_us');
		$data = [];
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('ci_contact_us')->where($condition)->count_all_results();
		$count = $this->db->from('ci_contact_us')->count_all_results();
		$result = array('count'=>$count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
		return $result;
	}
	// end datatable
}
?>