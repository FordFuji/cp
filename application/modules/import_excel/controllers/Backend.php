<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('import_excel/model_import_excel');
		//$this->load->model('import_excel/model_import_excel_datatable');
		$this->load->model('template_main/model_template_main');
		//$this->load->library('datatables');
		$this->load->library('table');
		$this->load->helper('form');
		$this->path_upload = FCPATH.'uploads/import_excel/';
		
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
		$this->load->view('import_excel/import_excel/form', $data);
		/* end body */
	}
	
	/*public function server_processing() {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
 
        $results = $this->model_import_excel_datatable->import_excel_datatable($param);
 
        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
 
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	
	public function form($id = ''){	
		$data['id'] = $id;
		$data['row'] = $this->model_import_excel->get_data_single($id);
		
		/* start header, menu */
		/*$data['title'] = $this->model_template_main->get_title_menu();
		$data['active'] = $this->model_template_main->get_active_menu();
		$data['sub_menu_active'] = $this->model_template_main->get_active_sub_menu();
		$data['row_user'] = $this->model_template_main->get_user_single();
		$data['department'] = $this->model_template_main->get_department_single();
		$data['rows_menu'] = $this->model_template_main->get_menu_list();
		$data['rows_sub_menu'] = $this->model_template_main->get_sub_menu_list();
		
		$this->load->view('template_main/template_main/header', $data);
		$this->load->view('template_main/template_main/menu_sidebar', $data);
		/* end header, menu */
		
		/*$this->load->view('import_excel/import_excel/form', $data);
	}*/
	
	public function save_update() {
		$md5_excel = md5(rand()).'.xlsx';
		if(move_uploaded_file($_FILES['import_excel']['tmp_name'], FCPATH.'uploads/import_excel_register/'.$md5_excel)) {
			header('Content-Type: text/html; charset=utf-8');
 
			// include the autoloader, so we can use PhpSpreadsheet
			require_once(FCPATH.'/vendor/autoload.php');

			# Create a new Xls Reader
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

			// Tell the reader to only read the data. Ignore formatting etc.
			$reader->setReadDataOnly(true);

			// Read the spreadsheet file.
			$spreadsheet = $reader->load(FCPATH.'uploads/import_excel_register/'.$md5_excel);

			$sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
			$data = $sheet->toArray();

			$i = 0;
			foreach($data as $val) {
				if($i > 0) {
					$j = 0;
					foreach($val as $val_) {
						//echo $j.$val_.' ';
						if($j == 0) {
							$data_excel = array(
								'profile_year' => $val_
							);
						}

						if($j == 1) {
							$data_excel['profile_year_th'] = $val_;
						}

						if($j == 2) {
							$data_excel['profile_type'] = $val_;
						}

						if($j == 3) {
							$data_excel['profile_model'] = $val_;
						}

						if($j == 4) {
							$data_excel['profile_capital_type'] = $val_;
						}

						if($j == 5) {
							$data_excel['profile_card_no'] = $val_;
						}

						if($j == 6) {
							$data_excel['profile_gender'] = $val_;
						}

						if($j == 7) {
							$data_excel['profile_prefix'] = $val_;
						}

						if($j == 8) {
							$data_excel['profile_name_th'] = $val_;
						}

						if($j == 9) {
							$data_excel['profile_surname_th'] = $val_;
						}

						if($j == 10) {
							$data_excel['profile_name_en'] = $val_;
						}

						if($j == 11) {
							$data_excel['profile_surname_en'] = $val_;
						}

						if($j == 12) {
							$data_excel['profile_email_personal'] = $val_;
						}

						if($j == 13) {
							$data_excel['profile_mobile'] = $val_;
						}

						if($j == 14) {
							$data_excel['profile_date_of_birth'] = $val_;
						}

						if($j == 15) {
							$data_excel['profile_weight'] = $val_;
						}

						if($j == 16) {
							$data_excel['profile_height'] = $val_;
						}

						if($j == 17) {
							$data_excel['profile_domicile'] = $val_;
						}

						if($j == 18) {
							$data_excel['profile_institute'] = $val_;
						}

						if($j == 19) {
							$data_excel['profile_faculty'] = $val_;
						}

						if($j == 20) {
							$data_excel['profile_study_plan'] = $val_;
						}

						if($j == 21) {
							$data_excel['profile_province_institute'] = $val_;
						}

						if($j == 22) {
							$data_excel['profile_gpax'] = $val_;
						}

						if($j == 23) {
							$data_excel['profle_salary_per_person_per_month'] = $val_;
						}

						if($j == 24) {
							$data_excel['profile_special_working_status'] = $val_;
						}

						if($j == 25) {
								
							$data_excel['profile_password'] = $val_;
			
							$data_excel['profile_datetime_create'] = date('Y-m-d H:i:s');
							$data_excel['profile_datetime_update'] = date('Y-m-d H:i:s');

							$this->db->insert('ci_profile', $data_excel);
						}

						$j++;
					}

					echo '<br>';
				}

				$i++;
			}
		}

		echo '<script>alert("Import Excel Success");window.location.href="'.site_url('import_excel/backend').'";</script>';
		
	}
	
	/*public function delete($id){
		$this->model_import_excel->delete_data($id);

		redirect('import_excel/backend/index','location');
	}*/
}
?>