<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('planning_your_project/model_planning_your_project');
		$this->load->model('planning_your_project/model_level_planning_your_project_datatable');
		$this->load->model('planning_your_project/model_planning_your_project_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/level_planning_your_project/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// level_planning_your_project
	public function level_planning_your_project() {
		
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
		$this->load->view('planning_your_project/level_planning_your_project/list', $data);
		/* end body */
	}
	
	public function level_planning_your_project_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_level_planning_your_project_datatable->level_planning_your_project_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function level_planning_your_project_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_planning_your_project->get_level_planning_your_project_single($id);

		$data['profile'] = $this->model_planning_your_project->getProfileList();
		
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
		
		$this->load->view('planning_your_project/level_planning_your_project/form', $data);
	}
	
	public function level_planning_your_project_save_update($id = ''){	
		$data = array(
			'profile_id' => $this->input->post('profile_id'),
			'level_planning_your_project_embed_youtube' => $this->input->post('level_planning_your_project_embed_youtube'),
			'level_planning_your_project_name' => $this->input->post('level_planning_your_project_name'),
			'level_planning_your_project_description' => $this->input->post('level_planning_your_project_description'),
			'level_planning_your_project_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['level_planning_your_project_embed_image'])) {
			$config['upload_path']          = FCPATH.'uploads/project/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('level_planning_your_project_embed_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/project/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1600;
				$config_resize['height'] = 900;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['level_planning_your_project_embed_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_planning_your_project->update_level_planning_your_project($data, $id);
			
			redirect('planning_your_project/backend/level_planning_your_project', 'location');
			
		// insert
		} else {	
			$data['level_planning_your_project_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_planning_your_project->insert_level_planning_your_project($data);
			
			redirect('planning_your_project/backend/level_planning_your_project', 'location');
		}
	}
	
	public function level_planning_your_project_delete($id){
		$this->model_planning_your_project->delete_level_planning_your_project($id);

		redirect('planning_your_project/backend/level_planning_your_project','location');
	} 
	// End level_planning_your_project

	// planning_your_project
	public function planning_your_project() {
		
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
		$this->load->view('planning_your_project/planning_your_project/list', $data);
		/* end body */
	}
	
	public function planning_your_project_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_planning_your_project_datatable->planning_your_project_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function planning_your_project_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_planning_your_project->get_planning_your_project_single($id);

		$data['levelPlanning'] = $this->model_planning_your_project->getLevelPlanningYourProject();
		
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
		
		$this->load->view('planning_your_project/planning_your_project/form', $data);
	}
	
	public function planning_your_project_save_update($id = ''){	
		$data = array(
			'level_planning_your_project_id' => $this->input->post('level_planning_your_project_id'),
			'planning_your_project_name' => $this->input->post('planning_your_project_name')
		);

		if(!empty($_FILES)) {
			$md5_mp4 = md5(rand()).'.mp4';
			if(move_uploaded_file($_FILES['planning_your_project_file']['tmp_name'], FCPATH.'uploads/project/'.$md5_mp4)) {
				$data['planning_your_project_file'] = $md5_mp4;
			}	
		}
		
		/*if(!empty($_FILES['planning_your_project_image'])) {
			$config['upload_path']          = FCPATH.'uploads/planning_your_project/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('planning_your_project_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/planning_your_project/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/planning_your_project/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['planning_your_project_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_planning_your_project->update_planning_your_project($data, $id);
			
			redirect('planning_your_project/backend/planning_your_project', 'location');
			
		// insert
		} else {	
			$data['planning_your_project_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_planning_your_project->insert_planning_your_project($data);
			
			redirect('planning_your_project/backend/planning_your_project', 'location');
		}
	}
	
	public function planning_your_project_delete($id){
		$this->model_planning_your_project->delete_planning_your_project($id);

		redirect('planning_your_project/backend/planning_your_project','location');
	} 
	// End planning_your_project
}
?>