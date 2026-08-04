<!doctype html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</title>
<?php require('inc_header.php'); ?>
</head>
<body class="scholarship-bg">
  <?php require('inc_menu.php'); ?>
  <section class="container-fluid wow fadeInDown">
  <?php require('inc_menu_scholarship.php'); ?>
    <form class="container scls-bg-container" action="<?php echo site_url('frontend/path/scholarship_my_profile');?>" method="post" id="myform" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My profile</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 profile-cover-wrap">
<?php 
for($j = 1; $j <= 4; $j++) {
    if(!empty($row)) {
        $profile = 'profile_image'.$j;
        $profile_image = $row->$profile;
    }
?>
                <a href="#upload-img0<?php echo $j;?>" data-fancybox class="profile-cover profile_cover_image_<?php echo $j;?>">
<?php 
    if(!empty($row) and $profile_image != '') {
?>
                    <img src="<?php echo base_url('uploads/profile/'.$profile_image);?>" alt="">
<?php
    } else {
?>
                    <div class="profile-cover-empty">
                        <img src="<?php echo base_url('asset/frontend/images/icon-portrait.svg');?>" alt="">
<?php
        if($j == 1) {
?>
                        <span>1st Year picture</span>
<?php
        } elseif($j == 2) {
?>
                        <span>2nd Year picture</span>
<?php           
        } elseif($j == 3) {
?>
                        <span>3rd Year picture</span>
<?php           
        } elseif($j == 4) {
?>
                        <span>Recent picture</span>
<?php           
        }
?>
                    </div>
<?php
    }
?>
                    
                </a>
                
                <div class="cover-popup" id="upload-img0<?php echo $j;?>">
                    <h6>รูปภาพ</h6>
                    <div class="profile-form-chat-img profile_img_<?php echo $j;?>">
<?php 
    if(!empty($row) and $profile_image != '') {
?>
                        <img src="<?php echo base_url('uploads/profile/'.$profile_image);?>" alt="">
<?php
    } else {
?>
                        <input type="file" name="profile_image<?php echo $j;?>" id="profile_image<?php echo $j;?>">
                        <span><i class="fas fa-camera"></i>รูปภาพ</span>
<?php
    }
?>
                    </div>
                    <button class="profile-form-chat-btn" onclick="deleteImageProfile('<?php echo $j;?>');"><i class="fas fa-trash-alt"></i>ลบรูปภาพ</button>
                    <div class="profile-form-button-wrap">
                        <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button>
                        <input rel="<?php echo $j;?>" type="button" name="submit_image_profile<?php echo $j;?>" class="btnsave profile-form-button profile-form-button-save" value="บันทึก">
                    </div>

                </div>
<?php
}
                /*
                <a href="#upload-img02" data-fancybox class="profile-cover">
<?php 
if(!empty($row) and $row->profile_image2 != '') {
?>
                    <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                    <div class="profile-cover-empty">
                        <img src="<?php echo base_url('asset/frontend/images/icon-portrait.svg');?>" alt="">
                        <span>2nd Year picture</span>
                    </div>
<?php
}
?>
                </a>
                <div class="cover-popup" id="upload-img02">
                    <h6>รูปภาพ</h6>
                    <div class="profile-form-chat-img">
<?php 
if(!empty($row) and $row->profile_image2 != '') {
?>
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                        <input type="file" name="profile_image2" id="profile_image2">
                        <span><i class="fas fa-camera"></i>รูปภาพ</span>
<?php
}
?>
                    </div>
                    <button class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบรูปภาพ</button>
                    <div class="profile-form-button-wrap">
                        <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button>
                        <button class="profile-form-button profile-form-button-save">บันทึก</button>
                    </div>
                </div>

                <a href="#upload-img03" data-fancybox class="profile-cover">
<?php 
if(!empty($row) and $row->profile_image3 != '') {
?>
                    <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                    <div class="profile-cover-empty">
                        <img src="<?php echo base_url('asset/frontend/images/icon-portrait.svg');?>" alt="">
                        <span>3rd Year picture</span>
                    </div>
<?php
}
?>
                </a>
                <div class="cover-popup" id="upload-img03">
                    <h6>รูปภาพ</h6>
                    <div class="profile-form-chat-img">
<?php 
if(!empty($row) and $row->profile_image3 != '') {
?>
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                        <input type="file" name="profile_image3" id="profile_image3">
                        <span><i class="fas fa-camera"></i>รูปภาพ</span>
<?php
}
?>
                    </div>
                    <button class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบรูปภาพ</button>
                    <div class="profile-form-button-wrap">
                        <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button>
                        <button class="profile-form-button profile-form-button-save">บันทึก</button>
                    </div>
                </div>

                <a href="#upload-img04" data-fancybox class="profile-cover">
<?php 
if(!empty($row) and $row->profile_image4 != '') {
?>
                    <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                    <div class="profile-cover-empty">
                        <img src="<?php echo base_url('asset/frontend/images/icon-portrait.svg');?>" alt="">
                        <span>Recent picture</span>
                    </div>
<?php
}
?>
                </a>
                <div class="cover-popup" id="upload-img04">
                    <h6>รูปภาพ</h6>
                    <div class="profile-form-chat-img">
<?php 
if(!empty($row) and $row->profile_image4 != '') {
?>
                        <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
<?php
} else {
?>
                        <input type="file" name="profile_image4" id="profile_image4">
                        <span><i class="fas fa-camera"></i>รูปภาพ</span>
<?php
}
?>
                    </div>
                    <button class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบรูปภาพ</button>
                    <div class="profile-form-button-wrap">
                        <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button>
                        <button class="profile-form-button profile-form-button-save">บันทึก</button>
                    </div>
                </div>
                */
?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 profile-form">
                <label>Name (THA)</label>
                <input type="text" name="profile_name_th" id="profile_name_th" value="<?php if(!empty($row)) echo $row->profile_name_th.' '.$row->profile_surname_th;?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Name (ENG)</label>
                <input type="text" name="profile_name_en" id="profile_name_en" value="<?php if(!empty($row)) echo $row->profile_name_en.' '.$row->profile_surname_en;?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Name (CHN)</label>
                <input type="text" name="profile_name_ch" id="profile_name_ch" value="<?php if(!empty($row)) echo $row->profile_name_ch.' '.$row->profile_surname_ch;?>">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 profile-form">
                <label>Email (Business)</label>
                <input type="text" name="profile_email_business" id="profile_email_business" value="<?php if(!empty($row)) echo $row->profile_email_business;?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Email (Personal)</label>
                <input type="text" name="profile_email_personal" id="profile_email_personal" value="<?php if(!empty($row)) echo $row->profile_email_personal;?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Mobile</label>
                <input type="text" name="profile_mobile" id="profile_mobile" value="<?php if(!empty($row)) echo $row->profile_mobile;?>">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 profile-form">
                <label>Date of Birth</label>
                <input type="text" name="profile_date_of_birth" id="profile_date_of_birth" class="datepicker" value="<?php if(!empty($row)) echo date2Date($row->profile_date_of_birth);?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Weight(Kg)</label>
                <input type="text" name="profile_weight" id="profile_weight" value="<?php if(!empty($row)) echo $row->profile_weight;?>">
            </div>
            <div class="col-12 col-md-4 profile-form">
                <label>Height(cm)</label>
                <input type="text" name="profile_height" id="profile_height" value="<?php if(!empty($row)) echo $row->profile_height;?>">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 profile-form">
                <label>Address (THA)</label>
                <textarea rows="3" name="profile_address_th" id="profile_address_th"><?php if(!empty($row)) echo $row->profile_address_th;?></textarea>
            </div>
            <div class="col-12 col-md-6 profile-form">
                <label>Address (ENG)</label>
                <textarea rows="3" name="profile_address_en" id="profile_address_en"><?php if(!empty($row)) echo $row->profile_address_en;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>Chat</label>
            </div>
            <div class="col-12 profile-form-chat-wrap">
                <div class="row">
                    <span class="chat">
<?php
$o = 0;
if(!empty($chat)) {
    foreach($chat as $r) {
?>
                    <div class="col-12 col-md-4 profile-form-chat chat_<?php echo $o;?>">
                        <div class="profile-form-chat-img chat_image_<?php echo $o;?>">
                            <img src="<?php echo base_url('uploads/profile/'.$r->chat_qr_code_image);?>" alt="">
                        </div>
                        <div class="profile-form-chat-text">
                            <div class="profile-form">
                                <label>Application</label>
                                <input type="text" id="chat_application_<?php echo $o;?>" value="<?php echo $r->chat_application;?>">
                                <input type="hidden" id="image_chat_<?php echo $o;?>">
                            </div>
                            <button class="profile-form-chat-btn" type="button" onclick="deleteChat('<?php echo $o;?>', '<?php echo $r->chat_id;?>');"><i class="fas fa-trash-alt"></i>ลบ</button>
                            <button class="profile-education-btnadd saveqr_codeimage" rel="<?php echo $o;?>" type="button" class="btnSave" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button>
                        </div>
                    </div>
<?php
        $o++;
    }
} else {
?>
                    <div class="col-12 col-md-4 profile-form-chat chat_0">
                        <div class="profile-form-chat-img chat_image_0">
                            <input type="file" id="chat_qr_code_image_0" rel="0" class="chat_qr_code_image">
                            <span><i class="fas fa-plus"></i>QR Code</span>
                        </div>
                        <div class="profile-form-chat-text">
                            <div class="profile-form">
                                <label>Application</label>
                                <input type="text" id="chat_application_0">
                                <input type="hidden" id="image_chat_0">
                            </div>
                            <button class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button>
                            <button class="profile-education-btnadd saveqr_codeimage" rel="<?php echo $o;?>" type="button" class="btnSave" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button>
                        </div>
                    </div>
<?php
}
?>
                    </span>
                </div>
                <div class="row">
                    <div class="col-12"><button type="button" onclick="addChat();" class="profile-education-btnadd"><i class="fas fa-plus"></i>เพิ่ม Application</button></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 scls-subhead">
                        <h3>About me</h3>
                    </div>
                    <div class="col-12 profile-form">
                        <label>My ambition</label>
                        <input type="text" name="profile_my_ambition" id="profile_my_ambition" value="<?php if(!empty($row)) echo $row->profile_my_ambition;?>">
                    </div>
                    <div class="col-12 profile-form">
                        <label>My Goals</label>
                        <input type="text" name="profile_my_goals" id="profile_my_goals" value="<?php if(!empty($row)) echo $row->profile_my_goals;?>">
                    </div>
                    <div class="col-12 profile-form">
                        <label>My Expectation</label>
                        <input type="text" name="profile_my_expectation" id="profile_my_expectation" value="<?php if(!empty($row)) echo $row->profile_my_expectation;?>">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 scls-subhead">
                        <h3>Feilds of Interests</h3>
                    </div>
                    <div class="col-12 profile-form">
                        <label>1.</label>
                        <input type="text" name="profile_feilds_of_interests1" id="profile_feilds_of_interests1" value="<?php if(!empty($row)) echo $row->profile_feilds_of_interests1;?>">
                    </div>
                    <div class="col-12 profile-form">
                        <label>2.</label>
                        <input type="text" name="profile_feilds_of_interests2" id="profile_feilds_of_interests2" value="<?php if(!empty($row)) echo $row->profile_feilds_of_interests2;?>">
                    </div>
                    <div class="col-12 profile-form">
                        <label>3.</label>
                        <input type="text" name="profile_feilds_of_interests3" id="profile_feilds_of_interests3" value="<?php if(!empty($row)) echo $row->profile_feilds_of_interests3;?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Education</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_education">
<?php
$i = 0;
if(!empty($education)) {
    foreach($education as $r) {
?>
            <div class="row education_<?php echo $i;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานศึกษา</label>
                    <input type="text" name="education_institute[]" id="education_institute" value="<?php echo $r->education_institute;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระดับการศึกษา</label>
                    <input type="text" name="education_level[]" id="education_level" value="<?php echo $r->education_level;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีการศึกษา</label>
                    <input type="text" name="education_year[]" id="education_year" value="<?php echo $r->education_year;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteEducation('<?php echo $i;?>', '<?php echo $r->education_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $i++;
    }
} else {
?>
            <div class="row education_0">
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานศึกษา</label>
                    <input type="text" name="education_institute[]" id="education_institute">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระดับการศึกษา</label>
                    <input type="text" name="education_level[]" id="education_level">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีการศึกษา</label>
                    <input type="text" name="education_year[]" id="education_year">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addEducation();"><i class="fas fa-plus"></i>เพิ่มสถานศึกษา</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Extra-curriculum</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_addition_course">
<?php
if(!empty($extra_curriculum)) {
    $j = 1;
    foreach($extra_curriculum as $r) {
?>
            <div class="row course_<?php echo $j;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>หลักสูตรเสริม</label>
                    <input type="text" name="extra_curriculum_course[]" id="extra_curriculum_course" value="<?php echo $r->extra_curriculum_course;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานศึกษา</label>
                    <input type="text" name="extra_curriculum_institute[]" id="extra_curriculum_institute" value="<?php echo $r->extra_curriculum_institute;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระยะเวลา</label>
                    <input type="text" name="extra_curriculum_period[]" id="extra_curriculum_period" value="<?php echo $r->extra_curriculum_period;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteCourse('<?php echo $j;?>', '<?php echo $r->extra_curriculum_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $j++;
    }
} else {
?>
            <div class="row">
                <div class="col-12 col-md-4 profile-form">
                    <label>หลักสูตรเสริม</label>
                    <input type="text" name="extra_curriculum_course[]" id="extra_curriculum_course">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานศึกษา</label>
                    <input type="text" name="extra_curriculum_institute[]" id="extra_curriculum_institute">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระยะเวลา</label>
                    <input type="text" name="extra_curriculum_period[]" id="extra_curriculum_period">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php   
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addCourse();"><i class="fas fa-plus"></i>เพิ่มหลักสูตรเสริม</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Training & Experiences</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_training">
<?php
if(!empty($training_experience)) {
    $k = 1;
    foreach($training_experience as $r) {
?>
            <div class="row training_experience_<?php echo $k;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>การฝึกอบรม</label>
                    <input type="text" name="training_experiences_trainning[]" id="training_experiences_trainning" value="<?php echo $r->training_experiences_trainning;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="training_experiences_place[]" id="training_experiences_place" value="<?php echo $r->training_experiences_place;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระยะเวลา</label>
                    <input type="text" name="training_experiences_period[]" id="training_experiences_period" value="<?php echo $r->training_experiences_period;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteTrainingExperience('<?php echo $k;?>', '<?php echo $r->training_experiences_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $k++;
    }
} else {
?>
            <div class="row">
                <div class="col-12 col-md-4 profile-form">
                    <label>การฝึกอบรม</label>
                    <input type="text" name="training_experiences_trainning[]" id="training_experiences_trainning">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="training_experiences_place[]" id="training_experiences_place">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ระยะเวลา</label>
                    <input type="text" name="training_experiences_period[]" id="training_experiences_period">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addTrainingExperience();"><i class="fas fa-plus"></i>เพิ่มการฝึกอบรม</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Certificate</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_certificate">
<?php
if(!empty($certificate)) {
    $l = 1;
    foreach($certificate as $r) {
?>
            <div class="row certificate_<?php echo $l;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>ใบรับรอง</label>
                    <input type="text" name="certificate_name[]" id="certificate_name" value="<?php echo $r->certificate_name;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="certificate_place[]" id="certificate_place" value="<?php echo $r->certificate_place;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีที่ได้รับ</label>
                    <input type="text" name="certificate_date[]" id="certificate_date" class="certificate_date" value="<?php echo $r->certificate_date;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteCertificate('<?php echo $l;?>', '<?php echo $r->certificate_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $l++;
    }
} else {
?>
            <div class="row">
                <div class="col-12 col-md-4 profile-form">
                    <label>ใบรับรอง</label>
                    <input type="text" name="certificate_name[]" id="certificate_name">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="certificate_place[]" id="certificate_place">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีที่ได้รับ</label>
                    <input type="text" name="certificate_date[]" id="certificate_date" class="certificate_date">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addCertificate();"><i class="fas fa-plus"></i>เพิ่มใบรับรอง</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Standardized tests</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_standard_test">
<?php
if(!empty($standard_test)) {
    $m = 1;
    foreach($standard_test as $r) {
?>
            <div class="row standard_test_<?php echo $m;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>การทดสอบ</label>
                    <input type="text" name="standardized_tests_name[]" id="standardized_tests_name" value="<?php echo $r->standardized_tests_name;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="standardized_tests_place[]" id="standardized_tests_place" value="<?php echo $r->standardized_tests_place;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีที่ได้รับ</label>
                    <input type="text" name="standardized_tests_date[]" id="standardized_tests_date" value="<?php echo $r->standardized_tests_date;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteStandardTest('<?php echo $m;?>', '<?php echo $r->standardized_tests_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $m++;
    }
} else {
?>
            <div class="row">
                <div class="col-12 col-md-4 profile-form">
                    <label>การทดสอบ</label>
                    <input type="text" name="standardized_tests_name[]" id="standardized_tests_name">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="standardized_tests_place[]" id="standardized_tests_place">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>ปีที่ได้รับ</label>
                    <input type="text" name="standardized_tests_date[]" id="standardized_tests_date">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addStandardTest();"><i class="fas fa-plus"></i>เพิ่มการทดสอบ</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Active participation</h3>
            </div>
        </div>
        <div class="profile-education">
            <span class="span_active_partipication">
<?php
if(!empty($active)) {
    $n = 1;
    foreach($active as $r) {
?>
            <div class="row active_<?php echo $n;?>">
                <div class="col-12 col-md-4 profile-form">
                    <label>การมีส่วนร่วม</label>
                    <input type="text" name="active_participation_name[]" id="active_participation_name" value="<?php echo $r->active_participation_name;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="active_participation_place[]" id="active_participation_place" value="<?php echo $r->active_participation_place;?>">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label><!-- วันที่ -->ปี</label>
                    <input type="text" name="active_participation_date[]" id="active_participation_date" value="<?php echo $r->active_participation_date;?>">
                </div>
                <div class="col-12"><button type="button" onclick="deleteActive('<?php echo $n;?>', '<?php echo $r->active_participation_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
        $n++;
    }
} else {
?>
            <div class="row">
                <div class="col-12 col-md-4 profile-form">
                    <label>การมีส่วนร่วม</label>
                    <input type="text" name="active_participation_name[]" id="active_participation_name">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label>สถานที่</label>
                    <input type="text" name="active_participation_place[]" id="active_participation_place">
                </div>
                <div class="col-12 col-md-4 profile-form">
                    <label><!-- วันที่ -->ปี</label>
                    <input type="text" name="active_participation_date[]" id="active_participation_date">
                </div>
                <div class="col-12"><button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div>
            </div>
<?php
}
?>
            </span>
            <button class="profile-education-btnadd" onclick="addActivePartipication();"><i class="fas fa-plus"></i>เพิ่มการมีส่วนร่วม</button>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Award</h3>
            </div>
            <div class="col-12 profile-form-chat-wrap">
                <div class="row">
                    <span id="span_award">
<?php
$p = 0;
if(!empty($award)) {
    foreach($award as $r) {
?>
                    <div class="col-12 col-md-4 profile-form-chat award_<?php echo $p;?>">
                        <div class="profile-form-chat-img award_img_<?php echo $p;?>">
                            <img src="<?php echo base_url('uploads/profile/'.$r->award_image);?>" alt="">
                        </div>
                        <div class="profile-form-chat-text">
                            <div class="profile-form">
                                <label>ชื่อรางวัล</label>
                                <input type="text" value="<?php echo $r->award_name;?>">
                            </div>
                            <button type="button" type="button" onclick="deleteAward('<?php echo $p;?>', '<?php echo $r->award_id;?>');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button>
                            <button class="profile-education-btnadd btn_save_award" rel="<?php echo $p;?>" type="button" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button>
                        </div>
                    </div>
<?php
        $p++;
    }
} else {
?>
                    <div class="col-12 col-md-4 profile-form-chat award_0">
                        <div class="profile-form-chat-img award_img_0">
                            <input type="file" id="award_image_0" class="change_award_image" rel="0">
                            <span><i class="fas fa-plus"></i>รูปรางวัล</span>
                        </div>
                        <div class="profile-form-chat-text">
                            <div class="profile-form">
                                <label>ชื่อรางวัล</label>
                                <input type="text" id="award_name_0">
                                <input type="hidden" id="award_image_hidden_0">
                            </div>
                            <button type="button" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button>
                            <button class="profile-education-btnadd btn_save_award" rel="0" type="button" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button>
                        </div>
                    </div>
<?php
}
?>
                    </span>
                </div>
                <div class="row">
                    <div class="col-12"><button type="button" onclick="addAward();" class="profile-education-btnadd"><i class="fas fa-plus"></i>เพิ่มรางวัล</button></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>


  </section>



  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(1)').addClass('active');
    $('.scls-menu>ul>li:nth-child(1) .submenu li:nth-child(1)').addClass('active');
});

<?php
if(empty($i)) {
    $i = 1; 
}
?>
var i = '<?php echo $i;?>';
function addEducation() {
    $('<div class="row education_' + i + '"><div class="col-12 col-md-4 profile-form"><label>สถานศึกษา</label><input type="text" name="education_institute[]" id="education_institute"></div><div class="col-12 col-md-4 profile-form"><label>ระดับการศึกษา</label><input type="text" name="education_level[]" id="education_level"></div><div class="col-12 col-md-4 profile-form"><label>ปีการศึกษา</label><input type="text" name="education_year[]" id="education_year"></div><div class="col-12"><button type="button" class="profile-form-chat-btn" onclick="deleteEducation(' + i + ');"><i class="fas fa-trash-alt"></i>ลบ</button></div></div>').clone().appendTo(".span_education");

    //alert(i);

    i++;

    event.preventDefault();
}

function deleteEducation(ii, education_id = '') {
    if(education_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteEducation');?>', { education_id: education_id }, function(data) {
                $(".education_" + ii).remove();
            });
        }
    } else {
        $(".education_" + ii).remove();
    }
    
}

<?php
if(empty($j)) {
    $j = 1; 
}
?>
var j = '<?php echo $j;?>';
function addCourse() {
    $('<div class="row course_' + j + '"><div class="col-12 col-md-4 profile-form"><label>หลักสูตรเสริม</label><input type="text" name="extra_curriculum_course[]" id="extra_curriculum_course"></div><div class="col-12 col-md-4 profile-form"><label>สถานศึกษา</label><input type="text" name="extra_curriculum_institute[]" id="extra_curriculum_institute"></div><div class="col-12 col-md-4 profile-form"><label>ระยะเวลา</label><input type="text" name="extra_curriculum_period[]" id="extra_curriculum_period"></div><div class="col-12"><button type="button" onclick="deleteCourse(' + j + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div></div>').clone().appendTo(".span_addition_course");

    j++;

    event.preventDefault();
}

function deleteCourse(jj, course_id = '') {
    if(course_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteCourse');?>', { course_id: course_id }, function(data) {
                $(".course_" + jj).remove();
            });
        }
    } else {
        $(".course_" + jj).remove();
    }
}

<?php
if(empty($k)) {
    $k = 1; 
}
?>
var k = '<?php echo $k;?>';
function addTrainingExperience() {
    $('<div class="row training_experience_' + k + '"><div class="col-12 col-md-4 profile-form"><label>การฝึกอบรม</label><input type="text" name="training_experiences_trainning[]" id="training_experiences_trainning"></div><div class="col-12 col-md-4 profile-form"><label>สถานที่</label><input type="text" name="training_experiences_place[]" id="training_experiences_place"></div><div class="col-12 col-md-4 profile-form"><label>ระยะเวลา</label><input type="text" name="training_experiences_period[]" id="training_experiences_period"></div><div class="col-12"><button type="button" onclick="deleteTrainingExperience(' + k + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div></div').clone().appendTo(".span_training");

    k++;

    event.preventDefault();
}

function deleteTrainingExperience(kk, training_experiences_id = '') {
    if(training_experiences_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteTrainingExperience');?>', { training_experiences_id: training_experiences_id }, function(data) {
                $(".training_experience_" + kk).remove();
            });
        }
    } else {
        $(".training_experience_" + kk).remove();
    }
}

<?php
if(empty($l)) {
    $l = 1; 
}
?>
var l = '<?php echo $l;?>';
function addCertificate() {
    $('<div class="row certificate_' + l + '"><div class="col-12 col-md-4 profile-form"><label>ใบรับรอง</label><input type="text" name="certificate_name[]" id="certificate_name"></div><div class="col-12 col-md-4 profile-form"><label>สถานที่</label><input type="text" name="certificate_place[]" id="certificate_place"></div><div class="col-12 col-md-4 profile-form"><label>ปีที่ได้รับ</label><input type="text" name="certificate_date[]" id="certificate_date" class="certificate_date"></div><div class="col-12"><button type="button" onclick="deleteCertificate(' + l + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div></div>').clone().appendTo(".span_certificate");

    //$(".certificate_date").datepicker({ dateFormat: 'yy-mm-dd' });

    l++;

    event.preventDefault();
}

function deleteCertificate(ll, certificate_id) {
    if(certificate_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteCertificate');?>', { certificate_id: certificate_id }, function(data) {
                $(".certificate_" + ll).remove();
            });
        }
    } else {
        $(".certificate_" + ll).remove();
    }
}

<?php
if(empty($m)) {
    $m = 1; 
}
?>
var m = '<?php echo $m;?>';
function addStandardTest() {
    $('<div class="row standard_test_' + m + '"><div class="col-12 col-md-4 profile-form"><label>การทดสอบ</label><input type="text" name="standardized_tests_name[]" id="standardized_tests_name"></div><div class="col-12 col-md-4 profile-form"><label>สถานที่</label><input type="text" name="standardized_tests_place[]" id="standardized_tests_place"></div><div class="col-12 col-md-4 profile-form"><label>ปีที่ได้รับ</label><input type="text" name="standardized_tests_date[]" id="standardized_tests_date"></div><div class="col-12"><button type="button" onclick="deleteStandardTest(' + m + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div></div>').clone().appendTo(".span_standard_test");

    m++;

    event.preventDefault();
}

function deleteStandardTest(mm, standardized_tests_id) {
    if(standardized_tests_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteStandardTest');?>', { standardized_tests_id: standardized_tests_id }, function(data) {
                $(".standard_test_" + mm).remove();
            });
        }
    } else {
        $(".standard_test_" + mm).remove();
    }
    
}

<?php
if(empty($n)) {
    $n = 1; 
}
?>
var n = '<?php echo $n;?>';
function addActivePartipication() {
    $('<div class="row active_' + n + '"><div class="col-12 col-md-4 profile-form"><label>การมีส่วนร่วม</label><input type="text" name="active_participation_name[]" id="active_participation_name"></div><div class="col-12 col-md-4 profile-form"><label>สถานที่</label><input type="text" name="active_participation_place[]" id="active_participation_place"></div><div class="col-12 col-md-4 profile-form"><label>ปี</label><input type="text" name="active_participation_date[]" id="active_participation_date"></div><div class="col-12"><button type="button" onclick="deleteActive(' + n + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button></div></div>').clone().appendTo(".span_active_partipication");

    n++;

    event.preventDefault();
}

function deleteActive(nn, active_participation_id) {
    if(active_participation_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteActive');?>', { active_participation_id: active_participation_id }, function(data) {
                $(".active_" + nn).remove();
            });
        }
    } else {
        $(".active_" + nn).remove();
    }
}

// ajax upload image file
var rel = '';
var val = '';

$(document).on('click', '.btnsave', function() {
    rel = $(this).attr('rel');
    uploadImage($('#profile_image' + rel), rel);
});

function uploadImage(event, id) {
    var imageUrl = '';
    var htmlText = '';
    var file_data = event.prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('id', id);
    $.ajax({
        type:'POST',
        url: '<?php echo site_url("frontend/path/ajaxAddImageProfile");?>',
        cache:false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            console.log(data);
            
            $(".profile_img_" + id).append('<img src="' + data + '">');
            $(".profile_cover_image_" + id).append('<img src="' + data + '">');
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });
}

function deleteImageProfile(id) {
    $.post('<?php echo site_url("frontend/path/ajaxDeleteImageProfile");?>', { id: id }, function(data) {
        $(".profile_img_" + id).empty();
        $(".profile_img_" + id).append('<span><i class="fas fa-camera" aria-hidden="true"></i>รูปภาพ</span>');

        $(".profile_cover_image_" + id).empty();

        var txt = '';
        
        if(id == 1) {
            txt = '1st Year picture';
        } else if(id == 2) {
            txt = '2nd Year picture';
        } else if(id == 3) {
            txt = '3rd Year picture';
        } else if(id == 4) {
            txt = 'Recent picture';
        }

        $(".profile_cover_image_" + id).append('<img src="<?php echo base_url('asset/frontend/images/icon-portrait.svg');?>" alt=""><span>' + txt + '</span>')
    });
}
// End ajax upload image file
<?php
if(empty($o)) {
    $o = 1; 
}
?>
var o = '<?php echo $o;?>';
function addChat() {
    $('<div class="col-12 col-md-4 profile-form-chat chat_' + o + '"><div class="profile-form-chat-img chat_image_' + o + '"><input type="file" id="chat_qr_code_image_' + o + '" class="chat_qr_code_image" rel="' + o + '"><span><i class="fas fa-plus"></i>QR Code</span></div><div class="profile-form-chat-text"><div class="profile-form"><label>Application</label><input type="text" id="chat_application_' + o + '"><input type="hidden" id="image_chat_' + o + '"></div><button class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button><button class="profile-education-btnadd saveqr_codeimage" rel="' + o + '" type="button" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button></div></div>').clone().appendTo(".chat");

    o++;
}

function deleteChat(oo, chat_id = '') {
    if(chat_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteChat');?>', { chat_id: chat_id }, function(data) {
                $('.chat_' + oo).remove();
            });
        }
    } else {
        $('.chat_' + oo).remove();
    }
}

var rel1 = '';
var val1 = '';

$(document).on('change', '.chat_qr_code_image', function(data) {
    rel1 = $(this).attr('rel');

    uploadImageChat($('#chat_qr_code_image_' + rel1), rel1);

    $(".chat_qr_code_image_" + rel1).append('<img src="' + data + '">');
});

$(document).on('click', '.saveqr_codeimage', function() {
    rel1 = $(this).attr('rel');

    saveChat($('#chat_qr_code_image_' + rel1), rel1);
});

function uploadImageChat(event, id) {
    var file_data = event.prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('id', id);
    form_data.append('chat_application', $("#chat_application_" + id).val());
    $.ajax({
        type:'POST',
        url: '<?php echo site_url("frontend/path/ajaxAddImageChat");?>',
        cache:false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            // console.log(data);
            // console.log(data.file_name);
            let image = JSON.parse(data);
            console.log(image.file_name);
            //alert(id);
            $(".chat_image_" + id).append('<img src="' + image.path + '">');
            $("#image_chat_" + id).val(image.file_name);
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });
}

function saveChat(event, id) {
    var file_data = event.prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('id', id);
    form_data.append('chat_qr_code_image', $("#image_chat_" + id).val());
    form_data.append('chat_application', $("#chat_application_" + id).val());
    $.ajax({
        type:'POST',
        url: '<?php echo site_url("frontend/path/ajaxSaveImageChat");?>',
        cache:false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            console.log(data);
            
            //$(".chat_image_" + id).append('<img src="' + data + '">');
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });
}

<?php
if(empty($p)) {
    $p = 1; 
}
?>
var p = '<?php echo $p;?>';
function addAward() {
    $('<div class="col-12 col-md-4 profile-form-chat award_' + p + '"><div class="profile-form-chat-img award_img_' + p + '"><input type="file" id="award_image_' + p + '" class="change_award_image" rel="' + p + '"><span><i class="fas fa-plus"></i>รูปรางวัล</span></div><div class="profile-form-chat-text"><div class="profile-form"><label>ชื่อรางวัล</label><input type="text" id="award_name_' + p + '"><input type="hidden" id="award_image_hidden_' + p + '"></div><button type="button" onclick="deleteAward(' + p + ');" class="profile-form-chat-btn"><i class="fas fa-trash-alt"></i>ลบ</button><button class="profile-education-btnadd btn_save_award" rel="' + p + '" type="button" style="margin-left: 10px;"><i class="far fa-save"></i>บันทึก</button></div></div>').clone().appendTo("#span_award");

    p++;
}

function deleteAward(pp, award_id = '') {
    if(award_id != '') {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url('frontend/path/ajaxDeleteAward');?>', { award_id: award_id }, function(data) {
                $('.award_' + pp).remove();
            });
        }
    } else {
        $('.award_' + pp).remove();
    }
}

var rel2 = '';
var val2 = '';

$(document).on('change', '.change_award_image', function(data) {
    rel2 = $(this).attr('rel');

    uploadImageAward($('#award_image_' + rel2), rel2);

    // $(".award_img_" + rel2).append('<img src="' + data + '">');
    
});

$(document).on('click', '.btn_save_award', function() {
    rel2 = $(this).attr('rel');

    saveAward($('#award_image_' + rel2), rel2);
});

function uploadImageAward(event, id) {
    var file_data = event.prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('id', id);
    $.ajax({
        type:'POST',
        url: '<?php echo site_url("frontend/path/ajaxAddImageAward");?>',
        cache:false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            // console.log(data);
            // console.log(data.file_name);
            let award_image = JSON.parse(data);
            //console.log(award_image.file_name);
            //alert(id);
            $(".award_img_" + id).append('<img src="' + award_image.path + '">');
            $("#award_image_hidden_" + id).val(award_image.file_name);
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });
}

function saveAward(event, id) {
    var file_data = event.prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('id', id);
    form_data.append('award_image', $("#award_image_hidden_" + id).val());
    form_data.append('award_name', $("#award_name_" + id).val());
    $.ajax({
        type:'POST',
        url: '<?php echo site_url("frontend/path/ajaxSaveImageAward");?>',
        cache:false,
        contentType: false,
        processData: false,
        data: form_data,
        success:function(data){
            console.log(data);
            
            //$(".chat_image_" + id).append('<img src="' + data + '">');
        },
        error: function(data){
            console.log("error");
            console.log(data);
        }
    });
}
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
// $(function() {
//     $(".certificate_date").datepicker({ dateFormat: 'yy-mm-dd' });
// });
</script>
</body>
</html>