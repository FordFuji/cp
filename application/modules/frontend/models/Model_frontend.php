<?php
class Model_frontend extends CI_Model {
	
	public function __construct() {
		parent::__construct();
        
        $this->load->database();	
	}
	
	public function getBannerSlide() {
		$this->db->order_by('banner_slide_id', 'asc');
		$query = $this->db->get('ci_banner_slide');

		return $query->result();
	}

	public function getProfileRecord() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_profile');

		return $query->row();
	}

	public function getEducationResult() {
		$this->db->order_by('education_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_education');

		return $query->result();
	}

	public function getCertificateResult() {
		$this->db->order_by('certificate_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_certificate');

		return $query->result();
	}

	public function getWebboardResult() {
		$this->db->order_by('ci_webboard.webboard_datetime', 'desc');
		$this->db->join('ci_webboard_status', 'ci_webboard.webboard_id = ci_webboard_status.webboard_id', 'inner');
		$this->db->where('ci_webboard_status.profile_id', $this->session->userdata('profile_id'));
		$this->db->where('ci_webboard_status.webboard_status_delete', 'undelete');
		$query = $this->db->get('ci_webboard');

		return $query->result();
	}

	public function getWebboardRecord($webboard_id) {
		$this->db->where('ci_webboard.webboard_id', $webboard_id);
		$this->db->join('ci_webboard_status', 'ci_webboard.webboard_id = ci_webboard_status.webboard_id', 'inner');
		$this->db->where('ci_webboard_status.profile_id', $this->session->userdata('profile_id'));
		$this->db->where('ci_webboard_status.webboard_status_delete', 'undelete');
		$query = $this->db->get('ci_webboard');

		return $query->row();
	}

	public function getWebboardUnreadResult() {
		$this->db->order_by('ci_webboard.webboard_datetime', 'desc');
		$this->db->join('ci_webboard_status', 'ci_webboard.webboard_id = ci_webboard_status.webboard_id', 'inner');
		$this->db->where('ci_webboard_status.profile_id', $this->session->userdata('profile_id'));
		$this->db->where('ci_webboard_status.webboard_status_delete', 'undelete');
		$this->db->where('ci_webboard_status.webboard_status_read', 'unread');
		$query = $this->db->get('ci_webboard');

		return $query->result();
	}

	public function getStudyResult() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('study_year', 'asc');
		$this->db->order_by('study_level', 'asc');
		$this->db->order_by('study_term', 'asc');
		$query = $this->db->get('ci_study');

		return $query->result();
	}

	public function getCalendarStudy() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_calendar_study');

		return $query->row();
	}

	public function getPageDiary() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_page_diary');

		return $query->row();
	}

	public function getMakingPlan() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_making_plan');

		return $query->row();
	}

	public function getMyCourseCP() {
		$this->db->order_by('courses_offer_by_cp_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_courses_offer_by_cp');

		return $query->result();
	}

	public function getCategoryForm() {
		$this->db->order_by('category_form_id', 'asc');
		$query = $this->db->get('ci_category_form');

		return $query->result();
	}

	public function getFormByCategory($category_form_id) {
		$this->db->order_by('form_id', 'asc');
		$this->db->where('category_form_id', $category_form_id);
		$query = $this->db->get('ci_form');

		return $query->result();
	}

	public function getDocumentDownloadResult() {
		$this->db->order_by('document_download_id', 'asc');
		$query = $this->db->get('ci_document_download');

		return $query->result();
	}

	public function getQAResult() {
		$this->db->order_by('q_a_id', 'asc');
		$query = $this->db->get('ci_q_a');

		return $query->result();
	}

	public function getTrainingResult() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('training_id', 'asc');
		$query = $this->db->get('ci_training');

		return $query->result();
	}

	public function getTrainingExperiencesResult() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('training_experiences_id', 'asc');
		$query = $this->db->get('ci_training_experiences');

		return $query->result();
	}

	public function getSkillStatus($skill_id) {
		$this->db->where('skill_id', $skill_id);
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('idp_id', 'asc');
		$query = $this->db->get('ci_idp');

		return $query->result();
	}

	public function getCourseOnDemandList() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('courses_on_demand_id', 'asc');
		$query = $this->db->get('ci_courses_on_demand');

		return $query->result();
	}

	public function getYearEnglishUpdate() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->group_by('english_update_year');
		$this->db->order_by('english_update_year', 'asc');
		$query = $this->db->get('ci_english_update');

		return $query->result();
	}

	public function getQuarterEnglishUpdate($year) {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->where('english_update_year', $year);
		$this->db->order_by('english_update_quarter', 'asc');
		$query = $this->db->get('ci_english_update');

		return $query->result();
	}

	public function getAverageHours() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_english_update');

		$rows = $query->result();

		$hour = 0;
		if(!empty($rows)) {
			foreach($rows as $r) {
				$hour += $r->english_update_hours;
			}
		}

		if(count($rows) > 0) {
			return ceil($hour / count($rows));
		} else {
			return 0;
		}
	}

	public function getLastedLevel() {
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$this->db->order_by('english_update_year', 'desc');
		$this->db->order_by('english_update_quarter', 'desc');
		$query = $this->db->get('ci_english_update');

		return $query->row();
	}

	public function getCategoryProject() {
		$this->db->order_by('category_project_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_category_project');

		return $query->result();
	}

	public function getProject($category_project_id) {
		$this->db->where('category_project_id', $category_project_id);
		$query = $this->db->get('ci_project');

		return $query->result();
	}

	public function getYearNameAlumniCheck() {
		$this->db->where('profile_year', $this->input->post('year_name_scholarship'));
		$this->db->or_where('profile_year_th', $this->input->post('year_name_scholarship'));
		$this->db->or_like('profile_name_th', $this->input->post('year_name_scholarship'), 'match');
		$this->db->or_like('profile_surname_th', $this->input->post('year_name_scholarship'), 'match');
		$this->db->or_like('profile_name_en', $this->input->post('year_name_scholarship'), 'match');
		$this->db->or_like('profile_surname_en', $this->input->post('year_name_scholarship'), 'match');
		$query = $this->db->get('ci_profile');

		return $query->result();
	}

	public function getUpcomingEvent($per_page, $offset) {
		$this->db->order_by('alumni_activity_id', 'desc');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('ci_alumni_activity');

		return $query->result();
	}

	public function getUpcomingEventAll() {
		$this->db->order_by('alumni_activity_id', 'desc');
		$query = $this->db->get('ci_alumni_activity');

		return $query->result();
	}

	public function getUpComingEventRow($alumni_activity_id) {
		$this->db->where('alumni_activity_id', $alumni_activity_id);
		$query = $this->db->get('ci_alumni_activity');

		return $query->row();
	}

	public function getSouvenirCP() {
		$this->db->where('souvenir_shop_type', 'สั่งซื้อเสื้อโปโลโครงการทุน');
		$query = $this->db->get('ci_souvenir_shop');

		return $query->result();
	}

	public function getSouvenirSchrolar() {
		$this->db->where('souvenir_shop_type', 'สั่งซื้อสินค้าผลงานนักเรียนทุน');
		$query = $this->db->get('ci_souvenir_shop');

		return $query->result();
	}

	public function getHeadPlanningYourProject() {
		$this->db->order_by('level_planning_your_project_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_level_planning_your_project');

		return $query->result();
	}

	public function getFilePlanningYourProject($level_planning_your_project_id) {
		$this->db->order_by('planning_your_project_id', 'asc');
		$this->db->where('level_planning_your_project_id', $level_planning_your_project_id);
		$query = $this->db->get('ci_planning_your_project');

		return $query->result();
	}

	public function deleteEducation() {
		$where_education = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_education', $where_education);
	}

	public function getExtraCurriculum() {
		$this->db->order_by('extra_curriculum_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_extra_curriculum');

		return $query->result();
	}

	public function deleteExtraCurriculum() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_extra_curriculum', $where);
	}

	public function getTrainingAndExperiences() {
		$this->db->order_by('training_experiences_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_training_experiences');

		return $query->result();
	}

	public function deleteTrainingExperience() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_training_experiences', $where);
	}

	public function getCertificate() {
		$this->db->order_by('certificate_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_certificate');

		return $query->result();
	}

	public function deleteCertificate() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_certificate', $where);
	}

	public function getStandardizedTests() {
		$this->db->order_by('standardized_tests_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_standardized_tests');

		return $query->result();
	}

	public function deleteStandardTest() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_standardized_tests', $where);
	}

	public function getActiveParticipation() {
		$this->db->order_by('active_participation_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_active_participation');

		return $query->result();
	}

	public function deleteActiveParticipation() {
		$where = array(
			'profile_id' => $this->session->userdata('profile_id')
		);

		$this->db->delete('ci_active_participation', $where);
	}

	public function getMyMessage($webboard_id) {
		//$this->db->where('ci_profile.profile_id', $this->session->userdata('profile_id'));
		//$this->db->join('ci_profile', 'ci_my_message.profile_id = ci_profile.profile_id', 'inner');
		$this->db->order_by('ci_my_message.my_message_id', 'asc');
		$this->db->where('ci_my_message.webboard_id', $webboard_id);
		$query = $this->db->get('ci_my_message');

		return $query->result();
	}

	public function getProfileRow($profile_id) {
		$this->db->where('profile_id', $profile_id);
		$query = $this->db->get('ci_profile');

		return $query->row();
	}

	public function getUserRow($user_id) {
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user');

		return $query->row();
	}

	public function getPhotoGallery() {
		$this->db->order_by('photo_gallery_id', 'asc');
		$query = $this->db->get('ci_photo_gallery');

		return $query->result();
	}

	public function getProfileUpdate($per_page, $offset) {
		$this->db->order_by('profile_update_id', 'asc');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('ci_profile_update');

		return $query->result();
	}

	public function getProfileUpdateAll() {
		$this->db->order_by('profile_update_id', 'asc');
		$query = $this->db->get('ci_profile_update');

		return $query->result();
	}

	public function getProfileUpdateRow($profile_update_id) {
		$this->db->where('profile_update_id', $profile_update_id);
		$query = $this->db->get('ci_profile_update');

		return $query->row();
	}

	public function getChat() {
		$this->db->order_by('chat_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id'));
		$query = $this->db->get('ci_chat');

		return $query->result();
	}

	public function getAward() {
		$this->db->order_by('award_id', 'asc');
		$this->db->where('profile_id', $this->session->userdata('profile_id')); 
		$query = $this->db->get('ci_award');
		
		return $query->result();
	}
}