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
                <h2>My Course</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3>Courses offer by CP Scholarship Program</h3>
                    <h4>หลักสูตรที่เรียนกับโครงการทุน</h4>
                </div>
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th rowspan="2">ชื่อหลักสูตร</th>
                                <th rowspan="2">จัดโดย</th>
                                <th colspan="4">สถานะการเรียนรู้</th>
                            </tr>
                            <tr>
                                <th><span class="ss-text">ยังไม่เริ่ม</span></th>
                                <th><span class="ss-text">ระหว่างเรียน</span></th>
                                <th><span class="ss-text">สำเร็จแล้ว</span></th>
                                <th><span class="ss-text">Download e-certificate</span></th>
                            </tr>
                        </thead>
                        <tbody>
<?php
if(!empty($rows)) {
    foreach($rows as $r) {
?>
                            <tr>
                                <th><?php echo $r->courses_offer_by_cp_name;?></th>
                                <td><?php echo $r->courses_offer_by_cp_who;?></td>
                                <td><?php if($r->courses_offer_by_cp_status == 'ยังไม่เริ่ม') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td><?php if($r->courses_offer_by_cp_status == 'ระหว่างเรียน') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td><?php if($r->courses_offer_by_cp_status == 'สำเร็จแล้ว') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td><a href="<?php echo base_url('uploads/course/'.$r->courses_offer_by_cp_certificate);?>" target="_blank" class="button-upload-file"><i class="fas fa-file-alt"></i>Download</a></td>
                            </tr>
<?php
    }
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3>Courses on demand</h3>
                    <h4>หลักสูตรที่เลือกเรียนเพิ่มเติมด้วยตนเอง</h4>
                </div>
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th rowspan="2">ชื่อหลักสูตร</th>
                                <th rowspan="2">จัดโดย</th>
                                <th colspan="5">สถานะการเรียนรู้</th>
                            </tr>
                            <tr>
                                <th><span class="ss-text">ยังไม่เริ่ม</span></th>
                                <th><span class="ss-text">ระหว่างเรียน</span></th>
                                <th><span class="ss-text">สำเร็จแล้ว</span></th>
                                <th><span class="ss-text">แนบหลักฐาน</span></th>
                                <th><span class="ss-text">Action</span></th>
                            </tr>
                        </thead>
                        <tbody>
<?php
if(!empty($course_demand)) {
    foreach($course_demand as $r) {
?>
                            <tr id="span_course_<?php echo $r->courses_on_demand_id;?>">
                                <th><?php echo $r->courses_on_demand_name;?></th>
                                <td><?php echo $r->courses_on_demand_who;?></td>
                                <td><?php if($r->courses_on_demand_status == 'ยังไม่เริ่ม') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td><?php if($r->courses_on_demand_status == 'ระหว่างเรียน') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td><?php if($r->courses_on_demand_status == 'สำเร็จแล้ว') { ?><i class="fas fa-check-circle check-symbol"></i><?php } ?></td>
                                <td>
                                    <!-- <div class="button-upload-file"><i class="fas fa-upload"></i>Upload<input type="file" class="upload-file-input"></div> -->
                                    <img src="<?php echo base_url('uploads/course/'.$r->courses_on_demand_certificate);?>" width="150">
                                </td>
                                <td>
                                    <a href="#mystudy-add" title="แก้ไข" data-fancybox class="button-table" onclick="editData('<?php echo $r->courses_on_demand_id;?>');"><i class="fas fa-edit"></i></a>
                                    <button title="ลบ" class="button-table" onclick="deleteCourseOnDemand('<?php echo $r->courses_on_demand_id;?>');"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
<?php
    }
}
?>
                        </tbody>
                    </table>
                </div>
                <a href="#mystudy-add" data-fancybox class="my-study-add"><i class="fas fa-plus"></i>เพิ่มหลักสูตร</a>
                <div class="my-study-popup" id="mystudy-add">
                    <form action="<?php echo site_url('scholarship_my_course');?>" method="post" enctype="multipart/form-data">
                    <div class="my-study-popup-container">
                        <div class="row">
                            <div class="col-12 scls-subhead">
                                <h3>เพิ่มหลักสูตร</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 profile-form">
                                <label>ชื่อหลักสูตร</label>
                                <input type="text" name="courses_on_demand_name" id="courses_on_demand_name" required>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>จัดโดย</label>
                                <input type="text" name="courses_on_demand_who" id="courses_on_demand_who" required>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>สถานะการเรียนรู้</label>
                                <select name="courses_on_demand_status" id="courses_on_demand_status" required>
                                    <option value="ยังไม่เริ่ม">ยังไม่เริ่ม</option>
                                    <option value="ระหว่างเรียน">ระหว่างเรียน</option>
                                    <option value="สำเร็จแล้ว">สำเร็จแล้ว</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>certificate</label>
                                <input type="file" name="courses_on_demand_certificate" id="courses_on_demand_certificate"><br>
                                <span id="span_image"></span>
                            </div>
                            <div class="col-12 profile-form-button-wrap">
                                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit" class="profile-form-button profile-form-button-save" value="บันทึก"><input type="hidden" name="courses_on_demand_id" id="courses_on_demand_id">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(2)').addClass('active');
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(2)').addClass('active');
});

function editData(courses_on_demand_id) {
    $.post('<?php echo site_url("frontend/path/ajaxCourseOnDemand");?>', { courses_on_demand_id: courses_on_demand_id }, function(data) {
        var data_split = data.split('!@#$%^&*()_+');

        var path_image = '<?php echo base_url('uploads/course/');?>' + data_split[4];

        $("#courses_on_demand_id").val(data_split[0]);
        $("#courses_on_demand_name").val(data_split[1]);
        $("#courses_on_demand_who").val(data_split[2]);
        $("#courses_on_demand_status").val(data_split[3]);
        $("#span_image").html('<img src="' + path_image + '" width="150">');
    });
}

function deleteCourseOnDemand(courses_on_demand_id) {
    if(confirm('Confirm Delete') == true) {
        $.post('<?php echo site_url("frontend/path/ajaxDeleteCourseOnDemand");?>', { courses_on_demand_id: courses_on_demand_id }, function(data) {
            $("#span_course_" + courses_on_demand_id).hide();
        });
    }
}
</script>
</body>
</html>