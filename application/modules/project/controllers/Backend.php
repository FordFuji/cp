<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('project/model_project');
		$this->load->model('project/model_category_project_datatable');
		$this->load->model('project/model_project_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/category_project/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// category_project
	public function category_project() {
		
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
		$this->load->view('project/category_project/list', $data);
		/* end body */
	}
	
	public function category_project_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_category_project_datatable->category_project_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function category_project_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_project->get_category_project_single($id);

		$data['profile'] = $this->model_project->getProfileList();
		
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
		
		$this->load->view('project/category_project/form', $data);
	}
	
	public function category_project_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'category_project_name' =>  $this->input->post('category_project_name'),
			'category_project_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['category_project_file'])) {
			$config['upload_path']          = FCPATH.'uploads/project/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('category_project_file')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['category_project_file'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_project->update_category_project($data, $id);
			
			redirect('project/backend/category_project', 'location');
			
		// insert
		} else {	
			$data['category_project_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_project->insert_category_project($data);
			
			redirect('project/backend/category_project', 'location');
		}
	}
	
	public function category_project_delete($id){
		$this->model_project->delete_category_project($id);

		redirect('project/backend/category_project','location');
	} 
	// End category_project

	// project
	public function project() {
		
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
		$this->load->view('project/project/list', $data);
		/* end body */
	}
	
	public function project_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_project_datatable->project_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function project_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_project->get_project_single($id);

		$data['categoryProject'] = $this->model_project->getCategoryProject();
		
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
		
		$this->load->view('project/project/form', $data);
	}
	
	public function project_save_update($id = ''){	
		$data = array(
			'category_project_id' => $this->input->post('category_project_id'),
			'project_status' =>  $this->input->post('project_status'),
			'project_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['project_file'])) {
			$config['upload_path']          = FCPATH.'uploads/project/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('project_file')) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['project_file'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_project->update_project($data, $id);
			
			redirect('project/backend/project', 'location');
			
		// insert
		} else {	
			$data['project_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_project->insert_project($data);
			
			redirect('project/backend/project', 'location');
		}
	}
	
	public function project_delete($id){
		$this->model_project->delete_project($id);

		redirect('project/backend/project','location');
	} 
	// End project
}
?>