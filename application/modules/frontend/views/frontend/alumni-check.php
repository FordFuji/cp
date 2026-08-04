<!doctype html>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>โครงการทุนการศึกษา เครือเจริญโภคภัณฑ์</title>
<?php require('inc_header.php'); ?>
</head>
<body>
  <?php require('inc_menu.php'); ?>
  <section class="container-fluid wow fadeInDown container-height">
    <div class="container">
        <form action="<?php echo site_url('alumni_check');?>" method="post">
        <div class="row">
            <div class="col-12 alumni-head">
                <h1>Alumni Check</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>สืบค้นปีหรือผู้ที่รับทุน นักศึกษาทุนเครือเจริญโภคภัณฑ์</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alumni-search-box">
                    <input type="text" placeholder="กรอกปีหรือชื่อผู้รับทุน" name="year_name_scholarship" value="<?php if($this->input->post('year_name_scholarship') != '') echo $this->input->post('year_name_scholarship');?>" required>
                    <button type="submit" class="alumni-search-btn"><i class="fas fa-search"></i>ค้นหา</button>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-12 alumni-subhead">
                <h3>ข้อมูลที่พบ</h3>
                <div class="alumni-search-number">2 รายการ</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-study-table-wrap">
                <table class="my-study-table my-idp-table">
                    <thead>
                        <tr>
                            <th>ชื่อ - นามสกุล</th>
                            <th>รุ่นที่</th>
                            <th>นักเรียนทุน CP ปี </th>
                        </tr>
                    </thead>
                    <tbody>
<?php
if(!empty($profile)) {
    foreach($profile as $r) {
?>
                        <tr>
                            <td>
                                <?php echo $r->profile_name_th.' '.$r->profile_surname_th;?>
                            </td>
                            <td><?php echo $r->profile_model;?></td>
                            <td>
                                <?php echo $r->profile_year + 543;?>
                            </td>
                        </tr>
<?php
    }
}
?>
                        <!-- <tr>
                            <td>
                                คุณเรืองศักดิ์ แก้วธรรมชัย
                            </td>
                            <td>10</td>
                            <td>
                            2532
                            </td>
                        </tr>
                        <tr>
                            <td>
                                คุณเรืองศักดิ์ แก้วธรรมชัย
                            </td>
                            <td>10</td>
                            <td>
                            2532
                            </td>
                        </tr> -->
                    </tbody>
                </table>
          </div>
        </div>
    </div>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){

});    
</script>
</body>
</html>