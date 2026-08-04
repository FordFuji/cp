<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('register/model_register');
		$this->load->model('register/model_register_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/register/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
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
		$this->load->view('register/register/list', $data);
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
 
        $results = $this->model_register_datatable->register_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_register->get_data_single($id);

		if(!empty($data['row']) and $data['row']->profile_capital_type == 'ป.ตรี') {
			$data['profile_faculty'] = 'block';
		} else {
			$data['profile_faculty'] = 'none';
		}
		
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
		
		$this->load->view('register/register/form', $data);
	}
	
	public function save_update($id = ''){	
		$data = array(
			'profile_type' => $this->input->post('profile_type'),
			'profile_year' => $this->input->post('profile_year'),
			'profile_year_th' => $this->input->post('profile_year') + 543,
			'profile_model' => $this->input->post('profile_model'),
			'profile_capital_type' => $this->input->post('profile_capital_type'),
			'profile_card_no' =>  $this->input->post('profile_card_no'),
			'profile_gender' =>  $this->input->post('profile_gender'),
			'profile_prefix' =>  $this->input->post('profile_prefix'),
			'profile_name_th' =>  $this->input->post('profile_name_th'),
			'profile_surname_th' =>  $this->input->post('profile_surname_th'),
			'profile_name_en' =>  $this->input->post('profile_name_en'),
			'profile_surname_en' =>  $this->input->post('profile_surname_en'),
			'profile_email_personal' =>  $this->input->post('profile_email_personal'),
			'profile_mobile' =>  $this->input->post('profile_mobile'),
			'profile_date_of_birth' =>  $this->input->post('profile_date_of_birth'),
			'profile_weight' =>  $this->input->post('profile_weight'),
			'profile_height' =>  $this->input->post('profile_height'),
			'profile_domicile' =>  $this->input->post('profile_domicile'),
			'profile_institute' =>  $this->input->post('profile_institute'),
			'profile_study_plan' =>  $this->input->post('profile_study_plan'),
			'profile_province_institute' =>  $this->input->post('profile_province_institute'),
			'profile_gpax' =>  $this->input->post('profile_gpax'),
			'profle_salary_per_person_per_month' =>  $this->input->post('profle_salary_per_person_per_month'),
			'profile_special_working_status' =>  $this->input->post('profile_special_working_status'),
			'profile_password' =>  $this->input->post('profile_password'),
			'profile_datetime_update' => date('Y-m-d H:i:s')
		);

		if($this->input->post('profile_faculty') != '') {
			$data['profile_faculty'] = $this->input->post('profile_faculty');
		}
		
		/*if(!empty($_FILES['register_image'])) {
			$config['upload_path']          = FCPATH.'uploads/register/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('register_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/register/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/register/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['register_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/
		
		// update 
		if($id != '') {	
			$this->model_register->update_data($data, $id);
			
			redirect('register/backend/index', 'location');
			
		// insert
		} else {	
			$data['profile_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_register->insert_data($data);
			
			redirect('register/backend/index', 'location');
		}
	}
	
	public function delete($id){
		$this->model_register->delete_data($id);

		redirect('register/backend/index','location');
	} 
}
?>