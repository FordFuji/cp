<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('my_study/model_my_study');
		$this->load->model('my_study/model_study_datatable');
		$this->load->model('my_study/model_calendar_study_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/study/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// study
	public function study() {
		
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
		$this->load->view('my_study/study/list', $data);
		/* end body */
	}
	
	public function study_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_study_datatable->study_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function study_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_study->get_study_single($id);

		$data['rows'] = $this->model_my_study->getProfileList();
		
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
		
		$this->load->view('my_study/study/form', $data);
	}
	
	public function study_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'study_year' =>  $this->input->post('study_year'),
			'study_level' =>  $this->input->post('study_level'),
			'study_term' =>  $this->input->post('study_term'),
			'study_gpa' =>  $this->input->post('study_gpa'),
			'study_gpax' =>  $this->input->post('study_gpax'),
			'study_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['study_transcript_image'])) {
			$config['upload_path']          = FCPATH.'uploads/study/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('study_transcript_image')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/study/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/study/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['study_transcript_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_my_study->update_study($data, $id);
			
			redirect('my_study/backend/study', 'location');
			
		// insert
		} else {	
			$data['study_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_study->insert_study($data);
			
			redirect('my_study/backend/study', 'location');
		}
	}
	
	public function study_delete($id){
		$this->model_my_study->delete_study($id);

		redirect('my_study/backend/study','location');
	} 
	// End study

	// calendar_study
	public function calendar_study() {
		
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
		$this->load->view('my_study/calendar_study/list', $data);
		/* end body */
	}
	
	public function calendar_study_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_calendar_study_datatable->calendar_study_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function calendar_study_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_study->get_calendar_study_single($id);

		$data['rows'] = $this->model_my_study->getProfileList();
		
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
		
		$this->load->view('my_study/calendar_study/form', $data);
	}
	
	public function calendar_study_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'calendar_study_open1' =>  $this->input->post('calendar_study_open1'),
			'calendar_study_register1' =>  $this->input->post('calendar_study_register1'),
			'calendar_study_exam_mid_term1' =>  $this->input->post('calendar_study_exam_mid_term1'),
			'calendar_study_exam_final_term1' =>  $this->input->post('calendar_study_exam_final_term1'),
			'calendar_study_term_break1' =>  $this->input->post('calendar_study_term_break1'),
			'calendar_study_term2' =>  $this->input->post('calendar_study_term2'),
			'calendar_study_register2' =>  $this->input->post('calendar_study_register2'),
			'calendar_study_exam_mid_term2' =>  $this->input->post('calendar_study_exam_mid_term2'),
			'calendar_study_exam_final_term2' =>  $this->input->post('calendar_study_exam_final_term2'),
			'calendar_study_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['calendar_study_transcript_image'])) {
			$config['upload_path']          = FCPATH.'uploads/calendar_study/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('calendar_study_transcript_image')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/calendar_study/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/calendar_study/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				/*$data['calendar_study_transcript_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_study->update_calendar_study($data, $id);
			
			redirect('my_study/backend/calendar_study', 'location');
			
		// insert
		} else {	
			$data['calendar_study_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_study->insert_calendar_study($data);
			
			redirect('my_study/backend/calendar_study', 'location');
		}
	}
	
	public function calendar_study_delete($id){
		$this->model_my_study->delete_calendar_study($id);

		redirect('my_study/backend/calendar_study','location');
	} 
	// End calendar_study
}
?>