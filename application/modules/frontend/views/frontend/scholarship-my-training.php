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
                <h2>My Training</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th>วันแรกของการฝึกงาน</th>
                                <th>วันสุดท้ายของการฝึกงาน</th>
                                <th>หน่วยงานที่ฝึกงาน</th>
                                <th>บริษัทที่ฝึกงาน</th>
                                <th>สถานที่ฝึกงาน</th>
                                <th>ผลการนิเทศการฝึกงานโดย CPSP</th>
                                <th>คำอธิบายผลคะแนนนิเทศ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
if(!empty($rows)) {
    foreach($rows as $r) {
?>
                            <tr id="tr_training_<?php echo $r->training_id;?>">
                                <td><?php echo date2TextTh($r->training_date_begin);?></td>
                                <td><?php echo date2TextTh($r->training_date_end);?></td>
                                <td><?php echo $r->training_department;?></td>
                                <td><?php echo $r->training_company;?></td>
                                <td><?php echo $r->training_place;?></td>
                                <td><?php echo $r->training_grade;?></td>
                                <td><?php echo $r->training_description_grade;?></td>
                                <td>
                                    <a href="#mystudy-add" title="แก้ไข" data-fancybox class="button-table" onclick="editTraining('<?php echo $r->training_id;?>');"><i class="fas fa-edit"></i></a>
                                    <button title="ลบ" class="button-table" onclick="deleteTraining('<?php echo $r->training_id;?>');"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
<?php
    }
}
?>
                        </tbody>
                    </table>
                    <a href="#mystudy-add" data-fancybox class="my-study-add"><i class="fas fa-plus"></i>เพิ่มการฝึกงาน</a>
                    <div class="my-study-popup" id="mystudy-add">
                        <div class="my-study-popup-container">
                            <form action="<?php echo site_url('scholarship_my_training');?>" method="post">
                            <div class="row">
                                <div class="col-12 scls-subhead">
                                    <h3>เพิ่มการฝึกงาน</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 profile-form">
                                    <label>วันแรกของการฝึกงาน</label>
                                    <input type="text" name="training_date_begin" id="training_date_begin" required>
                                </div>
                                <div class="col-12 col-md-6 profile-form">
                                    <label>วันสุดท้ายของการฝึกงาน</label>
                                    <input type="text" name="training_date_end" id="training_date_end" required>
                                </div>
                                <div class="col-12 col-md-6 profile-form">
                                    <label>หน่วยงานที่ฝึกงาน</label>
                                    <input type="text" name="training_department" id="training_department" required>
                                </div>
                                <div class="col-12 col-md-6 profile-form">
                                    <label>บริษัทที่ฝึกงาน</label>
                                    <input type="text" name="training_company" id="training_company" required>
                                </div>
                                <div class="col-12 profile-form">
                                    <label>สถานที่ฝึกงาน</label>
                                    <input type="text" name="training_place" id="training_place" required>
                                </div>
                                <div class="col-12 col-md-6 profile-form">
                                    <label>ผลการนิเทศการฝึกงานโดย CPSP</label>
                                    <input type="text" name="training_grade" id="training_grade" required>
                                </div>
                                <div class="col-12 col-md-6 profile-form">
                                    <label>คำอธิบายผลคะแนนนิเทศ</label>
                                    <input type="text" name="training_description_grade" id="training_description_grade" required>
                                </div>
                                <div class="col-12 profile-form-button-wrap">
                                    <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit" class="profile-form-button profile-form-button-save" value="บันทึก"><input type="hidden" name="training_id" id="training_id">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(2)').addClass('active');
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(4)').addClass('active');
});
</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#training_date_begin").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#training_date_end").datepicker({ dateFormat: 'yy-mm-dd' });
    });

    function editTraining(training_id) {
        //alert(training_id);
        $.post('<?php echo site_url('frontend/path/ajaxTraining');?>', { training_id: training_id }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $("#training_id").val(training_id);

            $("#training_date_begin").val(data_split[0]);
            $("#training_date_end").val(data_split[1]);
            $("#training_department").val(data_split[2]);
            $("#training_company").val(data_split[3]);
            $("#training_place").val(data_split[4]);
            $("#training_grade").val(data_split[5]);
            $("#training_description_grade").val(data_split[6]);
        });
    }

    function deleteTraining(training_id) {
        if(confirm('Confirm Delete') == true) {
            $.post('<?php echo site_url("frontend/path/ajaxDeleteTraining");?>', { training_id: training_id }, function(data) {
                $("#tr_training_" + training_id).hide();
            });
        }
    }
</script>
</body>
</html>