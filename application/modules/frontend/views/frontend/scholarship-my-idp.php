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
    <form class="container scls-bg-container">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My IDP</h2>
                <a href="<?php echo site_url('scholarship_making_plan');?>" class="btn-create-plan"><i class="fas fa-edit"></i>สร้างแผน</a>
            </div>
        </div>
        <div class="row">
          <div class="col-12 my-study-table-wrap">
            <table class="my-study-table my-idp-table">
              <thead>
                <tr>
                  <th>PsyTech<span>(ผลคะแนนบุคลิกภาพ)</span></th>
                  <th>Education<span>(Institute/ GPAX)</span></th>
                  <th>Ambition<span>(สามอันดับอาชีพที่มุ่งหวัง)</span></th>
                  <th>Skills enhancement<span>(ทักษะ/การพัฒนาที่มุ่งหวัง)</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="#" class="btn-psytech"><i class="fas fa-file-alt"></i>ผลคะแนน PsyTech</a>
                  </td>
                  <td>
                    <?php if(!empty($row_inc)) echo $row_inc->profile_institute;?> <br><?php if(!empty($row_inc)) echo $row_inc->profile_gpax;?>
                  </td>
                  <td>1. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_occupation1;?></td>
                  <td class="text-left">
                    1.1. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person11;?> <br>
                    1.2. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person12;?> <br>
                    1.3. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person13;?> 
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>2. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_occupation2;?></td>
                  <td class="text-left">
                    2.1. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person21;?> <br>
                    2.2. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person22;?> <br>
                    2.3. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person23;?>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>3. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_occupation3;?></td>
                  <td class="text-left">
                    3.1. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person31;?> <br>
                    3.2. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person32;?> <br>
                    3.3. <?php if(!empty($makingPlan)) echo $makingPlan->making_plan_person33;?>
                  </td>
                </tr>
              </tbody>
              <!-- <thead>
                <tr>
                  <th colspan="2" class="border-bot">ทักษะที่พัฒนาสำเร็จแล้ว</th>
                  <th colspan="2" class="border-bot">ทักษะที่อยู่ระหว่างการพัฒนา</th>
                </tr>
              </thead> -->
            </table>
            <table class="my-study-table my-idp-table" style="width: 49%; float:left; margin-right: 2px;">
              <thead>
                <tr>
                  <th colspan="2" class="border-bot">ทักษะที่พัฒนาสำเร็จแล้ว</th>
                </tr>
                <tr>
                  <th>ชื่อทักษะ</th>
                  <th>ผลการพัฒนา</th>
                </tr>
              </thead>
              <tbody>
<?php
if(!empty($idp1)) {
  foreach($idp1 as $r) {
?>
                <tr>  
                  <td><?php echo $r->idp_skill_name;?></td>
                  <td><?php echo $r->idp_skill_result;?></td>
                </tr>
<?php
  }
}
?>
              </tbody>
            </table>
            <table class="my-study-table my-idp-table" style="width: 49%; float:left;">
              <thead>
                <tr>
                  <th colspan="2" class="border-bot">ทักษะที่อยู่ระหว่างการพัฒนา</th>
                </tr>
                <tr>
                  <th>ชื่อทักษะ</th>
                  <th>ผลการพัฒนา</th>
                </tr>
              </thead>
              <tbody>
<?php
if(!empty($idp2)) {
  foreach($idp2 as $r) {
?>
                <tr>  
                  <td><?php echo $r->idp_skill_name;?></td>
                  <td><?php echo $r->idp_skill_result;?></td>
                </tr>
<?php
  }
}
?>
              </tbody>
            </table>
            <table class="my-study-table my-idp-table" style="width: 49%; float:left; margin-right: 2px;">
              <thead>
                <tr>
                  <th colspan="2" class="border-bot">ทักษะที่รอการพัฒนา</th>
                </tr>
                <tr>
                  <th>ชื่อทักษะ</th>
                  <th>ผลการพัฒนา</th>
                </tr>
              </thead>
              <tbody>
<?php
if(!empty($idp3)) {
  foreach($idp3 as $r) {
?>
                <tr>  
                  <td><?php echo $r->idp_skill_name;?></td>
                  <td><?php echo $r->idp_skill_result;?></td>
                </tr>
<?php
  }
}
?>
              </tbody>
            </table>
            <table class="my-study-table my-idp-table" style="width: 49%; float:left;">
              <thead>
                <tr>
                  <th colspan="2" class="border-bot">ผู้อ่านแผนพัฒนา</th>
                </tr>
                <tr>
                  <th>ชื่อทักษะ</th>
                  <th>ผลการพัฒนา</th>
                </tr>
              </thead>
              <tbody>
<?php
if(!empty($idp4)) {
  foreach($idp4 as $r) {
?>
                <tr>  
                  <td><?php echo $r->idp_skill_name;?></td>
                  <td><?php echo $r->idp_skill_result;?></td>
                </tr>
<?php
  }
}
?>
              </tbody>
            </table>
          </div>
        </div>
    </form>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(2)').addClass('active');
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(1)').addClass('active');
});    
</script>
</body>
</html>