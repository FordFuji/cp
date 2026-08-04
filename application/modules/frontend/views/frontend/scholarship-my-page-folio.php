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
  <section class="container-fluid wow fadeInDown container-height">
  <?php require('inc_menu_scholarship.php'); ?>
    <div class="container scls-bg-container">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My Page-folio</h2>
                <div class="lang-toggle">
                    <span>ภาษา</span>
                    <div class="lang-toggle-radio">
                        <label>
                            <input type="radio" name="changelang">
                            <span>TH</span>
                        </label>
                        <label>
                            <input type="radio" name="changelang" checked>
                            <span>EN</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Resume</h3>
            </div>
            <div class="col-12 pagefolio-list-container">
                <div class="pagefolio-img">
<?php
if(!empty($row) and $row->profile_image1 != '') {
?>
                    <img src="<?php echo base_url('uploads/profile/'.$row->profile_image1);?>" alt="">
<?php
}
?>
                </div>
                <div class="pagefolio-list-wrap">
                    <div class="pagefolio-list">
                        <span>Name</span>
                        <p><?php if(!empty($row)) echo $row->profile_name_th.' '.$row->profile_surname_th;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span></span>
                        <p><?php if(!empty($row)) echo $row->profile_name_en.' '.$row->profile_surname_en;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span></span>
                        <p><?php if(!empty($row)) echo $row->profile_name_ch.' '.$row->profile_surname_ch;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span>Address</span>
                        <p><?php if(!empty($row)) echo $row->profile_address_th;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span>Date of Birth</span>
                        <p><?php if(!empty($row)) echo date2TextEnFull($row->profile_date_of_birth);?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="pagefolio-list">
                    <span>Weight/Height</span>
                    <p><?php if(!empty($row)) echo $row->profile_weight;?> kg. / <?php if(!empty($row)) echo $row->profile_height;?> cm.</p>
                </div>
                <!-- <div class="pagefolio-list">
                    <span>Marital Status</span>
                    <p><?php if(!empty($row)) echo $row->profile_weight;?></p>
                </div> -->
                <div class="pagefolio-list">
                    <span>Email<span>(Business)</span></span>
                    <p><?php if(!empty($row)) echo $row->profile_email_business;?></p>
                </div>
                <div class="pagefolio-list">
                    <span>(Personal)</span>
                    <p><?php if(!empty($row)) echo $row->profile_email_personal;?></p>
                </div>
                <div class="pagefolio-list">
                    <span>Mobile</span>
                    <p><?php if(!empty($row)) echo $row->profile_mobile;?></p>
                </div>
                <div class="pagefolio-list">
                    <span>Chat</span>
                    <div class="pagefolio-link">
<?php
if(!empty($chat)) {
    foreach($chat as $r) {
?>
                        <a href="<?php echo base_url('uploads/profile/'.$r->chat_qr_code_image);?>" data-fancybox>
                            <div><img src="<?php echo base_url('uploads/profile/'.$r->chat_qr_code_image);?>" alt=""></div>
                            <span><?php echo $r->chat_application;?></span>
                        </a>
<?php
    }
}

/*
?>
                        <a href="<?php echo base_url('asset/frontend/images/qrcode.png');?>" data-fancybox>
                            <div><img src="<?php echo base_url('asset/frontend/images/qrcode.png');?>" alt=""></div>
                            <span>WeChat</span>
                        </a>
<?php
*/
?>
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Education<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-educate">
<?php
if(!empty($education)) {
    foreach($education as $r) {
?>
                        <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year"><?php echo $r->education_year;?></div><div class="pagefolio-educate-detail"><?php echo $r->education_institute;?></div>
                        </div>
<?php
    }
}
?>
                        <!-- <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year">2562</div><div class="pagefolio-educate-detail">Bachelor  - Kasetsart University</div>
                        </div> -->
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Training & Experiences<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-educate">
<?php
if(!empty($training)) {
    foreach($training as $r) {
?>
                        <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year"><?php echo $r->training_experiences_period;?></div><div class="pagefolio-educate-detail"><?php echo $r->training_experiences_trainning;?></div>
                        </div>
<?php
    }
}
?>
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Award<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-link">
<?php
if(!empty($award)) {
    foreach($award as $r) {
?>
                        <a href="<?php echo base_url('uploads/profile/'.$r->award_image);?>" data-fancybox>
                            <div><img src="<?php echo base_url('uploads/profile/'.$r->award_image);?>" alt=""></div>
                            <span><?php echo $r->award_name;?></span>
                        </a>
<?php
    }
}
?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Award<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-list">
                        <span>My ambition</span>
                        <p><?php if(!empty($row)) echo $row->profile_my_ambition;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span>My Goals</span>
                        <p><?php if(!empty($row)) echo $row->profile_my_goals;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <span>My Expectation</span>
                        <p><?php if(!empty($row)) echo $row->profile_my_expectation;?></p>
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Fields of interests<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-list">
                        <p><?php if(!empty($row)) echo $row->profile_feilds_of_interests1;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <p><?php if(!empty($row)) echo $row->profile_feilds_of_interests2;?></p>
                    </div>
                    <div class="pagefolio-list">
                        <p><?php if(!empty($row)) echo $row->profile_feilds_of_interests3;?></p>
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Certification<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-educate">
<?php
if(!empty($certification)) {
    foreach($certification as $r) {
?>
                        <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year"><?php echo $r->certificate_date;?></div><div class="pagefolio-educate-detail"><?php echo $r->certificate_name;?></div>
                        </div>
<?php
    }
}
?>
                    </div>
                </div>
                <div class="pagefolio-toggle disable">
                    <div class="scls-subhead">
                        <h3>Standardized tests<button class="button-eye"><i class="fas fa-eye-slash"></i></button></h3>
                    </div>
                    <div class="pagefolio-educate">
<?php
if(!empty($standardized_tests)) {
    foreach($standardized_tests as $r) {
?>
                        <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year"><?php echo $r->standardized_tests_date;?></div><div class="pagefolio-educate-detail"><?php echo $r->standardized_tests_name;?></div>
                        </div>
<?php
    }
}
?>
                    </div>
                </div>
                <div class="pagefolio-toggle">
                    <div class="scls-subhead">
                        <h3>Active participation<button class="button-eye"><i class="fas fa-eye"></i></button></h3>
                    </div>
                    <div class="pagefolio-educate">
<?php
if(!empty($active)) {
    foreach($active as $r) {
?>
                        <div class="pagefolio-educate-list">
                            <div class="pagefolio-educate-year"><?php echo $r->active_participation_date;?></div><div class="pagefolio-educate-detail"><?php echo $r->active_participation_name;?></div>
                        </div>
<?php
    }
}
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">Edit</button><button class="profile-form-button profile-form-button-save">Print</button>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(1)').addClass('active');
    $('.scls-menu>ul>li:nth-child(1) .submenu li:nth-child(4)').addClass('active');

    $('.button-eye').click(function(){
        if (  $( this ).children('i').hasClass( "fa-eye" ) ) {
            $(this).children('i').removeClass('fa-eye').addClass('fa-eye-slash');
            $(this).parents('.pagefolio-toggle').addClass('disable');
        } else{
            $(this).children('i').removeClass('fa-eye-slash').addClass('fa-eye');
            $(this).parents('.pagefolio-toggle').removeClass('disable');
        }
        event.stopPropagation();
    });
});    
</script>
</body>
</html>