<?php
$row_inc = $this->model_frontend->getProfileRecord();
?>
<div class="container scls-bg-container">
    <div class="row">
        <div class="col-12 scls-profile-wrap">
            <div class="scls-profile-img">
                <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
            </div>
            <div class="scls-profile">
                <div class="scls-profile-list">
                    <span>ชื่อ</span><?php if(!empty($row_inc)) echo $row_inc->profile_name_th.' '.$row_inc->profile_surname_th;?>
                </div>
                <div class="scls-profile-list">
                    <span>อีเมล</span><?php if(!empty($row_inc)) echo $row_inc->profile_email_personal;?>
                </div>
                <div class="scls-profile-list">
                    <span>โทรศัพท์</span><?php if(!empty($row_inc)) echo $row_inc->profile_mobile;?>
                </div>
                <div class="scls-profile-list scls-profile-list-full">
                    <span>ที่อยู่</span><?php if(!empty($row_inc)) echo $row_inc->profile_address_th;?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 scls-menu">
            <ul>
                <li><a href="#">My Overview</a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('scholarship_my_profile');?>">My Profile</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_message');?>">My Message</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_study');?>">My Study</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_page_folio');?>">My Page-folio</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_page_diary');?>">My Page Diary</a></li>
                    </ul>
                </li>
                <li><a href="#">My Learning Space</a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('scholarship_my_idp');?>">My Improvement  Plan</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_course');?>">My courses</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_english_update');?>">My English update</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_training');?>">My Training</a></li>
                        <li><a href="<?php echo site_url('scholarship_my_project');?>">My Project</a></li>
                    </ul>
                </li>
                <li><a href="#">My Download</a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('scholarship_planning');?>">Planning your project</a></li>
                        <li><a href="<?php echo site_url('scholarship_form_download');?>">Form Download</a></li>
                        <li><a href="<?php echo site_url('scholarship_document_download');?>">Document download</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('scholarship_q_a');?>">Q&A</a></li>
                <li><a href="<?php echo site_url('scholarship_change_password');?>">Change Password</a></li>
                <li><a href="<?php echo site_url('frontend/path/logout');?>">Logout</a></li>
            </ul>
            <div class="button-menu-scls">
                <div class="icon-btn-menu">
                    <span></span><span></span><span></span>
                </div>
                User Menu
            </div>
        </div>
    </div>
</div>