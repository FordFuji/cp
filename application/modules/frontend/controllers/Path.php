<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Path extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		if($this->session->userdata('lang') == '') {
			$sess_lang = array(
				'lang' => 'th'
			);
			
			$this->session->set_userdata($sess_lang);
		} else {
			if($this->input->get('lang') == 'th') {
				$sess_lang = array(
					'lang' => 'th'
				);
				
				$this->session->set_userdata($sess_lang);
			} elseif($this->input->get('lang') == 'en') {
				$sess_lang = array(
					'lang' => 'en'
				);
				
				$this->session->set_userdata($sess_lang);
			}
		}
		
		$this->load->library('cart');
		
		$this->load->model('frontend/model_frontend');
	}	

	public function index() {
		$data['bannerSlide'] = $this->model_frontend->getBannerSlide();

		$this->load->view('frontend/frontend/index', $data);
	}

	public function about_us() {
		$data['test'] = 'Test';

		$this->load->view('frontend/frontend/about-us', $data);
	}

	public function alumni_check() {
		if(!empty($this->input->post('year_name_scholarship'))) {
			$year_name = $this->model_frontend->getYearNameAlumniCheck();
		}

		$data['profile'] = $this->model_frontend->getYearNameAlumniCheck();

		$this->load->view('frontend/frontend/alumni-check', $data);
	}

	public function alumni_hub() {
		$data['upComingEvent'] = $this->model_frontend->getUpcomingEventAll();

		$data['photoGallery'] = $this->model_frontend->getPhotoGallery();

		$data['profileUpdate'] = $this->model_frontend->getProfileUpdateAll();

		$this->load->view('frontend/frontend/alumni-hub', $data);
	}

	public function contact_us() {
		$data['test'] = 'Test';

		if($this->input->post('submit') != '') {
			$data_post = array(
				'contact_us_name' => $this->input->post('contact_us_name'),
				'contact_us_email' => $this->input->post('contact_us_email'),
				'contact_us_telephone' => $this->input->post('contact_us_telephone'),
				'contact_us_topic' => $this->input->post('contact_us_topic'),
				'contact_us_message' => $this->input->post('contact_us_message'),
				'contact_us_datetime_create' => date('Y-m-d H:i:s')
			);

			$this->db->insert('ci_contact_us', $data_post);

			echo '<script>alert("ส่งข้อความเรียบร้อย");</script>';
		}

		$this->load->view('frontend/frontend/contact-us', $data);
	}

	public function profile_update_detail($profile_update_id) {
		$data['profile_update_id'] = $profile_update_id;

		$data['profileUpdate'] = $this->model_frontend->getProfileUpdateRow($profile_update_id);

		$this->load->view('frontend/frontend/profile_update_detail', $data);
	}

	public function detail($alumni_activity_id) {
		$data['upComingEvent'] = $this->model_frontend->getUpComingEventRow($alumni_activity_id);

		$this->load->view('frontend/frontend/detail', $data);
	}

	public function events() {
		// pagination
		// config
		$per_page = 9;
		$offset = 0;

		$count_all = count($this->model_frontend->getUpcomingEventAll());

		$data['page_all'] = ceil($count_all / $per_page);

		$data['rows'] = $this->model_frontend->getUpcomingEvent($per_page, $offset);
		// End pagination

		$this->load->view('frontend/frontend/events', $data);
	}

	public function ajaxUpcomingEvent() {
		$per_page = 9;
		$offset = ($per_page * $this->input->post('page')) - $per_page;

		$this->db->limit($per_page, $offset);
		$this->db->order_by('alumni_activity_id', 'desc');
		$query = $this->db->get('ci_alumni_activity');

		$rows = $query->result();

		if(!empty($rows)) {
			foreach($rows as $r) {
?>
			<div class="col-12 col-md-4">
                <a href="<?php echo site_url('detail/'.$r->alumni_activity_id);?>" class="event-item">
                    <figure>
                        <div class="event-img">
                            <img src="<?php echo base_url('uploads/alumni_activity/'.$r->alumni_activity_image);?>" alt="">
                        </div>
                        <figcaption>
                            <h4><?php echo $r->alumni_activity_name;?></h4>
                            <p><?php echo $r->alumni_activity_description;?></p>
                            <div class="event-button">รายละเอียด</div>
                        </figcaption>
                    </figure>
                </a>
            </div>
<?php
			}
		}
	}

	public function ajaxProfileUpdate() {
		$per_page = 9;
		$offset = ($per_page * $this->input->post('page')) - $per_page;

		$this->db->limit($per_page, $offset);
		$this->db->order_by('profile_update_id', 'desc');
		$query = $this->db->get('ci_profile_update');

		$rows = $query->result();

		if(!empty($rows)) {
			foreach($rows as $r) {
?>
			<div class="col-12 col-md-4">
                <a href="<?php echo site_url('detail/'.$r->profile_update_id);?>" class="event-item">
                    <figure>
                        <div class="event-img">
                            <img src="<?php echo base_url('uploads/profile_update/'.$r->profile_update_image);?>" alt="">
                        </div>
                        <figcaption>
                            <h4><?php echo $r->profile_update_name;?></h4>
                            <p><?php echo $r->profile_update_description;?></p>
                            <div class="event-button">รายละเอียด</div>
                        </figcaption>
                    </figure>
                </a>
            </div>
<?php
			}
		}
	}

	public function events_profile_update() {
		// pagination
		// config
		$per_page = 9;
		$offset = 0;
		
		$data['rows'] = $this->model_frontend->getProfileUpdate($per_page, $offset);

		$count_all = count($this->model_frontend->getProfileUpdateAll());

		$data['page'] = ceil($count_all / $per_page);
		// End pagination

		$this->load->view('frontend/frontend/events_profile_update', $data);
	}

	public function scholarship_change_password() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		$data['test'] = 'Test';

		$this->load->view('frontend/frontend/scholarship-change-password', $data);
	}

	public function scholarship_document_download() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		$data['rows'] = $this->model_frontend->getDocumentDownloadResult();

		$this->load->view('frontend/frontend/scholarship-document-download', $data);
	}

	public function scholarship_form_download() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['category'] = $this->model_frontend->getCategoryForm();

		$this->load->view('frontend/frontend/scholarship-form-download', $data);
	}

	public function scholarship_making_plan() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		if($this->input->post('submit') != '') {
			$this->db->where('profile_id', $this->session->userdata('profile_id'));
			$query = $this->db->get('ci_making_plan');

			$row = $query->row();

			if(!empty($row)) {
				// update
				$data_post = array(
					'making_plan_occupation1' => $this->input->post('making_plan_occupation1'),
					'making_plan_person11' => $this->input->post('making_plan_person11'),
					'making_plan_study11' => $this->input->post('making_plan_study11'),
					'making_plan_study_term11' => $this->input->post('making_plan_study_term11'),
					'making_plan_term_other11' => $this->input->post('making_plan_term_other11'),
					'making_plan_person12' => $this->input->post('making_plan_person12'),
					'making_plan_study12' => $this->input->post('making_plan_study12'),
					'making_plan_study_term12' => $this->input->post('making_plan_study_term12'),
					'making_plan_term_other12' => $this->input->post('making_plan_term_other12'),
					'making_plan_person13' => $this->input->post('making_plan_person13'),
					'making_plan_study13' => $this->input->post('making_plan_study13'),
					'making_plan_study_term13' => $this->input->post('making_plan_study_term13'),
					'making_plan_term_other13' => $this->input->post('making_plan_term_other13'),
					'making_plan_occupation2' => $this->input->post('making_plan_occupation2'),
					'making_plan_person21' => $this->input->post('making_plan_person21'),
					'making_plan_study21' => $this->input->post('making_plan_study21'),
					'making_plan_study_term21' => $this->input->post('making_plan_study_term21'),
					'making_plan_term_other21' => $this->input->post('making_plan_term_other21'),
					'making_plan_person22' => $this->input->post('making_plan_person22'),
					'making_plan_study22' => $this->input->post('making_plan_study22'),
					'making_plan_study_term22' => $this->input->post('making_plan_study_term22'),
					'making_plan_term_other22' => $this->input->post('making_plan_term_other22'),
					'making_plan_person23' => $this->input->post('making_plan_person23'),
					'making_plan_study23' => $this->input->post('making_plan_study23'),
					'making_plan_study_term23' => $this->input->post('making_plan_study_term23'),
					'making_plan_term_other23' => $this->input->post('making_plan_term_other23'),
					'making_plan_occupation3' => $this->input->post('making_plan_occupation3'),
					'making_plan_person31' => $this->input->post('making_plan_person31'),
					'making_plan_study31' => $this->input->post('making_plan_study31'),
					'making_plan_study_term31' => $this->input->post('making_plan_study_term31'),
					'making_plan_term_other31' => $this->input->post('making_plan_term_other31'),
					'making_plan_person32' => $this->input->post('making_plan_person32'),
					'making_plan_study32' => $this->input->post('making_plan_study32'),
					'making_plan_study_term32' => $this->input->post('making_plan_study_term32'),
					'making_plan_term_other32' => $this->input->post('making_plan_term_other32'),
					'making_plan_person33' => $this->input->post('making_plan_person33'),
					'making_plan_study33' => $this->input->post('making_plan_study33'),
					'making_plan_study_term33' => $this->input->post('making_plan_study_term33'),
					'making_plan_term_other33' => $this->input->post('making_plan_term_other33'),
					'making_plan_datetime_update' => date('Y-m-d H:i:s')
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_making_plan', $data_post, $where_post);
			} else {
				// insert
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'making_plan_occupation1' => $this->input->post('making_plan_occupation1'),
					'making_plan_person11' => $this->input->post('making_plan_person11'),
					'making_plan_study11' => $this->input->post('making_plan_study11'),
					'making_plan_study_term11' => $this->input->post('making_plan_study_term11'),
					'making_plan_term_other11' => $this->input->post('making_plan_term_other11'),
					'making_plan_person12' => $this->input->post('making_plan_person12'),
					'making_plan_study12' => $this->input->post('making_plan_study12'),
					'making_plan_study_term12' => $this->input->post('making_plan_study_term12'),
					'making_plan_term_other12' => $this->input->post('making_plan_term_other12'),
					'making_plan_person13' => $this->input->post('making_plan_person13'),
					'making_plan_study13' => $this->input->post('making_plan_study13'),
					'making_plan_study_term13' => $this->input->post('making_plan_study_term13'),
					'making_plan_term_other13' => $this->input->post('making_plan_term_other13'),
					'making_plan_occupation2' => $this->input->post('making_plan_occupation2'),
					'making_plan_person21' => $this->input->post('making_plan_person21'),
					'making_plan_study21' => $this->input->post('making_plan_study21'),
					'making_plan_study_term21' => $this->input->post('making_plan_study_term21'),
					'making_plan_term_other21' => $this->input->post('making_plan_term_other21'),
					'making_plan_person22' => $this->input->post('making_plan_person22'),
					'making_plan_study22' => $this->input->post('making_plan_study22'),
					'making_plan_study_term22' => $this->input->post('making_plan_study_term22'),
					'making_plan_term_other22' => $this->input->post('making_plan_term_other22'),
					'making_plan_person23' => $this->input->post('making_plan_person23'),
					'making_plan_study23' => $this->input->post('making_plan_study23'),
					'making_plan_study_term23' => $this->input->post('making_plan_study_term23'),
					'making_plan_term_other23' => $this->input->post('making_plan_term_other23'),
					'making_plan_occupation3' => $this->input->post('making_plan_occupation3'),
					'making_plan_person31' => $this->input->post('making_plan_person31'),
					'making_plan_study31' => $this->input->post('making_plan_study31'),
					'making_plan_study_term31' => $this->input->post('making_plan_study_term31'),
					'making_plan_term_other31' => $this->input->post('making_plan_term_other31'),
					'making_plan_person32' => $this->input->post('making_plan_person32'),
					'making_plan_study32' => $this->input->post('making_plan_study32'),
					'making_plan_study_term32' => $this->input->post('making_plan_study_term32'),
					'making_plan_term_other32' => $this->input->post('making_plan_term_other32'),
					'making_plan_person33' => $this->input->post('making_plan_person33'),
					'making_plan_study33' => $this->input->post('making_plan_study33'),
					'making_plan_study_term33' => $this->input->post('making_plan_study_term33'),
					'making_plan_term_other33' => $this->input->post('making_plan_term_other33'),
					'making_plan_datetime_create' => date('Y-m-d H:i:s'),
					'making_plan_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_making_plan', $data_post);
			}
		}
		
		$data['row'] = $this->model_frontend->getMakingPlan();

		$this->load->view('frontend/frontend/scholarship-making-plan', $data);
	}

	public function scholarship_my_course() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		if($this->input->post('submit') != '') {
			if($this->input->post('courses_on_demand_id') != '') {
				// update
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'courses_on_demand_name' => $this->input->post('courses_on_demand_name'),
					'courses_on_demand_who' => $this->input->post('courses_on_demand_who'),
					'courses_on_demand_status' => $this->input->post('courses_on_demand_status'),
					'courses_on_demand_datetime_create' => date('Y-m-d H:i:s'),
					'courses_on_demand_datetime_update' => date('Y-m-d H:i:s')
				);

				if(!empty($_FILES['courses_on_demand_certificate'])) {
					$md5_image = md5(rand()).'.png';

					if(move_uploaded_file($_FILES['courses_on_demand_certificate']['tmp_name'], FCPATH.'uploads/course/'.$md5_image)) {
						$data_post['courses_on_demand_certificate'] = $md5_image;
					}
				}

				$where_post = array(
					'courses_on_demand_id' => $this->input->post('courses_on_demand_id')
				);

				$this->db->update('ci_courses_on_demand', $data_post, $where_post);
			} else {
				// insert
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'courses_on_demand_name' => $this->input->post('courses_on_demand_name'),
					'courses_on_demand_who' => $this->input->post('courses_on_demand_who'),
					'courses_on_demand_status' => $this->input->post('courses_on_demand_status'),
					'courses_on_demand_datetime_create' => date('Y-m-d H:i:s'),
					'courses_on_demand_datetime_update' => date('Y-m-d H:i:s')
				);

				if(!empty($_FILES['courses_on_demand_certificate'])) {
					$md5_image = md5(rand()).'.png';

					if(move_uploaded_file($_FILES['courses_on_demand_certificate']['tmp_name'], FCPATH.'uploads/course/'.$md5_image)) {
						$data_post['courses_on_demand_certificate'] = $md5_image;
					}
				}

				$this->db->insert('ci_courses_on_demand', $data_post);
			}
		}
		
		$data['rows'] = $this->model_frontend->getMyCourseCP();

		$data['course_demand'] = $this->model_frontend->getCourseOnDemandList();

		$this->load->view('frontend/frontend/scholarship-my-course', $data);
	}

	public function scholarship_my_development_plan() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['test'] = 'Test';

		$this->load->view('frontend/frontend/scholarship-my-development-plan', $data);
	}

	public function scholarship_my_english_update() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['year'] = $this->model_frontend->getYearEnglishUpdate();

		$data['hour'] = $this->model_frontend->getAverageHours();

		$data['level'] = $this->model_frontend->getLastedLevel();

		$this->load->view('frontend/frontend/scholarship-my-english-update', $data);
	}

	public function scholarship_my_idp() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['makingPlan'] = $this->model_frontend->getMakingPlan();

		$data['idp1'] = $this->model_frontend->getSkillStatus(1);
		$data['idp2'] = $this->model_frontend->getSkillStatus(2);
		$data['idp3'] = $this->model_frontend->getSkillStatus(3);
		$data['idp4'] = $this->model_frontend->getSkillStatus(4);

		$this->load->view('frontend/frontend/scholarship-my-idp', $data);
	}

	public function scholarship_my_message_detail($webboard_id) {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		$data['webboard_id'] = $webboard_id;

		$data['my_message'] = $this->model_frontend->getMyMessage($webboard_id);

		$data['row'] = $this->model_frontend->getWebboardRecord($webboard_id);

		$this->load->view('frontend/frontend/scholarship-my-message-detail', $data);
	}

	public function scholarship_my_message_detail_($webboard_id) {
		if($this->input->post('submit') != '') {
			$data_post = array(
				'profile_id' => $this->session->userdata('profile_id'),
				'webboard_id' => $webboard_id,
				'my_message_answer' => $this->input->post('my_message_answer'),
				'my_message_datetime_create' => date('Y-m-d H:i:s')
			);

			$this->db->insert('ci_my_message', $data_post);
		}

		redirect('scholarship_my_message_detail/'.$webboard_id);
	}

	public function scholarship_my_message() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['rows'] = $this->model_frontend->getWebboardResult();

		$data['unread'] = $this->model_frontend->getWebboardUnreadResult();

		$this->load->view('frontend/frontend/scholarship-my-message', $data);
	}

	public function scholarship_my_page_diary() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_page_diary');

		$row = $query->row();

		if(!empty($row)) {
			// update

			// ปี 1 เทอม 1
			if($this->input->post('submit1') != '') {
				$data_post = array(
					'page_diary_life1' => $this->input->post('page_diary_life1'),
					'page_diary_money_from_home1' => $this->input->post('page_diary_money_from_home1'),
					'page_diary_study1' => $this->input->post('page_diary_study1'),
					'page_diary_relation1' => $this->input->post('page_diary_relation1'),
					'page_diary_happy1' => $this->input->post('page_diary_happy1'),
					'page_diary_note1' => $this->input->post('page_diary_note1'),
					'page_diary_life_other1' => $this->input->post('page_diary_life_other1'),
					'page_diary_money_from_home_other1' => $this->input->post('page_diary_money_from_home_other1'),
					'page_diary_study_other1' => $this->input->post('page_diary_study_other1'),
					'page_diary_relation_other1' => $this->input->post('page_diary_relation_other1'),
					'page_diary_happy_other1' => $this->input->post('page_diary_happy_other1'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 1 เทอม 1

			// ปี 1 เทอม 2
			if($this->input->post('submit2') != '') {
				$data_post = array(
					'page_diary_life2' => $this->input->post('page_diary_life2'),
					'page_diary_money_from_home2' => $this->input->post('page_diary_money_from_home2'),
					'page_diary_study2' => $this->input->post('page_diary_study2'),
					'page_diary_relation2' => $this->input->post('page_diary_relation2'),
					'page_diary_happy2' => $this->input->post('page_diary_happy2'),
					'page_diary_life_other2' => $this->input->post('page_diary_life_other2'),
					'page_diary_money_from_home_other2' => $this->input->post('page_diary_money_from_home_other2'),
					'page_diary_study_other2' => $this->input->post('page_diary_study_other2'),
					'page_diary_relation_other2' => $this->input->post('page_diary_relation_other2'),
					'page_diary_happy_other2' => $this->input->post('page_diary_happy_other2'),
					'page_diary_note2' => $this->input->post('page_diary_note2'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 1 เทอม 2

			// ปี 2 เทอม 1
			if($this->input->post('submit2_1') != '') {
				$data_post = array(
					'page_diary_life2_1' => $this->input->post('page_diary_life2_1'),
					'page_diary_money_from_home2_1' => $this->input->post('page_diary_money_from_home2_1'),
					'page_diary_study2_1' => $this->input->post('page_diary_study2_1'),
					'page_diary_relation2_1' => $this->input->post('page_diary_relation2_1'),
					'page_diary_happy2_1' => $this->input->post('page_diary_happy2_1'),
					'page_diary_note2_1' => $this->input->post('page_diary_note2_1'),
					'page_diary_life_other2_1' => $this->input->post('page_diary_life_other2_1'),
					'page_diary_money_from_home_other2_1' => $this->input->post('page_diary_money_from_home_other2_1'),
					'page_diary_study_other2_1' => $this->input->post('page_diary_study_other2_1'),
					'page_diary_relation_other2_1' => $this->input->post('page_diary_relation_other2_1'),
					'page_diary_happy_other2_1' => $this->input->post('page_diary_happy_other2_1'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 2 เทอม 1

			// ปี 2 เทอม 2
			if($this->input->post('submit2_2') != '') {
				$data_post = array(
					'page_diary_life2_2' => $this->input->post('page_diary_life2_2'),
					'page_diary_money_from_home2_2' => $this->input->post('page_diary_money_from_home2_2'),
					'page_diary_study2_2' => $this->input->post('page_diary_study2_2'),
					'page_diary_relation2_2' => $this->input->post('page_diary_relation2_2'),
					'page_diary_happy2_2' => $this->input->post('page_diary_happy2_2'),
					'page_diary_life_other2_2' => $this->input->post('page_diary_life_other2_2'),
					'page_diary_money_from_home_other2_2' => $this->input->post('page_diary_money_from_home_other2_2'),
					'page_diary_study_other2_2' => $this->input->post('page_diary_study_other2_2'),
					'page_diary_relation_other2_2' => $this->input->post('page_diary_relation_other2_2'),
					'page_diary_happy_other2_2' => $this->input->post('page_diary_happy_other2_2'),
					'page_diary_note2_2' => $this->input->post('page_diary_note2_2'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 2 เทอม 2

			// ปี 3 เทอม 1
			if($this->input->post('submit3_1') != '') {
				$data_post = array(
					'page_diary_life3_1' => $this->input->post('page_diary_life3_1'),
					'page_diary_money_from_home3_1' => $this->input->post('page_diary_money_from_home3_1'),
					'page_diary_study3_1' => $this->input->post('page_diary_study3_1'),
					'page_diary_relation3_1' => $this->input->post('page_diary_relation3_1'),
					'page_diary_happy3_1' => $this->input->post('page_diary_happy3_1'),
					'page_diary_note3_1' => $this->input->post('page_diary_note3_1'),
					'page_diary_life_other3_1' => $this->input->post('page_diary_life_other3_1'),
					'page_diary_money_from_home_other3_1' => $this->input->post('page_diary_money_from_home_other3_1'),
					'page_diary_study_other3_1' => $this->input->post('page_diary_study_other3_1'),
					'page_diary_relation_other3_1' => $this->input->post('page_diary_relation_other3_1'),
					'page_diary_happy_other3_1' => $this->input->post('page_diary_happy_other3_1'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 3 เทอม 1

			// ปี 3 เทอม 2
			if($this->input->post('submit3_2') != '') {
				$data_post = array(
					'page_diary_life3_2' => $this->input->post('page_diary_life3_2'),
					'page_diary_money_from_home3_2' => $this->input->post('page_diary_money_from_home3_2'),
					'page_diary_study3_2' => $this->input->post('page_diary_study3_2'),
					'page_diary_relation3_2' => $this->input->post('page_diary_relation3_2'),
					'page_diary_happy3_2' => $this->input->post('page_diary_happy3_2'),
					'page_diary_life_other3_2' => $this->input->post('page_diary_life_other3_2'),
					'page_diary_money_from_home_other3_2' => $this->input->post('page_diary_money_from_home_other3_2'),
					'page_diary_study_other3_2' => $this->input->post('page_diary_study_other3_2'),
					'page_diary_relation_other3_2' => $this->input->post('page_diary_relation_other3_2'),
					'page_diary_happy_other3_2' => $this->input->post('page_diary_happy_other3_2'),
					'page_diary_note3_2' => $this->input->post('page_diary_note3_2'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s'),
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_page_diary', $data_post, $where_post);
			}
			// end ปี 3 เทอม 2
		} else {
			// insert

			// ปี 1 เทอม 1
			if($this->input->post('submit1') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life1' => $this->input->post('page_diary_life1'),
					'page_diary_money_from_home1' => $this->input->post('page_diary_money_from_home1'),
					'page_diary_study1' => $this->input->post('page_diary_study1'),
					'page_diary_relation1' => $this->input->post('page_diary_relation1'),
					'page_diary_happy1' => $this->input->post('page_diary_happy1'),
					'page_diary_note1' => $this->input->post('page_diary_note1'),
					'page_diary_life_other1' => $this->input->post('page_diary_life_other1'),
					'page_diary_money_from_home_other1' => $this->input->post('page_diary_money_from_home_other1'),
					'page_diary_study_other1' => $this->input->post('page_diary_study_other1'),
					'page_diary_relation_other1' => $this->input->post('page_diary_relation_other1'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 1 เทอม 1

			// ปี 1 เทอม 2
			if($this->input->post('submit2') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life2' => $this->input->post('page_diary_life2'),
					'page_diary_money_from_home2' => $this->input->post('page_diary_money_from_home2'),
					'page_diary_study2' => $this->input->post('page_diary_study2'),
					'page_diary_relation2' => $this->input->post('page_diary_relation2'),
					'page_diary_happy2' => $this->input->post('page_diary_happy2'),
					'page_diary_note2' => $this->input->post('page_diary_note2'),
					'page_diary_life_other2' => $this->input->post('page_diary_life_other2'),
					'page_diary_money_from_home_other2' => $this->input->post('page_diary_money_from_home_other2'),
					'page_diary_study_other2' => $this->input->post('page_diary_study_other2'),
					'page_diary_relation_other2' => $this->input->post('page_diary_relation_other2'),
					'page_diary_happy_other2' => $this->input->post('page_diary_happy_other2'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 1 เทอม 2

			// ปี 2 เทอม 1
			if($this->input->post('submit2_1') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life2_1' => $this->input->post('page_diary_life2_1'),
					'page_diary_money_from_home2_1' => $this->input->post('page_diary_money_from_home2_1'),
					'page_diary_study2_1' => $this->input->post('page_diary_study2_1'),
					'page_diary_relation2_1' => $this->input->post('page_diary_relation2_1'),
					'page_diary_happy2_1' => $this->input->post('page_diary_happy2_1'),
					'page_diary_note2_1' => $this->input->post('page_diary_note2_1'),
					'page_diary_life_other2_1' => $this->input->post('page_diary_life_other2_1'),
					'page_diary_money_from_home_other2_1' => $this->input->post('page_diary_money_from_home_other2_1'),
					'page_diary_study_other2_1' => $this->input->post('page_diary_study_other2_1'),
					'page_diary_relation_other2_1' => $this->input->post('page_diary_relation_other2_1'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 2 เทอม 1

			// ปี 2 เทอม 2
			if($this->input->post('submit2_2') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life2_2' => $this->input->post('page_diary_life2_2'),
					'page_diary_money_from_home2_2' => $this->input->post('page_diary_money_from_home2_2'),
					'page_diary_study2_2' => $this->input->post('page_diary_study2_2'),
					'page_diary_relation2_2' => $this->input->post('page_diary_relation2_2'),
					'page_diary_happy2_2' => $this->input->post('page_diary_happy2_2'),
					'page_diary_note2_2' => $this->input->post('page_diary_note2_2'),
					'page_diary_life_other2_2' => $this->input->post('page_diary_life_other2_2'),
					'page_diary_money_from_home_other2_2' => $this->input->post('page_diary_money_from_home_other2_2'),
					'page_diary_study_other2_2' => $this->input->post('page_diary_study_other2_2'),
					'page_diary_relation_other2_2' => $this->input->post('page_diary_relation_other2_2'),
					'page_diary_happy_other2_2' => $this->input->post('page_diary_happy_other2_2'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 2 เทอม 2

			// ปี 3 เทอม 1
			if($this->input->post('submit3_1') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life3_1' => $this->input->post('page_diary_life3_1'),
					'page_diary_money_from_home3_1' => $this->input->post('page_diary_money_from_home3_1'),
					'page_diary_study3_1' => $this->input->post('page_diary_study3_1'),
					'page_diary_relation3_1' => $this->input->post('page_diary_relation3_1'),
					'page_diary_happy3_1' => $this->input->post('page_diary_happy3_1'),
					'page_diary_note3_1' => $this->input->post('page_diary_note3_1'),
					'page_diary_life_other3_1' => $this->input->post('page_diary_life_other3_1'),
					'page_diary_money_from_home_other3_1' => $this->input->post('page_diary_money_from_home_other3_1'),
					'page_diary_study_other3_1' => $this->input->post('page_diary_study_other3_1'),
					'page_diary_relation_other3_1' => $this->input->post('page_diary_relation_other3_1'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 3 เทอม 1

			// ปี 3 เทอม 2
			if($this->input->post('submit3_2') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'page_diary_life3_2' => $this->input->post('page_diary_life3_2'),
					'page_diary_money_from_home3_2' => $this->input->post('page_diary_money_from_home3_2'),
					'page_diary_study3_2' => $this->input->post('page_diary_study3_2'),
					'page_diary_relation3_2' => $this->input->post('page_diary_relation3_2'),
					'page_diary_happy3_2' => $this->input->post('page_diary_happy3_2'),
					'page_diary_note3_2' => $this->input->post('page_diary_note3_2'),
					'page_diary_life_other3_2' => $this->input->post('page_diary_life_other3_2'),
					'page_diary_money_from_home_other3_2' => $this->input->post('page_diary_money_from_home_other3_2'),
					'page_diary_study_other3_2' => $this->input->post('page_diary_study_other3_2'),
					'page_diary_relation_other3_2' => $this->input->post('page_diary_relation_other3_2'),
					'page_diary_happy_other3_2' => $this->input->post('page_diary_happy_other3_2'),
					'page_diary_datetime_create' => date('Y-m-d H:i:s'),
					'page_diary_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_page_diary', $data_post);
			}
			// end ปี 3 เทอม 2
		}
		
		$data['row'] = $this->model_frontend->getPageDiary();

		$this->load->view('frontend/frontend/scholarship-my-page-diary', $data);
	}

	public function scholarship_my_page_folio() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['row'] = $this->model_frontend->getProfileRecord();

		$data['education'] = $this->model_frontend->getEducationResult();

		$data['certification'] = $this->model_frontend->getCertificateResult();

		$data['training'] = $this->model_frontend->getTrainingExperiencesResult();

		$data['standardized_tests'] = $this->model_frontend->getStandardizedTests();

		$data['active'] = $this->model_frontend->getActiveParticipation();

		$data['chat'] = $this->model_frontend->getChat();

		$data['award'] = $this->model_frontend->getAward();

		$this->load->view('frontend/frontend/scholarship-my-page-folio', $data);
	}

	public function scholarship_my_profile() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		if($this->input->post('submit') != '') {

			$profile_name_th = explode(' ', $this->input->post('profile_name_th'));
			$profile_name_en = explode(' ', $this->input->post('profile_name_en'));
			$profile_name_ch = explode(' ', $this->input->post('profile_name_ch'));

			$data_post1 = array(
				'profile_name_th' => $profile_name_th[0],
				'profile_name_en' => $profile_name_en[0],
				'profile_name_ch' => $profile_name_ch[0],
				'profile_email_business' => $this->input->post('profile_email_business'),
				'profile_email_personal' => $this->input->post('profile_email_personal'),
				'profile_mobile' => $this->input->post('profile_mobile'),
				'profile_date_of_birth' => date2DateEn($this->input->post('profile_date_of_birth')),
				'profile_weight' => $this->input->post('profile_weight'),
				'profile_height' => $this->input->post('profile_height'),
				'profile_address_th' => $this->input->post('profile_address_th'),
				'profile_address_en' => $this->input->post('profile_address_en'),
				'profile_my_ambition' => $this->input->post('profile_my_ambition'),
				'profile_feilds_of_interests1' => $this->input->post('profile_feilds_of_interests1'),
				'profile_my_goals' => $this->input->post('profile_my_goals'),
				'profile_feilds_of_interests2' => $this->input->post('profile_feilds_of_interests2'),
				'profile_my_expectation' => $this->input->post('profile_my_expectation'),
				'profile_feilds_of_interests3' => $this->input->post('profile_feilds_of_interests3'),
				'profile_datetime_update' => date('Y-m-d H:i:s')
			);

			if(!empty($profile_name_th[1])) {
				$data_post1['profile_surname_th'] = $profile_name_th[1];
			}

			if(!empty($profile_name_en[1])) {
				$data_post1['profile_surname_en'] = $profile_name_en[1];
			}

			if(!empty($profile_name_en[1])) {
				$data_post1['profile_surname_en'] = $profile_name_en[1];
			}

			if(!empty($profile_name_ch[1])) {
				$data_post1['profile_surname_ch'] = $profile_name_ch[1];
			}

			$education_institute = $this->input->post('education_institute');
			$education_level = $this->input->post('education_level');
			$education_year = $this->input->post('education_year');

			if(!empty($education_institute)) {
				$this->model_frontend->deleteEducation();

				$i = 0;
				foreach($education_institute as $education_institute_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'education_institute' => $education_institute_val,
						'education_level' => $education_level[$i],
						'education_year' => $education_year[$i],
						'education_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_education', $data_post);

					$i++;
				}
			}

			$extra_curriculum_course = $this->input->post('extra_curriculum_course');
			$extra_curriculum_institute = $this->input->post('extra_curriculum_institute');
			$extra_curriculum_period = $this->input->post('extra_curriculum_period');

			if(!empty($extra_curriculum_course)) {
				$this->model_frontend->deleteExtraCurriculum();

				$j = 0;

				foreach($extra_curriculum_course as $extra_curriculum_course_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'extra_curriculum_course' => $extra_curriculum_course_val,
						'extra_curriculum_institute' => $extra_curriculum_institute[$j],
						'extra_curriculum_period' => $extra_curriculum_period[$j],
						'extra_curriculum_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_extra_curriculum', $data_post);

					$j++;
				}
			}

			$training_experiences_trainning = $this->input->post('training_experiences_trainning');
			$training_experiences_place = $this->input->post('training_experiences_place');
			$training_experiences_period = $this->input->post('training_experiences_period');

			if(!empty($training_experiences_trainning)) {
				$this->model_frontend->deleteTrainingExperience();

				$k = 0;

				foreach($training_experiences_trainning as $training_experiences_trainning_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'training_experiences_trainning' => $training_experiences_trainning_val,
						'training_experiences_place' => $training_experiences_place[$k],
						'training_experiences_period' => $training_experiences_period[$k],
						'training_experiences_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_training_experiences', $data_post);

					$k++;
				}
			}

			$certificate_name = $this->input->post('certificate_name');
			$certificate_place = $this->input->post('certificate_place');
			$certificate_date = $this->input->post('certificate_date');

			if(!empty($certificate_name)) {
				$this->model_frontend->deleteCertificate();

				$k = 0;

				foreach($certificate_name as $certificate_name_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'certificate_name' => $certificate_name_val,
						'certificate_place' => $certificate_place[$k],
						'certificate_date' => $certificate_date[$k],
						'certificate_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_certificate', $data_post);

					$k++;
				}
			}

			$standardized_tests_name = $this->input->post('standardized_tests_name');
			$standardized_tests_place = $this->input->post('standardized_tests_place');
			$standardized_tests_date = $this->input->post('standardized_tests_date');

			if(!empty($standardized_tests_name)) {
				$this->model_frontend->deleteStandardTest();

				$m = 0;

				foreach($standardized_tests_name as $standardized_tests_name_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'standardized_tests_name' => $standardized_tests_name_val,
						'standardized_tests_place' => $standardized_tests_place[$m],
						'standardized_tests_date' => $standardized_tests_date[$m],
						'standardized_tests_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_standardized_tests', $data_post);

					$m++;
				}
			}

			$active_participation_name = $this->input->post('active_participation_name');
			$active_participation_place = $this->input->post('active_participation_place');
			$active_participation_date = $this->input->post('active_participation_date');

			if(!empty($active_participation_name)) {
				$this->model_frontend->deleteActiveParticipation();

				$n = 0;

				foreach($active_participation_name as $active_participation_name_val) {
					$data_post = array(
						'profile_id' => $this->session->userdata('profile_id'),
						'active_participation_name' => $certificate_name_val,
						'active_participation_place' => $active_participation_place[$n],
						'active_participation_date' => $active_participation_date[$n],
						'active_participation_datetime_create' => date('Y-m-d H:i:s')
					);

					$this->db->insert('ci_active_participation', $data_post);

					$n++;
				}
			}


			$where_post1 = array(
				'profile_id' => $this->session->userdata('profile_id')
			);

			$this->db->update('ci_profile', $data_post1, $where_post1);
		}

		$data['education'] = $this->model_frontend->getEducationResult();

		$data['extra_curriculum'] = $this->model_frontend->getExtraCurriculum();

		$data['training_experience'] = $this->model_frontend->getTrainingAndExperiences();

		$data['certificate'] = $this->model_frontend->getCertificate();

		$data['standard_test'] = $this->model_frontend->getStandardizedTests();

		$data['active'] = $this->model_frontend->getActiveParticipation();

		$data['chat'] = $this->model_frontend->getChat();

		$data['award'] = $this->model_frontend->getAward();
		
		$data['row'] = $this->model_frontend->getProfileRecord();

		$this->load->view('frontend/frontend/scholarship-my-profile', $data);
	}

	public function scholarship_my_project() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['category_project'] = $this->model_frontend->getCategoryProject();

		$this->load->view('frontend/frontend/scholarship-my-project', $data);
	}

	public function scholarship_my_study() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		if($this->input->post('submit') != '') {
			$data_post = array(
				'profile_id' => $this->session->userdata('profile_id'),
				'study_year' => $this->input->post('study_year'),
				'study_level' => $this->input->post('study_level'),
				'study_term' => $this->input->post('study_term'),
				'study_gpa' => $this->input->post('study_gpa'),
				'study_gpax' => $this->input->post('study_gpax'),
				'study_year' => $this->input->post('study_year'),
				'study_datetime_create' => date('Y-m-d H:i:s'),
				'study_datetime_update' => date('Y-m-d H:i:s')
			);

			if(!empty($_FILES['study_transcript_image'])) {
				$study_transcript_image = $_FILES['study_transcript_image']['name'];

				if(move_uploaded_file($_FILES['study_transcript_image']['tmp_name'], FCPATH.'uploads/study/'.$study_transcript_image)) {
					$data_post['study_transcript_image'] = $study_transcript_image;
				}
			}

			$this->db->insert('ci_study', $data_post);
		}

		if($this->input->post('submit_calendar') != '') {
			$this->db->where('profile_id', $this->session->userdata('profile_id'));
			$query = $this->db->get('ci_calendar_study');

			$row = $query->row();

			if(!empty($row)) {
				$data_post = array(
					'calendar_study_open1' => $this->input->post('calendar_study_open1'),
					'calendar_study_register1' => $this->input->post('calendar_study_register1'),
					'calendar_study_exam_mid_term1' => $this->input->post('calendar_study_exam_mid_term1'),
					'calendar_study_exam_final_term1' => $this->input->post('calendar_study_exam_final_term1'),
					'calendar_study_term_break1' => $this->input->post('calendar_study_term_break1'),
					'calendar_study_term2' => $this->input->post('calendar_study_term2'),
					'calendar_study_register2' => $this->input->post('calendar_study_register2'),
					'calendar_study_exam_mid_term2' => $this->input->post('calendar_study_exam_mid_term2'),
					'calendar_study_exam_final_term2' => $this->input->post('calendar_study_exam_final_term2'),
					'calendar_study_term_break2' => $this->input->post('calendar_study_term_break2'),
					'calendar_study_open3' => $this->input->post('calendar_study_open3'),
					'calendar_study_register3' => $this->input->post('calendar_study_register3'),
					'calendar_study_exam_mid_term3' => $this->input->post('calendar_study_exam_mid_term3'),
					'calendar_study_exam_final_term3' => $this->input->post('calendar_study_exam_final_term3'),
					'calendar_study_term_break3' => $this->input->post('calendar_study_term_break3'),
					'calendar_study_datetime_create' => date('Y-m-d H:i:s'),
					'calendar_study_datetime_update' => date('Y-m-d H:i:s')
				);

				$where_post = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_calendar_study', $data_post, $where_post);
			} else {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'calendar_study_open1' => $this->input->post('calendar_study_open1'),
					'calendar_study_register1' => $this->input->post('calendar_study_register1'),
					'calendar_study_exam_mid_term1' => $this->input->post('calendar_study_exam_mid_term1'),
					'calendar_study_exam_final_term1' => $this->input->post('calendar_study_exam_final_term1'),
					'calendar_study_term_break1' => $this->input->post('calendar_study_term_break1'),
					'calendar_study_term2' => $this->input->post('calendar_study_term2'),
					'calendar_study_register2' => $this->input->post('calendar_study_register2'),
					'calendar_study_exam_mid_term2' => $this->input->post('calendar_study_exam_mid_term2'),
					'calendar_study_exam_final_term2' => $this->input->post('calendar_study_exam_final_term2'),
					'calendar_study_datetime_create' => date('Y-m-d H:i:s'),
					'calendar_study_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_calendar_study', $data_post);
			}
		}
		
		$data['study'] = $this->model_frontend->getStudyResult();

		$data['row'] = $this->model_frontend->getCalendarStudy();

		$data['profile'] = $this->model_frontend->getProfileRecord();

		$this->load->view('frontend/frontend/scholarship-my-study', $data);
	}

	public function scholarship_my_training() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}

		if($this->input->post('submit') != '') {
			if($this->input->post('training_id') != '') {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'training_date_begin' => $this->input->post('training_date_begin'),
					'training_date_end' => $this->input->post('training_date_end'),
					'training_department' => $this->input->post('training_department'),
					'training_company' => $this->input->post('training_company'),
					'training_place' => $this->input->post('training_place'),
					'training_grade' => $this->input->post('training_grade'),
					'training_description_grade' => $this->input->post('training_description_grade'),
					'training_datetime_create' => date('Y-m-d H:i:s'),
					'training_datetime_update' => date('Y-m-d H:i:s')
				);

				$where_post = array(
					'training_id' => $this->input->post('training_id')
				);

				$this->db->update('ci_training', $data_post, $where_post);
			} else {
				$data_post = array(
					'profile_id' => $this->session->userdata('profile_id'),
					'training_date_begin' => $this->input->post('training_date_begin'),
					'training_date_end' => $this->input->post('training_date_end'),
					'training_department' => $this->input->post('training_department'),
					'training_company' => $this->input->post('training_company'),
					'training_place' => $this->input->post('training_place'),
					'training_grade' => $this->input->post('training_grade'),
					'training_description_grade' => $this->input->post('training_description_grade'),
					'training_datetime_create' => date('Y-m-d H:i:s'),
					'training_datetime_update' => date('Y-m-d H:i:s')
				);

				$this->db->insert('ci_training', $data_post);
			}
		}
		
		$data['rows'] = $this->model_frontend->getTrainingResult();

		$this->load->view('frontend/frontend/scholarship-my-training', $data);
	}

	public function scholarship_planning() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['headPlanningYourProject'] = $this->model_frontend->getHeadPlanningYourProject();

		$this->load->view('frontend/frontend/scholarship-planning', $data);
	}

	public function scholarship_q_a() {
		if($this->session->userdata('profile_id') == '') {
			redirect('index');
		}
		
		$data['q_a'] = $this->model_frontend->getQAResult();

		$this->load->view('frontend/frontend/scholarship-q-a', $data);
	}

	public function souvenir_shop() {
		$data['cp'] = $this->model_frontend->getSouvenirCP();

		$data['schrolar'] = $this->model_frontend->getSouvenirSchrolar();

		$this->load->view('frontend/frontend/souvenir-shop', $data);
	}

	public function checkLogin() {
		$this->db->where('profile_email_personal', $this->input->post('profile_email_personal'));
		$this->db->where('profile_password', $this->input->post('profile_password'));
		$query = $this->db->get('ci_profile');

		$row = $query->row();

		if(!empty($row)) {
			$data = array(
				'profile_id' => $row->profile_id
			);

			$this->session->set_userdata($data);

			$this->load->helper('cookie');

			if($this->input->post('remember_me') != '') {
				set_cookie('cp_username', $this->input->post('profile_email_personal'), 60 * 60 * 24 * 365);
				set_cookie('cp_password', $this->input->post('profile_password'), 60 * 60 * 24 * 365);
			}

			// เก็บ Log
			$data_log = array(
				'profile_id' => $row->profile_id,
				'log_login_datetime_create' => date('Y-m-d H:i:s')
			);

			$this->db->insert('ci_log_login', $data_log);
			// End เก็บ Log

			redirect('scholarship_my_profile');

		} else {
			echo '<script>alert("Email Or/And Password ไม่ถูกต้อง");window.location.href="'.site_url('index').'";</script>';
		}
	}

	public function logout() {
		$data_unset = array(
			'profile_id'
		);

		$this->session->unset_userdata($data_unset);

		redirect('index');
	}

	public function saveUpdateProject($category_project_id) {
		$data = array();
		
		pre($_FILES);

		if(!empty($_FILES['category_project_file_'.$category_project_id])) {
			$config['upload_path']          = FCPATH.'uploads/project/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 2048;
			$config['max_height']           = 2048;
			
			$this->load->library('upload', $config);
			
			$this->upload->initialize($config);

			if($this->upload->do_upload('category_project_file_'.$category_project_id)) {
				$data_image = $this->upload->data();
				
				/*$config_resize['image_library'] = 'gd2';
				$config_resize['source_image'] = FCPATH.'uploads/ford/'.$data_image['file_name'];
				$config_resize['new_image'] = FCPATH.'uploads/ford/'.$data_image['file_name'];
				$config_resize['create_thumb'] = FALSE;
				$config_resize['maintain_ratio'] = FALSE;
				$config_resize['width'] = 1920;
				$config_resize['height'] = 520;

				$this->load->library('image_lib', $config_resize);
				$this->image_lib->initialize($config_resize);
				$this->image_lib->resize();*/
				
				$data['category_project_file'] = $data_image['file_name'];

				$where = array(
					'category_project_id' => $category_project_id
				);

				$this->db->update('ci_category_project', $data, $where);
			} else {
				$error = array('error' => $this->upload->display_errors());
				//pre($error);
			}
		}

		redirect('scholarship_my_project');
	}

	// ajax
	public function ajaxUploadFile() {
		echo $_FILES['file']['name'];
	}

	public function ajaxSetRead() {
		$data = array(
			'webboard_status_read' => 'read'
		);

		$where = array(
			'profile_id' => $this->session->userdata('profile_id'),
			'webboard_id' => $this->input->post('webboard_id')
		);

		$this->db->update('ci_webboard_status', $data, $where);
	}

	public function ajaxDeleteWebboard() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id'),
			'webboard_id' => $this->input->post('webboard_id')
		);

		$this->db->delete('ci_webboard_status', $where);
	}

	public function ajaxChangePassword() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_profile');

		$row = $query->row();

		if(!empty($row)) {
			if($row->profile_password != $this->input->post('old_password')) {
				echo 'รหัสผ่านเดิมไม่ถูกต้อง';
			} else {
				$data = array(
					'profile_password' => $this->input->post('profile_password')
				);

				$where = array(
					'profile_id' => $this->session->userdata('profile_id')
				);

				$this->db->update('ci_profile', $data, $where);

				echo 'เปลี่ยนรหัสผ่านสำเร็จ';
			}
		}
	}

	public function ajaxStudy() {
		$this->db->where('study_id', $this->input->post('study_id'));
		$query = $this->db->get('ci_study');

		$row = $query->row();

		if(!empty($row)) {
			echo $row->study_year.'!@#$%^&*()_+'.$row->study_level.'!@#$%^&*()_+'.$row->study_term.'!@#$%^&*()_+'.$row->study_gpa.'!@#$%^&*()_+'.$row->study_transcript_image.'!@#$%^&*()_+'.$row->study_gpax;
		}
	}

	public function ajaxDeleteStudy() {
		$where = array(
			'study_id' => $this->input->post('study_id')
		);

		$this->db->delete('ci_study', $where);
	}

	public function ajaxCourseOnDemand() {
		$this->db->where('courses_on_demand_id', $this->input->post('courses_on_demand_id'));
		$query = $this->db->get('ci_courses_on_demand');

		$row = $query->row();

		if(!empty($row)) {
			echo $row->courses_on_demand_id.'!@#$%^&*()_+'.$row->courses_on_demand_name.'!@#$%^&*()_+'.$row->courses_on_demand_who.'!@#$%^&*()_+'.$row->courses_on_demand_status.'!@#$%^&*()_+'.$row->courses_on_demand_certificate;
		}
	}

	public function ajaxDeleteCourseOnDemand() {
		$where = array(
			'courses_on_demand_id' => $this->input->post('courses_on_demand_id')
		);

		$this->db->delete('ci_courses_on_demand', $where);
	}

	public function ajaxCheckEmail() {
		$this->db->where('profile_email_personal', $this->input->post('forget_password_email'));
		$query = $this->db->get('ci_profile');

		$row = $query->row();

		if(!empty($row)) {
			$new_password = substr(md5(rand()), 0, 6);

			$data = array(
				'profile_password' => $new_password,
				'profile_datetime_update' => date('Y-m-d H:i:s')
			);

			$where = array(
				'profile_email_personal' => $this->input->post('forget_password_email')
			);

			$this->db->update('ci_profile', $data, $where);

			$this->load->helper('phpmailer');

			$sender = array($this->input->post('forget_password_email'));

			$subject = 'CP :: Forget Password';

			$message = 'New Password: '.$new_password;

			$from_email = 'cp.noreply.scholarship@gmail.com';

			$from_name = 'NoReply CP Scholarship';

			send_email($sender, $subject, $message, $from_email, $from_name);

			echo 'ส่งรหัสผ่านไปยังอีเมล์ที่ได้กรอกเรียบร้อย';
		} else {
			echo 'ไม่มีอีเมล์นี้ในระบบ';
		}
	}

	public function ajaxTraining() {
		$this->db->where('training_id', $this->input->post('training_id'));
		$query = $this->db->get('ci_training');

		$row = $query->row();

		if(!empty($row)) {
			echo $row->training_date_begin.'!@#$%^&*()_+'.$row->training_date_end.'!@#$%^&*()_+'.$row->training_department.'!@#$%^&*()_+'.$row->training_company.'!@#$%^&*()_+'.$row->training_place.'!@#$%^&*()_+'.$row->training_grade.'!@#$%^&*()_+'.$row->training_description_grade;
		}
	}

	public function ajaxDeleteTraining() {
		$where = array(
			'training_id' => $this->input->post('training_id')
		);

		$this->db->delete('ci_training', $where);
	}

	public function ajaxAddImageProfile() {
		//pre($_FILES['file']);

		$md5_file = md5(rand()).'.png';
		
		if(move_uploaded_file($_FILES['file']['tmp_name'], FCPATH.'uploads/profile/'.$md5_file)) {
			$profile_image = 'profile_image'.$this->input->post('id');

			$data = array(
				$profile_image => $md5_file
			);

			$where = array(
				'profile_id' => $this->session->userdata('profile_id')
			);

			$this->db->update('ci_profile', $data, $where);
		}

		echo base_url('uploads/profile/'.$md5_file);
	}

	public function ajaxDeleteImageProfile() {
		$profile_image = 'profile_image'.$this->input->post('id');
		
		$data_profile = array(
			$profile_image => ''
		);

		$where_profile = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->update('ci_profile', $data_profile, $where_profile);
	}

	public function ajaxAddImageChat() {
		//pre($_FILES['file']);

		$md5_file = md5(rand()).'.png';
		$file_name = $_FILES['file']['name'];
		
		if(move_uploaded_file($_FILES['file']['tmp_name'], FCPATH.'uploads/profile/'.$md5_file)) {
		
		}

		echo json_encode([
            'path' => base_url('uploads/profile/'.$md5_file),
            'file_name' => $md5_file,
        ]);

		// echo base_url('uploads/profile/'.$md5_file,);
	}

	public function ajaxSaveImageChat() {
		
		$data = array(
			'chat_qr_code_image' => $this->input->post('chat_qr_code_image'),
			'profile_id' => $this->session->userdata('profile_id'),
			'chat_application' => $this->input->post('chat_application')
		);

		$this->db->insert('ci_chat', $data);
	}

	public function ajaxDeleteChat() {
		$where = array(
			'chat_id' => $this->input->post('chat_id')
		);

		$this->db->delete('ci_chat', $where);
	}

	public function ajaxDeleteAward() {
		$where = array(
			'award_id' => $this->input->post('award_id')
		);

		$this->db->delete('ci_award', $where);
	}

	public function ajaxDeleteEducation() {
		$where = array(
			'education_id' => $this->input->post('education_id')
		);

		$this->db->delete('ci_education', $where);
	}

	public function ajaxDeleteCourse() {
		$where = array(
			'extra_curriculum_id' => $this->input->post('course_id')
		);

		$this->db->delete('ci_extra_curriculum', $where);
	}

	public function ajaxDeleteTrainingExperience() {
		$where = array(
			'training_experiences_id' => $this->input->post('training_experiences_id')
		);

		$this->db->delete('ci_training_experiences', $where);
	}

	public function ajaxDeleteCertificate() {
		$where = array(
			'certificate_id' => $this->input->post('certificate_id')
		);

		$this->db->delete('ci_certificate', $where);
	}

	public function ajaxDeleteStandardTest() {
		$where = array(
			'standardized_tests_id' => $this->input->post('standardized_tests_id')
		);

		$this->db->delete('ci_standardized_tests', $where);
	}

	public function ajaxDeleteActive() {
		$where = array(
			'active_participation_id' => $this->input->post('active_participation_id')
		);

		$this->db->delete('ci_active_participation', $where);
	}

	public function ajaxAddImageAward() {
		//pre($_FILES['file']);

		$md5_file = md5(rand()).'.png';
		$file_name = $_FILES['file']['name'];
		
		if(move_uploaded_file($_FILES['file']['tmp_name'], FCPATH.'uploads/profile/'.$md5_file)) {
		
		}

		echo json_encode([
            'path' => base_url('uploads/profile/'.$md5_file),
            'file_name' => $md5_file,
        ]);

		// echo base_url('uploads/profile/'.$md5_file,);
	}

	public function ajaxSaveImageAward() {
		
		$data = array(
			'award_image' => $this->input->post('award_image'),
			'profile_id' => $this->session->userdata('profile_id'),
			'award_name' => $this->input->post('award_name')
		);

		$this->db->insert('ci_award', $data);
	}
}