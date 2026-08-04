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
    <!-- ปี 1 เทอม 1 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My Page Diary</h2>
                <div class="page-diary-point-wrap">
                    <div class="page-diary-point poor">
                        1 Poor
                    </div>
                    <div class="page-diary-point fair">
                        2 Fair
                    </div>
                    <div class="page-diary-point good">
                        3 Good
                    </div>
                    <div class="page-diary-point excellent">
                        4 Excellent
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 1 Part 1 - แรกเข้าเป็นผู้รับทุน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life1" value="1" <?php if(!empty($row) and $row->page_diary_life1 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life1" value="2" <?php if(!empty($row) and $row->page_diary_life1 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life1" value="3" <?php if(!empty($row) and $row->page_diary_life1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life1" value="4" <?php if(!empty($row) and $row->page_diary_life1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life1" value="5" <?php if(!empty($row) and $row->page_diary_life1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other1"><?php if(!empty($row)) echo $row->page_diary_life_other1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home1" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home1 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home1" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home1 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home1" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home1 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home1" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home1 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home1" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other1"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study1" value="1" <?php if(!empty($row) and $row->page_diary_study1 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study1" value="2" <?php if(!empty($row) and $row->page_diary_study1 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study1" value="3" <?php if(!empty($row) and $row->page_diary_study1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study1" value="4" <?php if(!empty($row) and $row->page_diary_study1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study1" value="5" <?php if(!empty($row) and $row->page_diary_study1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other1"><?php if(!empty($row)) echo $row->page_diary_study_other1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation1" value="1" <?php if(!empty($row) and $row->page_diary_relation1 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation1" value="2" <?php if(!empty($row) and $row->page_diary_relation1 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation1" value="3" <?php if(!empty($row) and $row->page_diary_relation1 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation1" value="4" <?php if(!empty($row) and $row->page_diary_relation1 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation1" value="5" <?php if(!empty($row) and $row->page_diary_relation1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other1"><?php if(!empty($row)) echo $row->page_diary_relation_other1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy1" value="1" <?php if(!empty($row) and $row->page_diary_happy1 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy1" value="2" <?php if(!empty($row) and $row->page_diary_happy1 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy1" value="3" <?php if(!empty($row) and $row->page_diary_happy1 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy1" value="4" <?php if(!empty($row) and $row->page_diary_happy1 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy1" value="5" <?php if(!empty($row) and $row->page_diary_happy1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other1"><?php if(!empty($row)) echo $row->page_diary_happy_other1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note1"><?php if(!empty($row)) echo $row->page_diary_note1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit1" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 1 เทอม 1 -->

    <!-- ปี 1 เทอม 2 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 1 Part 2 - เป็น นร ทุนมาแล้ว 6 เดือน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life2" value="1" <?php if(!empty($row) and $row->page_diary_life2 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life2" value="2" <?php if(!empty($row) and $row->page_diary_life2 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life2" value="3" <?php if(!empty($row) and $row->page_diary_life2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2" value="4" <?php if(!empty($row) and $row->page_diary_life2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2" value="5" <?php if(!empty($row) and $row->page_diary_life2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other2"><?php if(!empty($row)) echo $row->page_diary_life_other2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home2" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home2 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home2" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home2 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home2" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home2 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home2 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other2"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study2" value="1" <?php if(!empty($row) and $row->page_diary_study2 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study2" value="2" <?php if(!empty($row) and $row->page_diary_study2 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study2" value="3" <?php if(!empty($row) and $row->page_diary_study2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2" value="4" <?php if(!empty($row) and $row->page_diary_study2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2" value="5" <?php if(!empty($row) and $row->page_diary_study2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other2"><?php if(!empty($row)) echo $row->page_diary_study_other2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation2" value="1" <?php if(!empty($row) and $row->page_diary_relation2 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation2" value="2" <?php if(!empty($row) and $row->page_diary_relation2 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation2" value="3" <?php if(!empty($row) and $row->page_diary_relation2 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2" value="4" <?php if(!empty($row) and $row->page_diary_relation2 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2" value="5" <?php if(!empty($row) and $row->page_diary_relation2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other2"><?php if(!empty($row)) echo $row->page_diary_relation_other2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy2" value="1" <?php if(!empty($row) and $row->page_diary_happy2 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy2" value="2" <?php if(!empty($row) and $row->page_diary_happy2 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy2" value="3" <?php if(!empty($row) and $row->page_diary_happy2 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2" value="4" <?php if(!empty($row) and $row->page_diary_happy2 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2" value="5" <?php if(!empty($row) and $row->page_diary_happy2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other2"><?php if(!empty($row)) echo $row->page_diary_happy_other2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note2"><?php if(!empty($row)) echo $row->page_diary_note2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit2" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 1 เทอม 2 -->

    <!-- ปี 2 เทอม 1 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My Page Diary</h2>
                <div class="page-diary-point-wrap">
                    <div class="page-diary-point poor">
                        1 Poor
                    </div>
                    <div class="page-diary-point fair">
                        2 Fair
                    </div>
                    <div class="page-diary-point good">
                        3 Good
                    </div>
                    <div class="page-diary-point excellent">
                        4 Excellent
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 2 Part 1 - เป็น นร ทุนมาแล้ว 12 เดือน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life2_1" value="1" <?php if(!empty($row) and $row->page_diary_life2_1 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life2_1" value="2" <?php if(!empty($row) and $row->page_diary_life2_1 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life2_1" value="3" <?php if(!empty($row) and $row->page_diary_life2_1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2_1" value="4" <?php if(!empty($row) and $row->page_diary_life2_1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2_1" value="5" <?php if(!empty($row) and $row->page_diary_life2_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other2_1"><?php if(!empty($row)) echo $row->page_diary_life_other2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home2_1" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home2_1 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home2_1" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home2_1 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home2_1" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home2_1 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2_1" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home2_1 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2_1" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home2_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other2_1"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study2_1" value="1" <?php if(!empty($row) and $row->page_diary_study2_1 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study2_1" value="2" <?php if(!empty($row) and $row->page_diary_study2_1 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study2_1" value="3" <?php if(!empty($row) and $row->page_diary_study2_1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2_1" value="4" <?php if(!empty($row) and $row->page_diary_study2_1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2_1" value="5" <?php if(!empty($row) and $row->page_diary_study2_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other2_1"><?php if(!empty($row)) echo $row->page_diary_study_other2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation2_1" value="1" <?php if(!empty($row) and $row->page_diary_relation2_1 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation2_1" value="2" <?php if(!empty($row) and $row->page_diary_relation2_1 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation2_1" value="3" <?php if(!empty($row) and $row->page_diary_relation2_1 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2_1" value="4" <?php if(!empty($row) and $row->page_diary_relation2_1 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2_1" value="5" <?php if(!empty($row) and $row->page_diary_relation2_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other2_1"><?php if(!empty($row)) echo $row->page_diary_relation_other2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy2_1" value="1" <?php if(!empty($row) and $row->page_diary_happy2_1 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy2_1" value="2" <?php if(!empty($row) and $row->page_diary_happy2_1 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy2_1" value="3" <?php if(!empty($row) and $row->page_diary_happy2_1 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2_1" value="4" <?php if(!empty($row) and $row->page_diary_happy2_1 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2_1" value="5" <?php if(!empty($row) and $row->page_diary_happy2_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other2_1"><?php if(!empty($row)) echo $row->page_diary_happy_other2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note2_1"><?php if(!empty($row)) echo $row->page_diary_note2_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit2_1" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 2 เทอม 1 -->

    <!-- ปี 2 เทอม 2 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 2 Part 2 - เป็น นร ทุนมาแล้ว 18 เดือน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life2_2" value="1" <?php if(!empty($row) and $row->page_diary_life2_2 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life2_2" value="2" <?php if(!empty($row) and $row->page_diary_life2_2 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life2_2" value="3" <?php if(!empty($row) and $row->page_diary_life2_2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2_2" value="4" <?php if(!empty($row) and $row->page_diary_life2_2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life2_2" value="5" <?php if(!empty($row) and $row->page_diary_life2_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other2_2"><?php if(!empty($row)) echo $row->page_diary_life_other2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home2_2" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home2_2 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home2_2" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home2_2 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home2_2" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home2_2 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2_2" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home2_2 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home2_2" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home2_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other2_2"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study2_2" value="1" <?php if(!empty($row) and $row->page_diary_study2_2 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study2_2" value="2" <?php if(!empty($row) and $row->page_diary_study2_2 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study2_2" value="3" <?php if(!empty($row) and $row->page_diary_study2_2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2_2" value="4" <?php if(!empty($row) and $row->page_diary_study2_2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study2_2" value="5" <?php if(!empty($row) and $row->page_diary_study2_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other2_2"><?php if(!empty($row)) echo $row->page_diary_study_other2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation2_2" value="1" <?php if(!empty($row) and $row->page_diary_relation2_2 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation2_2" value="2" <?php if(!empty($row) and $row->page_diary_relation2_2 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation2_2" value="3" <?php if(!empty($row) and $row->page_diary_relation2_2 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2_2" value="4" <?php if(!empty($row) and $row->page_diary_relation2_2 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation2_2" value="5" <?php if(!empty($row) and $row->page_diary_relation2_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other2_2"><?php if(!empty($row)) echo $row->page_diary_relation_other2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy2_2" value="1" <?php if(!empty($row) and $row->page_diary_happy2_2 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy2_2" value="2" <?php if(!empty($row) and $row->page_diary_happy2_2 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy2_2" value="3" <?php if(!empty($row) and $row->page_diary_happy2_2 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2_2" value="4" <?php if(!empty($row) and $row->page_diary_happy2_2 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy2_2" value="5" <?php if(!empty($row) and $row->page_diary_happy2_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other2_2"><?php if(!empty($row)) echo $row->page_diary_happy_other2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note2_2"><?php if(!empty($row)) echo $row->page_diary_note2_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit2_2" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 2 เทอม 2 -->

    <!-- ปี 3 เทอม 1 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>My Page Diary</h2>
                <div class="page-diary-point-wrap">
                    <div class="page-diary-point poor">
                        1 Poor
                    </div>
                    <div class="page-diary-point fair">
                        2 Fair
                    </div>
                    <div class="page-diary-point good">
                        3 Good
                    </div>
                    <div class="page-diary-point excellent">
                        4 Excellent
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 3 Part 1 - เป็น นร ทุนมาแล้ว 24 เดือน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life3_1" value="1" <?php if(!empty($row) and $row->page_diary_life3_1 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life3_1" value="2" <?php if(!empty($row) and $row->page_diary_life3_1 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life3_1" value="3" <?php if(!empty($row) and $row->page_diary_life3_1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life3_1" value="4" <?php if(!empty($row) and $row->page_diary_life3_1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life3_1" value="5" <?php if(!empty($row) and $row->page_diary_life3_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other3_1"><?php if(!empty($row)) echo $row->page_diary_life_other3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home3_1" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home3_1 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home3_1" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home3_1 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home3_1" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home3_1 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home3_1" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home3_1 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home3_1" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home3_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other3_1"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study3_1" value="1" <?php if(!empty($row) and $row->page_diary_study3_1 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study3_1" value="2" <?php if(!empty($row) and $row->page_diary_study3_1 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study3_1" value="3" <?php if(!empty($row) and $row->page_diary_study3_1 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study3_1" value="4" <?php if(!empty($row) and $row->page_diary_study3_1 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study3_1" value="5" <?php if(!empty($row) and $row->page_diary_study3_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other3_1"><?php if(!empty($row)) echo $row->page_diary_study_other3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation3_1" value="1" <?php if(!empty($row) and $row->page_diary_relation3_1 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation3_1" value="2" <?php if(!empty($row) and $row->page_diary_relation3_1 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation3_1" value="3" <?php if(!empty($row) and $row->page_diary_relation3_1 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation3_1" value="4" <?php if(!empty($row) and $row->page_diary_relation3_1 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation3_1" value="5" <?php if(!empty($row) and $row->page_diary_relation3_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other3_1"><?php if(!empty($row)) echo $row->page_diary_relation_other3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy3_1" value="1" <?php if(!empty($row) and $row->page_diary_happy3_1 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy3_1" value="2" <?php if(!empty($row) and $row->page_diary_happy3_1 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy3_1" value="3" <?php if(!empty($row) and $row->page_diary_happy3_1 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy3_1" value="4" <?php if(!empty($row) and $row->page_diary_happy3_1 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy3_1" value="5" <?php if(!empty($row) and $row->page_diary_happy3_1 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other3_1"><?php if(!empty($row)) echo $row->page_diary_happy_other3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note3_1"><?php if(!empty($row)) echo $row->page_diary_note3_1;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit3_1" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 3 เทอม 1 -->

    <!-- ปี 3 เทอม 2 -->
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_my_page_diary');?>" method="post">
        <div class="row">
            <div class="col-12 scls-subhead">
                <h3>Year 3 Part 2 - เป็น นร ทุนมาแล้ว 30 เดือน</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ชีวิตความเป็นอยู่</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_life3_2" value="1" <?php if(!empty($row) and $row->page_diary_life3_2 == 1) echo 'checked';?>><span>1</span><p>แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_life3_2" value="2" <?php if(!empty($row) and $row->page_diary_life3_2 == 2) echo 'checked';?>><span>2</span><p>เท่าเดิม คงเดิม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_life3_2" value="3" <?php if(!empty($row) and $row->page_diary_life3_2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life3_2" value="4" <?php if(!empty($row) and $row->page_diary_life3_2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_life3_2" value="5" <?php if(!empty($row) and $row->page_diary_life3_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_life_other3_2"><?php if(!empty($row)) echo $row->page_diary_life_other3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเงินทางบ้าน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_money_from_home3_2" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home3_2 == 1) echo 'checked';?>><span>1</span><p>ไม่พอใช้ และมีหนี้สิน </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_money_from_home3_2" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home3_2 == 2) echo 'checked';?>><span>2</span><p>ไม่พอใช้ ไม่มีหนี้สิน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_money_from_home3_2" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home3_2 == 3) echo 'checked';?>><span>3</span><p>พอใช้เดือนชนเดือน</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home3_2" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home3_2 == 4) echo 'checked';?>><span>4</span><p>มีเหลือเก็บ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_money_from_home3_2" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home3_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_money_from_home_other3_2"><?php if(!empty($row)) echo $row->page_diary_money_from_home_other3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>การเรียน</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_study3_2" value="1" <?php if(!empty($row) and $row->page_diary_study3_2 == 1) echo 'checked';?>><span>1</span><p>แย่ลงกว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_study3_2" value="2" <?php if(!empty($row) and $row->page_diary_study3_2 == 2) echo 'checked';?>><span>2</span><p>เสมอตัว</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_study3_2" value="3" <?php if(!empty($row) and $row->page_diary_study3_2 == 3) echo 'checked';?>><span>3</span><p>ดีขึ้นกว่าเดิมเพียงเล็กน้อย</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study3_2" value="4" <?php if(!empty($row) and $row->page_diary_study3_2 == 4) echo 'checked';?>><span>4</span><p>ดีขึ้นกว่าเดิมมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_study3_2" value="5" <?php if(!empty($row) and $row->page_diary_study3_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_study_other3_2"><?php if(!empty($row)) echo $row->page_diary_study_other3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสัมพันธ์</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_relation3_2" value="1" <?php if(!empty($row) and $row->page_diary_relation3_2 == 1) echo 'checked';?>><span>1</span><p>มีเพื่อนน้อยลง ปรับตัวยากขึ้น </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_relation3_2" value="2" <?php if(!empty($row) and $row->page_diary_relation3_2 == 2) echo 'checked';?>><span>2</span><p>เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_relation3_2" value="3" <?php if(!empty($row) and $row->page_diary_relation3_2 == 3) echo 'checked';?>><span>3</span><p>ปรับตัวได้ดี มีความสุขกับสังคม</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation3_2" value="4" <?php if(!empty($row) and $row->page_diary_relation3_2 == 4) echo 'checked';?>><span>4</span><p>มีความสุขกับสังคมที่อาศัยอยู่มาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_relation3_2" value="5" <?php if(!empty($row) and $row->page_diary_relation3_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_relation_other3_2"><?php if(!empty($row)) echo $row->page_diary_relation_other3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 page-diary-radio-head">
                <h4>ความสุข</h4>
            </div>
        </div>
        <div class="row page-diary-radio-row">
            <div class="col-12 col-md-3 page-diary-radio poor">
                <label><input type="radio" name="page_diary_happy3_2" value="1" <?php if(!empty($row) and $row->page_diary_happy3_2 == 1) echo 'checked';?>><span>1</span><p>รู้สึกแย่กว่าเดิม </p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio fair">
                <label><input type="radio" name="page_diary_happy3_2" value="2" <?php if(!empty($row) and $row->page_diary_happy3_2 == 2) echo 'checked';?>><span>2</span><p>รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio good">
                <label><input type="radio" name="page_diary_happy3_2" value="3" <?php if(!empty($row) and $row->page_diary_happy3_2 == 3) echo 'checked';?>><span>3</span><p>รู้สึกมีความสุขเป็นส่วนใหญ่</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy3_2" value="4" <?php if(!empty($row) and $row->page_diary_happy3_2 == 4) echo 'checked';?>><span>4</span><p>รู้สึกมีความสุขมากขึ้นมาก</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-3 page-diary-radio excellent">
                <label><input type="radio" name="page_diary_happy3_2" value="5" <?php if(!empty($row) and $row->page_diary_happy3_2 == 5) echo 'checked';?>><p>อื่นๆ</p><div class="background-radio"></div></label>
            </div>
            <div class="col-12 col-md-9 profile-form">
                <label>อธิบาย</label>
                <textarea rows="2" name="page_diary_happy_other3_2"><?php if(!empty($row)) echo $row->page_diary_happy_other3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form">
                <label>อธิบายเพิ่มเติมสั้นๆ</label>
                <textarea rows="3" name="page_diary_note3_2"><?php if(!empty($row)) echo $row->page_diary_note3_2;?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <button class="profile-form-button profile-form-button-cancel">ยกเลิก</button><input type="submit" name="submit3_2" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
    <!-- end ปี 3 เทอม 2 -->
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(1)').addClass('active');
    $('.scls-menu>ul>li:nth-child(1) .submenu li:nth-child(5)').addClass('active');
});    
</script>
</body>
</html>