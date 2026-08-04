<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('webboard/model_webboard');
		$this->load->model('webboard/model_webboard_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/webboard/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}

		//pre($this->session->all_userdata());
	}
	
	public function index() {
		
		/* start header, menu */
		$data['title'] = $this->model_template_main->get_title_menu();
		$data['active'] = $this->model_template_main->get_active_menu();
		$data['sub_menu_active'] = $this->model_template_main->get_active_sub_menu();
		$data['row_user'] = $this->model_template_main->get_user_single();
		$data['department'] = $this->model_template_main->get_department_single();
		$data['rows_menu'] = $this->model_template_main->get_menu_list();
		$data['rows_sub_menu'] = $this->model_template_main->get_sub_menu_list();
		
		$this->load->view('template_main/template_main/header', $data);
		$this->load->view('template_main/template_main/menu_sidebar', $data);
		/* end header, menu */
		
		/* start body */
		$this->load->view('webboard/webboard/list', $data);
		/* end body */
	}
	
	public function server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_webboard_datatable->webboard_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_webboard->get_data_single($id);

		$data['chat'] = $this->model_webboard->getChatHistory($id);
		
		/* start header, menu */
		$data['title'] = $this->model_template_main->get_title_menu();
		$data['active'] = $this->model_template_main->get_active_menu();
		$data['sub_menu_active'] = $this->model_template_main->get_active_sub_menu();
		$data['row_user'] = $this->model_template_main->get_user_single();
		$data['department'] = $this->model_template_main->get_department_single();
		$data['rows_menu'] = $this->model_template_main->get_menu_list();
		$data['rows_sub_menu'] = $this->model_template_main->get_sub_menu_list();
		
		$this->load->view('template_main/template_main/header', $data);
		$this->load->view('template_main/template_main/menu_sidebar', $data);
		/* end header, menu */
		
		$this->load->view('webboard/webboard/form', $data);
	}
	
	public function save_update($id = ''){	
		$data = array(
			'webboard_username' => $this->input->post('webboard_username'),
			'webboard_topic' =>  $this->input->post('webboard_topic'),
			'webboard_datetime' =>  $this->input->post('webboard_date').' '.$this->input->post('webboard_hour').':'.$this->input->post('webboard_minute'),
			'webboard_detail' =>  $this->input->post('webboard_detail'),
			'webboard_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['webboard_image'])) {
			$config['upload_path']          = FCPATH.'uploads/webboard/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('webboard_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/webboard/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/webboard/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['webboard_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_webboard->update_data($data, $id);
			
			redirect('webboard/backend/index', 'location');
			
		// insert
		} else {	
			$data['webboard_datetime_create'] = date('Y-m-d H:i:s');

			$this->model_webboard->insert_data($data);

			$webboard = $this->model_webboard->getWebboardLasted();
			
			$profile = $this->model_webboard->getAllProfileResult();
			
			if(!empty($profile) and !empty($webboard)) {
				foreach($profile as $r) {
					$data_profile = array(
						'webboard_id' => $webboard->webboard_id,
						'profile_id' => $r->profile_id,
						'webboard_status_read' => 'unread',
						'webboard_status_delete' => 'undelete',
						'webboard_status_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_webboard_status', $data_profile);
				}
			}
			
			redirect('webboard/backend/index', 'location');
		}
	}

	public function chat_history($webboard_id, $profile_id) {
		$data_post = array(
			'webboard_id' => $webboard_id,
			'profile_id' => $profile_id,
			'user_id' => $this->session->userdata('session_user_id'),
			'my_message_answer' => $this->input->post('my_message_answer'),
			'my_message_datetime_create' => date('Y-m-d H:i:s')
		);

		$this->db->insert('ci_my_message', $data_post);

		redirect('webboard/backend/form/'.$webboard_id);
	}
	
	public function delete($id){
		$this->model_webboard->delete_data($id);

		redirect('webboard/backend/index','location');
	} 
}
?>