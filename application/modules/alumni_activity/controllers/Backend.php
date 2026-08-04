<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('alumni_activity/model_alumni_activity');
		$this->load->model('alumni_activity/model_alumni_activity_datatable');
		$this->load->model('alumni_activity/model_profile_update_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/alumni_activity/';
		
		if($this->session->userdata('session_login') != true) {
			redirect(site_url());
		}
	}
	
	// alumni_activity
	public function alumni_activity() {
		
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
		$this->load->view('alumni_activity/alumni_activity/list', $data);
		/* end body */
	}
	
	public function alumni_activity_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_alumni_activity_datatable->alumni_activity_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function alumni_activity_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_alumni_activity->get_alumni_activity_single($id);
		
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
		
		$this->load->view('alumni_activity/alumni_activity/form', $data);
	}
	
	public function alumni_activity_save_update($id = ''){	
		$data = array(
			'alumni_activity_name' => $this->input->post('alumni_activity_name'),
			'alumni_activity_description' =>  $this->input->post('alumni_activity_description'),
			'alumni_activity_detail' =>  $this->input->post('alumni_activity_detail'),
			'alumni_activity_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['alumni_activity_image'])) {
			$config['upload_path']          = FCPATH.'uploads/alumni_activity/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('alumni_activity_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/alumni_activity/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/alumni_activity/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1600;
				$config_resize['height'] = 900;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['alumni_activity_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_alumni_activity->update_alumni_activity($data, $id);
			
			redirect('alumni_activity/backend/alumni_activity', 'location');
			
		// insert
		} else {	
			$data['alumni_activity_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_alumni_activity->insert_alumni_activity($data);
			
			redirect('alumni_activity/backend/alumni_activity', 'location');
		}
	}
	
	public function alumni_activity_delete($id){
		$this->model_alumni_activity->delete_alumni_activity($id);

		redirect('alumni_activity/backend/alumni_activity','location');
	} 
	// End alumni_activity

	// photo gallery
	public function photo_gallery(){
		$data['rows'] = $this->model_alumni_activity->get_photo_gallery_list();
		
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
		
		$this->load->view('alumni_activity/photo_gallery/form', $data);
	}
	
	public function photo_gallery_save_update($id = ''){	
		$data = array();
		
		/*if(!empty($_FILES['photo_gallery_image'])) {
			$config['upload_path']          = FCPATH.'uploads/photo_gallery/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('photo_gallery_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/photo_gallery/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/photo_gallery/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1600;
				$config_resize['height'] = 900;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['photo_gallery_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}*/

		if(!empty($_FILES['photo_gallery_image'])) {
			
			$this->load->library('upload');

			$i = 0;
			foreach($_FILES['photo_gallery_image']['tmp_name'] as $tmp_name) {
				$foo = new Upload($_FILES['photo_gallery_image']['tmp_name'][$i]); 
				if ($foo->uploaded) {
					// save uploaded image with a new name,
					// resized to 100px wide
					$foo->file_new_name_body = 'image_resized';
					$foo->image_resize = true;
					$foo->image_convert = 'gif';
					$foo->image_x = 1600;
					$foo->image_y = 900;
					@$foo->process(FCPATH.'/uploads/photo_gallery/');
					if ($foo->processed) {
						$foo->clean();
					} else {
						echo 'error : ' . $foo->error;
					} 
				}
				
				$data['photo_gallery_image'] = $foo->file_dst_name;
				$data['photo_gallery_datetime_create'] = date('Y-m-d H:i:s');

				$this->model_alumni_activity->insert_photo_gallery($data);

				//pre($foo);

				$i++;
			}

			redirect('alumni_activity/backend/photo_gallery', 'location');
		}
	}

	public function deletePhotoGallery($photo_gallery_id) {
		$where = array(
			'photo_gallery_id' => $photo_gallery_id
		);

		$this->db->delete('ci_photo_gallery', $where);

		redirect('alumni_activity/backend/photo_gallery');
	}
	// End photo gallery

	// profile_update
	public function profile_update() {
		
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
		$this->load->view('alumni_activity/profile_update/list', $data);
		/* end body */
	}
	
	public function profile_update_server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_profile_update_datatable->profile_update_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function profile_update_form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_alumni_activity->get_profile_update_single($id);
		
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
		
		$this->load->view('alumni_activity/profile_update/form', $data);
	}
	
	public function profile_update_save_update($id = ''){	
		$data = array(
			'profile_update_name' => $this->input->post('profile_update_name'),
			'profile_update_description' =>  $this->input->post('profile_update_description'),
			'profile_update_detail' =>  $this->input->post('profile_update_detail'),
			'profile_update_datetime_update' => date('Y-m-d H:i:s')
		);
		
		if(!empty($_FILES['profile_update_image'])) {
			$config['upload_path']          = FCPATH.'uploads/profile_update/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('profile_update_image')) {
				$data_image = $this->upload->data();
				
				$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/profile_update/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/profile_update/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1600;
				$config_resize['height'] = 900;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();
				
				$data['profile_update_image'] = $data_image['file_name'];
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}
		
		// update 
		if($id != '') {	
			$this->model_alumni_activity->update_profile_update($data, $id);
			
			redirect('alumni_activity/backend/profile_update', 'location');
			
		// insert
		} else {	
			$data['profile_update_datetime_create'] = date('Y-m-d H:i:s');
				
			$this->model_alumni_activity->insert_profile_update($data);
			
			redirect('alumni_activity/backend/profile_update', 'location');
		}
	}
	
	public function profile_update_delete($id){
		$this->model_alumni_activity->delete_profile_update($id);

		redirect('alumni_activity/backend/profile_update','location');
	} 
	// End profile_update
}
?>