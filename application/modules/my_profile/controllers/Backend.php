<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('my_profile/model_my_profile');
		$this->load->model('my_profile/model_chat_datatable');
		$this->load->model('my_profile/model_education_datatable');
		$this->load->model('my_profile/model_extra_curriculum_datatable');
		$this->load->model('my_profile/model_training_experiences_datatable');
		$this->load->model('my_profile/model_certificate_datatable');
		$this->load->model('my_profile/model_standardized_tests_datatable');
		$this->load->model('my_profile/model_active_participation_datatable');
		$this->load->model('my_profile/model_award_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/chat/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// chat
	public function chat() {
		
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
		$this->load->view('my_profile/chat/list', $data);
		/* end body */
	}
	
	public function chat_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_chat_datatable->chat_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function chat_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_chat_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/chat/form', $data);
	}
	
	public function chat_save_update($id = ''){	
		$data = array(
			'chat_application' => $this->input->post('chat_application'),
			//'chat_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['chat_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('chat_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['chat_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_chat($data, $id);
			
			redirect('my_profile/backend/chat', 'location');
			
		// insert
		} else {	
			$data['chat_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_chat($data);
			
			redirect('my_profile/backend/chat', 'location');
		}
	}
	
	public function chat_delete($id){
		$this->model_my_profile->delete_chat($id);

		redirect('my_profile/backend/chat','location');
	}
	// end chat

	// education
	public function education() {
		
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
		$this->load->view('my_profile/education/list', $data);
		/* end body */
	}
	
	public function education_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_education_datatable->education_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function education_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_education_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/education/form', $data);
	}
	
	public function education_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'education_institute' => $this->input->post('education_institute'),
			'education_level' => $this->input->post('education_level'),
			'education_year' => $this->input->post('education_year')
			//'education_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['education_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('education_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['education_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_education($data, $id);
			
			redirect('my_profile/backend/education', 'location');
			
		// insert
		} else {	
			$data['education_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_education($data);
			
			redirect('my_profile/backend/education', 'location');
		}
	}
	
	public function education_delete($id){
		$this->model_my_profile->delete_education($id);

		redirect('my_profile/backend/education','location');
	}

	// extra_curriculum
	public function extra_curriculum() {
		
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
		$this->load->view('my_profile/extra_curriculum/list', $data);
		/* end body */
	}
	
	public function extra_curriculum_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_extra_curriculum_datatable->extra_curriculum_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function extra_curriculum_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_extra_curriculum_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/extra_curriculum/form', $data);
	}
	
	public function extra_curriculum_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'extra_curriculum_course' => $this->input->post('extra_curriculum_course'),
			'extra_curriculum_institute' => $this->input->post('extra_curriculum_institute'),
			'extra_curriculum_period' => $this->input->post('extra_curriculum_period')
			//'extra_curriculum_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['extra_curriculum_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('extra_curriculum_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['extra_curriculum_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_extra_curriculum($data, $id);
			
			redirect('my_profile/backend/extra_curriculum', 'location');
			
		// insert
		} else {	
			$data['extra_curriculum_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_extra_curriculum($data);
			
			redirect('my_profile/backend/extra_curriculum', 'location');
		}
	}
	
	public function extra_curriculum_delete($id){
		$this->model_my_profile->delete_extra_curriculum($id);

		redirect('my_profile/backend/extra_curriculum','location');
	}
	// end extra_curriculum

	// training_experiences
	public function training_experiences() {
		
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
		$this->load->view('my_profile/training_experiences/list', $data);
		/* end body */
	}
	
	public function training_experiences_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_training_experiences_datatable->training_experiences_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function training_experiences_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_training_experiences_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/training_experiences/form', $data);
	}
	
	public function training_experiences_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'training_experiences_trainning' => $this->input->post('training_experiences_trainning'),
			'training_experiences_place' => $this->input->post('training_experiences_place'),
			'training_experiences_period' => $this->input->post('training_experiences_period')
			//'training_experiences_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['training_experiences_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('training_experiences_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['training_experiences_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_training_experiences($data, $id);
			
			redirect('my_profile/backend/training_experiences', 'location');
			
		// insert
		} else {	
			$data['training_experiences_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_training_experiences($data);
			
			redirect('my_profile/backend/training_experiences', 'location');
		}
	}
	
	public function training_experiences_delete($id){
		$this->model_my_profile->delete_training_experiences($id);

		redirect('my_profile/backend/training_experiences','location');
	}
	// end training_experiences

	// certificate
	public function certificate() {
		
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
		$this->load->view('my_profile/certificate/list', $data);
		/* end body */
	}
	
	public function certificate_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_certificate_datatable->certificate_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function certificate_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_certificate_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/certificate/form', $data);
	}
	
	public function certificate_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'certificate_name' => $this->input->post('certificate_name'),
			'certificate_place' => $this->input->post('certificate_place'),
			'certificate_date' => $this->input->post('certificate_date')
			//'certificate_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['certificate_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('certificate_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['certificate_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_certificate($data, $id);
			
			redirect('my_profile/backend/certificate', 'location');
			
		// insert
		} else {	
			$data['certificate_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_certificate($data);
			
			redirect('my_profile/backend/certificate', 'location');
		}
	}
	
	public function certificate_delete($id){
		$this->model_my_profile->delete_certificate($id);

		redirect('my_profile/backend/certificate','location');
	}
	// end certificate

	// standardized_tests
	public function standardized_tests() {
		
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
		$this->load->view('my_profile/standardized_tests/list', $data);
		/* end body */
	}
	
	public function standardized_tests_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_standardized_tests_datatable->standardized_tests_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function standardized_tests_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_standardized_tests_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/standardized_tests/form', $data);
	}
	
	public function standardized_tests_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'standardized_tests_name' => $this->input->post('standardized_tests_name'),
			'standardized_tests_place' => $this->input->post('standardized_tests_place'),
			'standardized_tests_date' => $this->input->post('standardized_tests_date')
			//'standardized_tests_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['standardized_tests_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('standardized_tests_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['standardized_tests_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_standardized_tests($data, $id);
			
			redirect('my_profile/backend/standardized_tests', 'location');
			
		// insert
		} else {	
			$data['standardized_tests_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_standardized_tests($data);
			
			redirect('my_profile/backend/standardized_tests', 'location');
		}
	}
	
	public function standardized_tests_delete($id){
		$this->model_my_profile->delete_standardized_tests($id);

		redirect('my_profile/backend/standardized_tests','location');
	}
	// end standardized_tests

	// active_participation
	public function active_participation() {
		
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
		$this->load->view('my_profile/active_participation/list', $data);
		/* end body */
	}
	
	public function active_participation_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_active_participation_datatable->active_participation_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function active_participation_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_active_participation_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/active_participation/form', $data);
	}
	
	public function active_participation_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'active_participation_name' => $this->input->post('active_participation_name'),
			'active_participation_place' => $this->input->post('active_participation_place'),
			'active_participation_date' => $this->input->post('active_participation_date')
			//'active_participation_datetime_update' => date('Y-m-d H:i:s')
		);
		
		/*if(!empty($_FILES['active_participation_qr_code_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('active_participation_qr_code_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['active_participation_qr_code_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_active_participation($data, $id);
			
			redirect('my_profile/backend/active_participation', 'location');
			
		// insert
		} else {	
			$data['active_participation_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_active_participation($data);
			
			redirect('my_profile/backend/active_participation', 'location');
		}
	}
	
	public function active_participation_delete($id){
		$this->model_my_profile->delete_active_participation($id);

		redirect('my_profile/backend/active_participation','location');
	}
	// end active_participation

	// award
	public function award() {
		
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
		$this->load->view('my_profile/award/list', $data);
		/* end body */
	}
	
	public function award_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_award_datatable->award_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function award_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_profile->get_award_single($id);

		$data['rows'] = $this->model_my_profile->getProfileList();
		
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
		
		$this->load->view('my_profile/award/form', $data);
	}
	
	public function award_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'award_name' => $this->input->post('award_name')
			//'award_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['award_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('award_image')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;*/

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['award_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_my_profile->update_award($data, $id);
			
			redirect('my_profile/backend/award', 'location');
			
		// insert
		} else {	
			$data['award_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_profile->insert_award($data);
			
			redirect('my_profile/backend/award', 'location');
		}
	}
	
	public function award_delete($id){
		$this->model_my_profile->delete_award($id);

		redirect('my_profile/backend/award','location');
	}
	// end award
}
?>