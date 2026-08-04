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
                <h2>My Study</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3>เกรดเฉลี่ย</h3>
                </div>
                <div class="my-study-list">
                    <span>ชื่อผู้รับทุน</span> <?php if(!empty($profile)) echo $profile->profile_name_th.' '.$profile->profile_surname_th;?>
                </div>
                <div class="my-study-list">
                    <span>สถาบันการศึกษา</span> <?php if(!empty($profile)) echo $profile->profile_institute;?>
                </div>
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th>ปีที่รับทุน</th>
                                <th>ชั้นปีที่เรียน</th>
                                <th>ภาคเรียน</th>
                                <th>GPA</th>
                                <th>Upload <br>Transcript</th>
                                <th>GPAX</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
if(!empty($study)) {
    foreach($study as $r) {
?>
                            <tr id="study_<?php echo $r->study_id;?>">
                                <th><?php echo $r->study_year;?></th>
                                <td><?php echo $r->study_level;?></td>
                                <td><?php echo $r->study_term;?></td>
                                <td><?php echo $r->study_gpa;?></td>
                                <td><span class="completed">Completed</span></td>
                                <td><?php echo $r->study_gpax;?></td>
                                <td>
                                    <a href="#mystudy-add" title="แก้ไข" data-fancybox class="button-table" onclick="editStudy('<?php echo $r->study_id;?>');"><i class="fas fa-edit"></i></a>
                                    <button title="ลบ" class="button-table" onclick="confirmDelete('<?php echo $r->study_id;?>');"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
<?php
    }
}
?>
                            <!-- <tr>
                                <th></th>
                                <td></td>
                                <td>2</td>
                                <td>3.55</td>
                                <td><span class="failed">Failed</span></td>
                                <td>3.62</td>
                                <td>
                                    <a href="#mystudy-add" title="แก้ไข" data-fancybox class="button-table"><i class="fas fa-edit"></i></a>
                                    <button title="ลบ" class="button-table"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                                <td>Summer</td>
                                <td>3.55</td>
                                <td><div class="button-upload-file"><i class="fas fa-upload"></i>UPLOAD<input type="file" class="upload-file-input"></div></td>
                                <td>3.62</td>
                                <td>
                                    <a href="#mystudy-add" title="แก้ไข" data-fancybox class="button-table"><i class="fas fa-edit"></i></a>
                                    <button title="ลบ" class="button-table"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <a href="#mystudy-add" data-fancybox class="my-study-add"><i class="fas fa-plus"></i>เพิ่มเกรดเฉลี่ย</a>
                <div class="my-study-popup" id="mystudy-add">
                    <div class="my-study-popup-container">
                        <div class="row">
                            <div class="col-12 scls-subhead">
                                <h3>เพิ่มเกรดเฉลี่ย</h3>
                            </div>
                        </div>
                        <form action="<?php echo site_url('scholarship_my_study');?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-6 profile-form">
                                <label>ปีที่รับทุน</label>
                                <input type="text" name="study_year" id="study_year">
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>ชั้นปีที่เรียน</label>
                                <input type="text" name="study_level" id="study_level">
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>ภาคเรียน</label>
                                <input type="text" name="study_term" id="study_term">
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>GPA</label>
                                <input type="text" name="study_gpa" id="study_gpa">
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>Upload Transcript</label>
                                <input type="file" name="study_transcript_image">
                                <span id="study_transcript_image"></span>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>GPAX</label>
                                <input type="text" name="study_gpax" id="study_gpax">
                            </div>
                            <div class="col-12 profile-form-button-wrap">
                                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit" value="บันทึก" class="profile-form-button profile-form-button-save">
                                <input type="hidden" name="study_id" id="study_id">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3>ปฏิทินการศึกษา</h3>
                </div>
                <div class="my-study-list">
                    <span>ชื่อผู้รับทุน</span>  <?php if(!empty($profile)) echo $profile->profile_name_th.' '.$profile->profile_surname_th;?>
                </div>
                <div class="my-study-list">
                    <span>สถาบันการศึกษา</span>  <?php if(!empty($profile)) echo $profile->profile_institute;?>
                </div>
                <div class="my-study-table-wrap">
                    <form action="<?php echo site_url('scholarship_my_study');?>" method="post">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th>กิจกรรม</th>
                                <th>วันที่</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-left">เปิดเทอม 1</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_open1" id="calendar_study_open1" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_open1;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ลงทะเบียนเพิ่ม/ถอน</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_register1" id="calendar_study_register1" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_register1;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบกลางภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_mid_term1" id="calendar_study_exam_mid_term1" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_mid_term1;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบปลายภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_final_term1" id="calendar_study_exam_final_term1" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_final_term1;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ปิดเทอม</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_term_break1" id="calendar_study_term_break1" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_term_break1;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">เปิดเทอม 2</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_term2" id="calendar_study_term2" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_term2;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ลงทะเบียนเพิ่ม/ถอน</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_register2" id="calendar_study_register2" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_register2;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบกลางภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_mid_term2" id="calendar_study_exam_mid_term2" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_mid_term2;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบปลายภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_final_term2" id="calendar_study_exam_final_term2" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_final_term2;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ปิดเทอม</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_term_break2" id="calendar_study_term_break2" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_term_break2;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">เปิดเทอม 3</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_open3" id="calendar_study_open3" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_open3;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ลงทะเบียนเพิ่ม/ถอน</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_register3" id="calendar_study_register3" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_register3;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบกลางภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_mid_term3" id="calendar_study_exam_mid_term3" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_mid_term3;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">สอบปลายภาค</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_exam_final_term3" id="calendar_study_exam_final_term3" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_exam_final_term3;?>">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-left">ปิดเทอม</th>
                                <td>
                                    <div class="profile-form">
                                        <input type="text" name="calendar_study_term_break3" id="calendar_study_term_break3" class="datepicker" placeholder="เลือกวันที่" value="<?php if(!empty($row)) echo $row->calendar_study_term_break3;?>">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="profile-form-button-wrap">
                    <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit_calendar" value="บันทึก" class="profile-form-button profile-form-button-save">
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(1)').addClass('active');
    $('.scls-menu>ul>li:nth-child(1) .submenu li:nth-child(3)').addClass('active');
});  

function editStudy(study_id) {
    $.post('<?php echo site_url('frontend/path/ajaxStudy');?>', { study_id: study_id }, function(data) {
        var data_split = data.split('!@#$%^&*()_+');

        $("#study_year").val(data_split[0]);
        $("#study_level").val(data_split[1]);
        $("#study_term").val(data_split[2]);
        $("#study_gpa").val(data_split[3]);
        $("#study_transcript_image").html('<a href="<?php echo site_url('uploads/study/');?>' + data_split[4] + '" target="_blank"><img src="<?php echo site_url('uploads/study/');?>' + data_split[4] + '" width="100"></a>');
        $("#study_gpax").val(data_split[5]);
    });
}

function confirmDelete(study_id) {
    if(confirm("Confirm Delete") == true) {
        $.post('<?php echo site_url('frontend/path/ajaxDeleteStudy');?>', { study_id: study_id }, function(data) {
            $("#study_" + study_id).hide();
        });
    }
}
</script>
</body>
</html>