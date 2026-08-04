<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('my_course/model_my_course');
		$this->load->model('my_course/model_courses_offer_by_cp_datatable');
		$this->load->model('my_course/model_courses_on_demand_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/courses_offer_by_cp/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// courses_offer_by_cp
	public function courses_offer_by_cp() {
		
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
		$this->load->view('my_course/courses_offer_by_cp/list', $data);
		/* end body */
	}
	
	public function courses_offer_by_cp_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_courses_offer_by_cp_datatable->courses_offer_by_cp_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function courses_offer_by_cp_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_course->get_courses_offer_by_cp_single($id);

		$data['profile'] = $this->model_my_course->getProfileList();
		
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
		
		$this->load->view('my_course/courses_offer_by_cp/form', $data);
	}
	
	public function courses_offer_by_cp_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'courses_offer_by_cp_name' =>  $this->input->post('courses_offer_by_cp_name'),
			'courses_offer_by_cp_who' =>  $this->input->post('courses_offer_by_cp_who'),
			'courses_offer_by_cp_status' =>  $this->input->post('courses_offer_by_cp_status'),
			'courses_offer_by_cp_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['courses_offer_by_cp_certificate'])) {
			$config['upload_path']          = FCPATH.'uploads/course/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('courses_offer_by_cp_certificate')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/course/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/course/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['courses_offer_by_cp_certificate'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_my_course->update_courses_offer_by_cp($data, $id);
			
			redirect('my_course/backend/courses_offer_by_cp', 'location');
			
		// insert
		} else {	
			$data['courses_offer_by_cp_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_course->insert_courses_offer_by_cp($data);
			
			redirect('my_course/backend/courses_offer_by_cp', 'location');
		}
	}
	
	public function courses_offer_by_cp_delete($id){
		$this->model_my_course->delete_courses_offer_by_cp($id);

		redirect('my_course/backend/courses_offer_by_cp','location');
	} 
	// End courses_offer_by_cp

	// courses_on_demand
	public function courses_on_demand() {
		
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
		$this->load->view('my_course/courses_on_demand/list', $data);
		/* end body */
	}
	
	public function courses_on_demand_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_courses_on_demand_datatable->courses_on_demand_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function courses_on_demand_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_my_course->get_courses_on_demand_single($id);

		$data['profile'] = $this->model_my_course->getProfileList();
		
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
		
		$this->load->view('my_course/courses_on_demand/form', $data);
	}
	
	public function courses_on_demand_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'courses_on_demand_name' =>  $this->input->post('courses_on_demand_name'),
			'courses_on_demand_who' =>  $this->input->post('courses_on_demand_who'),
			'courses_on_demand_status' =>  $this->input->post('courses_on_demand_status'),
			'courses_on_demand_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['courses_on_demand_certificate'])) {
			$config['upload_path']          = FCPATH.'uploads/course/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('courses_on_demand_certificate')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/course/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/course/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['courses_on_demand_certificate'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_my_course->update_courses_on_demand($data, $id);
			
			redirect('my_course/backend/courses_on_demand', 'location');
			
		// insert
		} else {	
			$data['courses_on_demand_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_my_course->insert_courses_on_demand($data);
			
			redirect('my_course/backend/courses_on_demand', 'location');
		}
	}
	
	public function courses_on_demand_delete($id){
		$this->model_my_course->delete_courses_on_demand($id);

		redirect('my_course/backend/courses_on_demand','location');
	} 
	// End courses_on_demand
}
?>