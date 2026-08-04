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
                <h2>Form Download</h2>
                <div class="fdownload-symbol-wrap">
                    <div class="fdownload-symbol">
                        <span>M</span> - Money
                    </div>
                    <div class="fdownload-symbol">
                        <span>T</span> - Training
                    </div>
                    <div class="fdownload-symbol">
                        <span>P</span>- Project
                    </div>
                    <div class="fdownload-symbol">
                        <span>G</span> - General
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
<?php
if(!empty($category)) {
    foreach($category as $r) {
?>
            <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3><?php echo $r->category_form_name;?></h3>
                </div>
                <div class="fdownload-list-wrap">
<?php
        $form = $this->model_frontend->getFormByCategory($r->category_form_id);
        if(!empty($form)) {
            foreach($form as $f) {
?>
                    <div class="fdownload-list">
                        <a href="<?php echo base_url('uploads/form/'.$f->form_file);?>" target="_blank"><span><i class="fas fa-file-download"></i><?php echo $f->form_name;?></span><?php echo $f->form_description;?></a>
                    </div>
<?php
            }
        }
?>                    
                    <!-- <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Form M02</span>แบบฟอร์มเบิกค่าเบี้ยเลี้ยงการฝึกปฏิบัติงาน</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Form M03</span>แบบฟอร์มเบิกค่าใช้จ่ายโครงการ</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Form T01</span>แบบฟอร์มรายงานผลการปฏิบัติงาน</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Form M04</span>แบบฟอร์มใบสำคัญรับเงิน</a>
                    </div> -->
                </div>
            </div>
<?php
    }
}
?>
            <!-- <div class="col-12 col-md-6">
                <div class="scls-subhead">
                    <h3>ตัวอย่างการกรอกแบบฟอร์ม</h3>
                </div>
                <div class="fdownload-list-wrap">
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Exp_M01</span>ตัวอย่างการกรอกแบบฟอร์มเบิกค่าเดินทาง</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Exp_M02</span>ตัวอย่างแบบฟอร์มเบิกค่าเบี้ยเลี้ยงการฝึกปฏิบัติงาน</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Exp_M03</span>ตัวอย่างแบบฟอร์มเบิกค่าใช้จ่ายโครงการ</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Exp_T01</span>ตัวอย่างแบบฟอร์มรายงานผลการปฏิบัติงาน</a>
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
    $('.scls-menu>ul>li:nth-child(3) .submenu li:nth-child(2)').addClass('active');
});    
</script>
</body>
</html>