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
                <h2>Planning your project</h2>
            </div>
        </div>
        <div class="row">
<?php
if(!empty($headPlanningYourProject)) {
    foreach($headPlanningYourProject as $r) {
?>
            <div class="col-12 col-md-4 planning-wrap">
                <a href="<?php echo $r->level_planning_your_project_embed_youtube;?>" data-fancybox class="planning-img">
                    <img src="<?php echo base_url('uploads/project/'.$r->level_planning_your_project_embed_image);?>" alt="">
                    <div class="btn-play">
                        <div class="icon-play"><i class="fas fa-play"></i></div>
                        <span>Play</span>
                    </div>
                </a>
                <div class="planning-detail">
                    <h3><?php echo $r->level_planning_your_project_name;?></h3>
                    <p><?php echo $r->level_planning_your_project_description;?></p>
<?php
        $file = $this->model_frontend->getFilePlanningYourProject($r->level_planning_your_project_id);

        if(!empty($file)) {
            foreach($file as $f) {
?>
                <div class="planning-file">
                    <a href="<?php echo base_url('uploads/project/'.$f->planning_your_project_file);?>" target="_blank"><i class="fas fa-file-download"></i><?php echo $f->planning_your_project_name;?></a>
                </div>
<?php
            }
        }
?>                    
                    <!-- <div class="planning-file">
                        <a href="#"><i class="fas fa-file-download"></i>Download Invoice Example</a>
                    </div> -->
                </div>
            </div>
<?php
    }
}
?>
            <!-- <div class="col-12 col-md-4 planning-wrap">
                <a href="https://www.youtube.com/watch?v=juKd26qkNAw" data-fancybox class="planning-img">
                    <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    <div class="btn-play">
                        <div class="icon-play"><i class="fas fa-play"></i></div>
                        <span>Play</span>
                    </div>
                </a>
                <div class="planning-detail">
                    <h3>ขั้นกลาง</h3>
                    <p>รับชมคลิปอธิบายการเขียนรายงานความคืบหน้าการดำเนินงานโครงการ</p>
                    <div class="planning-file">
                        <a href="#"><i class="fas fa-file-download"></i>Download Progress Form</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 planning-wrap">
                <a href="https://www.youtube.com/watch?v=juKd26qkNAw" data-fancybox class="planning-img">
                    <img src="<?php echo base_url('asset/frontend/images/banner-img.jpg');?>" alt="">
                    <div class="btn-play">
                        <div class="icon-play"><i class="fas fa-play"></i></div>
                        <span>Play</span>
                    </div>
                </a>
                <div class="planning-detail">
                    <h3>ขั้นปลาย</h3>
                    <p>รับชมคลิปอธิบายการเขียนรายงานสรุปผลโครงการ</p>
                    <div class="planning-file">
                        <a href="#"><i class="fas fa-file-download"></i>Download Final Proposal Form</a>
                    </div>
                    <div class="planning-file">
                        <a href="#"><i class="fas fa-file-download"></i>Download Evaluation Form</a>
                    </div>
                </div>
            </div> -->
        </div>
    </form>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(3)').addClass('active');
    $('.scls-menu>ul>li:nth-child(3) .submenu li:nth-child(1)').addClass('active');
});    
</script>
</body>
</html>