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
                <h2>My Project</h2>
            </div>
        </div>
        <div class="row">
<?php
if(!empty($category_project)) {
    foreach($category_project as $r) {
?>
            <div class="col-12 col-md-4 planning-wrap">
                <form action="<?php echo site_url('frontend/path/saveUpdateProject/'.$r->category_project_id);?>" method="post" enctype="multipart/form-data">
                <div class="planning-detail">
                    <h3><?php echo $r->category_project_name;?></h3>
<?php
        $project = $this->model_frontend->getProject($r->category_project_id);
        if(!empty($project)) {
            foreach($project as $p) {
?>
                    <!-- <div class="project-check"><i class="fas fa-check-circle"></i><?php echo $p->project_status;?></div> -->
                    <div class="project-check"><?php echo $p->project_status;?></div>
<?php
            }
        }
?>
                    <!-- <div class="project-check"><i class="fas fa-check-circle"></i>ข้อมูลสมาชิกในทีมครบถ้วน</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div> -->
                    <div class="project-btn-wrap">
                        ส่งไฟล์
                        <input type="file" name="category_project_file_<?php echo $r->category_project_id;?>">
                        <button type="submit" class="project-btn"><i class="fas fa-clipboard-check"></i>Submit Proposal</button><br><img src="<?php echo base_url('uploads/project/'.$r->category_project_file);?>" width="150">
                    </div>
                </div>
                </form>
            </div>
<?php
    }
}
?>
            <!-- <div class="col-12 col-md-4 planning-wrap">
                <div class="planning-detail">
                    <h3>ขั้นกลาง</h3>
                    <div class="project-check"><i class="fas fa-check-circle"></i>ตรวจสอบก่อนส่ง</div>
                    <div class="project-check"><i class="fas fa-check-circle"></i>ข้อมูลสมาชิกในทีมครบถ้วน</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div>
                    <div class="project-btn-wrap">
                        ส่งไฟล์
                        <input type="file">
                        <button class="project-btn"><i class="fas fa-clipboard-check"></i>Submit Progress</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 planning-wrap">
                <div class="planning-detail">
                    <h3>ขั้นปลาย</h3>
                    <div class="project-check"><i class="fas fa-check-circle"></i>ตรวจสอบก่อนส่ง</div>
                    <div class="project-check"><i class="fas fa-check-circle"></i>ข้อมูลสมาชิกในทีมครบถ้วน</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div>
                    <div class="project-check"><i class="fas fa-circle"></i>...</div>
                    <div class="project-btn-wrap">
                        ส่งไฟล์
                        <input type="file">
                        <button class="project-btn"><i class="fas fa-clipboard-check"></i>Submit Final Report</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(2)').addClass('active');
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(5)').addClass('active');
});    
</script>
</body>
</html>