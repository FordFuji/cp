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
                <h2>Document download</h2>
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
            <div class="col-12">
                <div class="fdownload-list-wrap">
<?php
if(!empty($rows)) {
    foreach($rows as $r) {
?>
                    <div class="fdownload-list">
                        <a href="<?php echo base_url('uploads/document_download/'.$r->document_download_file);?>" target="_blank"><span><i class="fas fa-file-download"></i><?php echo $r->document_download_name;?></span><?php echo $r->document_download_description;?></a>
                    </div>
<?php
    }
}
?>
                    <!-- <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Doc M01</span>ระเบียบและ Flow การเบิกจ่ายค่าเดินทาง</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Form M02</span>ระเบียบและ Flow การเบิกค่าเบี้ยเลี้ยงการฝึกปฏิบัติงาน</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Doc G02</span>ระเบียบและ Flow การขึ้นทะเบียนนักเรียนทุนฯ</a>
                    </div>
                    <div class="fdownload-list">
                        <a href="#"><span><i class="fas fa-file-download"></i>Doc G02</span>ระเบียบและ Flow การขึ้นทะเบียนศิษย์เก่าทุนฯ</a>
                    </div> -->
                </div>
            </div>
        </div>
    </form>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(3)').addClass('active');
    $('.scls-menu>ul>li:nth-child(3) .submenu li:nth-child(3)').addClass('active');
});    
</script>
</body>
</html>