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
                <h2>My English Update</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="scls-subhead">
                    <h3>รายงานผลการเข้าใช้งาน Voxy</h3>
                    <div class="meu-point-wrap">
                        <div class="meu-point">Average Hours : <span><?php echo $hour;?></span></div>
                        <div class="meu-point">Current Level : <span><?php if(!empty($level)) echo $level->english_update_level;?></span></div>
                    </div>
                </div>
            </div>
<?php
if(!empty($year)) {
    foreach($year as $r) {
        $quarter = $this->model_frontend->getQuarterEnglishUpdate($r->english_update_year);
?>
            <div class="col-12 col-md-6">
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Quarter</th>
                                <th>Hours</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
        $count = count($quarter);
        if(!empty($quarter)) {
            $i = 0;
            foreach($quarter as $q) {
                if($i == 0) {
?>
                    <tr>
                        <th rowspan="<?php echo $count;?>"><?php echo $r->english_update_year;?> (<?php echo $r->english_update_year + 543;?>)</th>
                        <td><?php echo $q->english_update_quarter;?></td>
                        <td><?php echo $q->english_update_hours;?></td>
                        <td><?php echo $q->english_update_level;?></td>
                    </tr>
<?php
                } else {
?>
                    <tr>
                        <td><?php echo $q->english_update_quarter;?></td>
                        <td><?php echo $q->english_update_hours;?></td>
                        <td><?php echo $q->english_update_level;?></td>
                    </tr>
<?php
                }

                $i++;
            }
        }
?>
                            <!-- <tr>
                                <td>Q2</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Q3</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Q4</td>
                                <td>X</td>
                                <td>X</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
<?php
    }
}
?>
            <!-- <div class="col-12 col-md-6">
                <div class="my-study-table-wrap">
                    <table class="my-study-table">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Quarter</th>
                                <th>Hours</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="4">2022 (2564)</th>
                                <td>Q1</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Q2</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Q3</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                            <tr>
                                <td>Q4</td>
                                <td>X</td>
                                <td>X</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
            <!-- <div class="col-12">
                <div class="my-study-popup" id="mystudy-add">
                    <div class="my-study-popup-container">
                        <div class="row">
                            <div class="col-12 scls-subhead">
                                <h3>แก้ไขคะแนน</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 profile-form">
                                <label>Year</label>
                                <select>
                                    <option>2021 (2563)</option>
                                    <option>2022 (2564)</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>Quarter</label>
                                <select>
                                    <option>Q1</option>
                                    <option>Q2</option>
                                    <option>Q3</option>
                                    <option>Q4</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>Hours</label>
                                <input type="text">
                            </div>
                            <div class="col-12 col-md-6 profile-form">
                                <label>Level</label>
                                <input type="text">
                            </div>
                            <div class="col-12 profile-form-button-wrap">
                                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><button class="profile-form-button profile-form-button-save">บันทึก</button>
                            </div>
                        </div>
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
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(3)').addClass('active');
});    
</script>
</body>
</html>