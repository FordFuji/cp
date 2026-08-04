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
    <form class="container scls-bg-container" action="<?php echo site_url('scholarship_making_plan');?>" method="post">
        <div class="row">
            <div class="col-12 scls-head">
                <h2>Making Plan สร้างแผน</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-12 my-study-table-wrap">
            <table class="my-study-table my-idp-table">
              <thead>
                <tr>
                  <th colspan="4" class="text-left">ระบุอาชีพที่คุณใฝ่ฝันในอนาคตอาชีพที่ 1</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td colspan="4">
                        <div class="profile-form plan-form">
                            <label>1</label>
                            <input type="text" name="making_plan_occupation1" id="making_plan_occupation1" value="<?php if(!empty($row)) echo $row->making_plan_occupation1;?>">
                        </div>
                    </td>
                </tr>
              </tbody>
              <thead>
                <tr>
                    <th colspan="4" class="tab-table-btn">ระบุบุคคลหรือสถานที่ซึ่งคุณจะได้เรียนรู้/พัฒนาทักษะดังกล่าว</th>
                </tr>
              </thead>
              <tbody class="tab-table-detail">
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>1.1</label>
                            <input type="text" name="making_plan_person11" id="making_plan_person11" value="<?php if(!empty($row)) echo $row->making_plan_person11;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study11" id="making_plan_study11" <?php if(!empty($row) and $row->making_plan_study11 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study11" id="making_plan_study11" <?php if(!empty($row) and $row->making_plan_study11 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study11" id="making_plan_study11" <?php if(!empty($row) and $row->making_plan_study11 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study11" id="making_plan_study11" <?php if(!empty($row) and $row->making_plan_study11 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term11" id="making_plan_study_term11" <?php if(!empty($row) and $row->making_plan_study_term11 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term11" id="making_plan_study_term11" <?php if(!empty($row) and $row->making_plan_study_term11 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term11" id="making_plan_study_term11" <?php if(!empty($row) and $row->making_plan_study_term11 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term11" id="making_plan_study_term11" <?php if(!empty($row) and $row->making_plan_study_term11 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" placeholder="กรุณาระบุ" name="making_plan_term_other11" id="making_plan_term_other11" value="<?php if(!empty($row)) echo $row->making_plan_term_other11;?>">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>1.2</label>
                            <input type="text" name="making_plan_person12" id="making_plan_person12" value="<?php if(!empty($row)) echo $row->making_plan_person12;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study12" id="making_plan_study12" <?php if(!empty($row) and $row->making_plan_study12 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study12" id="making_plan_study12" <?php if(!empty($row) and $row->making_plan_study12 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study12" id="making_plan_study12" <?php if(!empty($row) and $row->making_plan_study12 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study12" id="making_plan_study12" <?php if(!empty($row) and $row->making_plan_study12 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term12" id="making_plan_study_term12" <?php if(!empty($row) and $row->making_plan_study_term12 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term12" id="making_plan_study_term12" <?php if(!empty($row) and $row->making_plan_study_term12 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term12" id="making_plan_study_term12" <?php if(!empty($row) and $row->making_plan_study_term12 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term12" id="making_plan_study_term12" <?php if(!empty($row) and $row->making_plan_study_term12 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other12" id="making_plan_term_other12" value="<?php if(!empty($row)) echo $row->making_plan_term_other12;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>1.3</label>
                            <input type="text" name="making_plan_person13" id="making_plan_person13" value="<?php if(!empty($row)) echo $row->making_plan_person13;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study13" id="making_plan_study13" <?php if(!empty($row) and $row->making_plan_study13 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study13" id="making_plan_study13" <?php if(!empty($row) and $row->making_plan_study13 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study13" id="making_plan_study13" <?php if(!empty($row) and $row->making_plan_study13 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study13" id="making_plan_study13" <?php if(!empty($row) and $row->making_plan_study13 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term13" id="making_plan_study_term13" <?php if(!empty($row) and $row->making_plan_study_term13 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term13" id="making_plan_study_term13" <?php if(!empty($row) and $row->making_plan_study_term13 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term13" id="making_plan_study_term13" <?php if(!empty($row) and $row->making_plan_study_term13 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term13" id="making_plan_study_term13" <?php if(!empty($row) and $row->making_plan_study_term13 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other13" id="making_plan_term_other13" value="<?php if(!empty($row)) echo $row->making_plan_term_other13;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-12 my-study-table-wrap">
            <table class="my-study-table my-idp-table">
              <thead>
                <tr>
                  <th colspan="4" class="text-left">ระบุอาชีพที่คุณใฝ่ฝันในอนาคตอาชีพที่ 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td colspan="4">
                        <div class="profile-form plan-form">
                            <label>2</label>
                            <input type="text" name="making_plan_occupation2" id="making_plan_occupation2" value="<?php if(!empty($row)) echo $row->making_plan_occupation2;?>">
                        </div>
                    </td>
                </tr>
              </tbody>
              <thead>
                <tr>
                    <th colspan="4" class="tab-table-btn">ระบุบุคคลหรือสถานที่ซึ่งคุณจะได้เรียนรู้/พัฒนาทักษะดังกล่าว</th>
                </tr>
              </thead>
              <tbody class="tab-table-detail">
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>2.1</label>
                            <input type="text" name="making_plan_person21" id="making_plan_person21" value="<?php if(!empty($row)) echo $row->making_plan_person21;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study21" id="making_plan_study21" <?php if(!empty($row) and $row->making_plan_study21 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study21" id="making_plan_study21" <?php if(!empty($row) and $row->making_plan_study21 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study21" id="making_plan_study21" <?php if(!empty($row) and $row->making_plan_study21 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study21" id="making_plan_study21" <?php if(!empty($row) and $row->making_plan_study21 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term21" id="making_plan_study_term21" <?php if(!empty($row) and $row->making_plan_study_term21 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term21" id="making_plan_study_term21" <?php if(!empty($row) and $row->making_plan_study_term21 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term21" id="making_plan_study_term21" <?php if(!empty($row) and $row->making_plan_study_term21 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term21" id="making_plan_study_term21" <?php if(!empty($row) and $row->making_plan_study_term21 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other21" id="making_plan_term_other21" value="<?php if(!empty($row)) echo $row->making_plan_term_other21;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>2.2</label>
                            <input type="text" name="making_plan_person22" id="making_plan_person22" value="<?php if(!empty($row)) echo $row->making_plan_person22;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study22" id="making_plan_study22" <?php if(!empty($row) and $row->making_plan_study22 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study22" id="making_plan_study22" <?php if(!empty($row) and $row->making_plan_study22 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study22" id="making_plan_study22" <?php if(!empty($row) and $row->making_plan_study22 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study22" id="making_plan_study22" <?php if(!empty($row) and $row->making_plan_study22 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term22" id="making_plan_study_term22" <?php if(!empty($row) and $row->making_plan_study_term22 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term22" id="making_plan_study_term22" <?php if(!empty($row) and $row->making_plan_study_term22 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term22" id="making_plan_study_term22" <?php if(!empty($row) and $row->making_plan_study_term22 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term22" id="making_plan_study_term22" <?php if(!empty($row) and $row->making_plan_study_term22 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other22" id="making_plan_term_other22" value="<?php if(!empty($row)) echo $row->making_plan_term_other22;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>2.3</label>
                            <input type="text" name="making_plan_person23" id="making_plan_person23" value="<?php if(!empty($row)) echo $row->making_plan_person23;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study23" id="making_plan_study23" <?php if(!empty($row) and $row->making_plan_study23 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study23" id="making_plan_study23" <?php if(!empty($row) and $row->making_plan_study23 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study23" id="making_plan_study23" <?php if(!empty($row) and $row->making_plan_study23 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study23" id="making_plan_study23" <?php if(!empty($row) and $row->making_plan_study23 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term23" id="making_plan_study_term23" <?php if(!empty($row) and $row->making_plan_study_term23 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term23" id="making_plan_study_term23" <?php if(!empty($row) and $row->making_plan_study_term23 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term23" id="making_plan_study_term23" <?php if(!empty($row) and $row->making_plan_study_term23 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term23" id="making_plan_study_term23" <?php if(!empty($row) and $row->making_plan_study_term23 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other23" id="making_plan_term_other23" value="<?php if(!empty($row)) echo $row->making_plan_term_other23;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-12 my-study-table-wrap">
            <table class="my-study-table my-idp-table">
              <thead>
                <tr>
                  <th colspan="4" class="text-left">ระบุอาชีพที่คุณใฝ่ฝันในอนาคตอาชีพที่ 3</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td colspan="4">
                        <div class="profile-form plan-form">
                            <label>3</label>
                            <input type="text" name="making_plan_occupation3" id="making_plan_occupation3" value="<?php if(!empty($row)) echo $row->making_plan_occupation3;?>">
                        </div>
                    </td>
                </tr>
              </tbody>
              <thead>
                <tr>
                    <th colspan="4" class="tab-table-btn">ระบุบุคคลหรือสถานที่ซึ่งคุณจะได้เรียนรู้/พัฒนาทักษะดังกล่าว</th>
                </tr>
              </thead>
              <tbody class="tab-table-detail">
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>3.1</label>
                            <input type="text" name="making_plan_person31" id="making_plan_person31" value="<?php if(!empty($row)) echo $row->making_plan_person31;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study31" id="making_plan_study31" <?php if(!empty($row) and $row->making_plan_study31 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study31" id="making_plan_study31" <?php if(!empty($row) and $row->making_plan_study31 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study31" id="making_plan_study31" <?php if(!empty($row) and $row->making_plan_study31 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study31" id="making_plan_study31" <?php if(!empty($row) and $row->making_plan_study31 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term31" id="making_plan_study_term31" <?php if(!empty($row) and $row->making_plan_study_term31 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term31" id="making_plan_study_term31" <?php if(!empty($row) and $row->making_plan_study_term31 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term31" id="making_plan_study_term31" <?php if(!empty($row) and $row->making_plan_study_term31 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term31" id="making_plan_study_term31" <?php if(!empty($row) and $row->making_plan_study_term31 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other31" id="making_plan_term_other31" value="<?php if(!empty($row)) echo $row->making_plan_term_other31;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>3.2</label>
                            <input type="text" name="making_plan_person32" id="making_plan_person32" value="<?php if(!empty($row)) echo $row->making_plan_person32;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study32" id="making_plan_study32" <?php if(!empty($row) and $row->making_plan_study32 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study32" id="making_plan_study32" <?php if(!empty($row) and $row->making_plan_study32 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study32" id="making_plan_study32" <?php if(!empty($row) and $row->making_plan_study32 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study32" id="making_plan_study32" <?php if(!empty($row) and $row->making_plan_study32 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term32" id="making_plan_study_term32" <?php if(!empty($row) and $row->making_plan_study_term32 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term32" id="making_plan_study_term32" <?php if(!empty($row) and $row->making_plan_study_term32 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term32" id="making_plan_study_term32" <?php if(!empty($row) and $row->making_plan_study_term32 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term32" id="making_plan_study_term32" <?php if(!empty($row) and $row->making_plan_study_term32 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other32" id="making_plan_term_other32" value="<?php if(!empty($row)) echo $row->making_plan_term_other32;?>" placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-left">
                        <div class="profile-form plan-form plan-subform">
                            <label>3.3</label>
                            <input type="text" name="making_plan_person33" id="making_plan_person33" value="<?php if(!empty($row)) echo $row->making_plan_person33;?>">
                        </div>
                    </th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study33" id="making_plan_study33" <?php if(!empty($row) and $row->making_plan_study33 == 'ศึกษาด้วยตนเอง') echo 'checked';?> value="ศึกษาด้วยตนเอง"><div class="radio-symbol"></div><span>ศึกษาด้วยตนเอง</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study33" id="making_plan_study33" <?php if(!empty($row) and $row->making_plan_study33 == 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study33" id="making_plan_study33" <?php if(!empty($row) and $row->making_plan_study33 == 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้') echo 'checked';?> value="ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study33" id="making_plan_study33" <?php if(!empty($row) and $row->making_plan_study33 == 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง') echo 'checked';?> value="ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง"><div class="radio-symbol"></div><span>ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="text-left" colspan="4">ระบุกรอบระยะเวลาของการพัฒนาทักษะ</th>
                </tr>
                <tr>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term33" id="making_plan_study_term33" <?php if(!empty($row) and $row->making_plan_study_term33 == 'ภายใน 3 เดือน') echo 'checked';?> value="ภายใน 3 เดือน"><div class="radio-symbol"></div><span>ภายใน 3 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term33" id="making_plan_study_term33" <?php if(!empty($row) and $row->making_plan_study_term33 == 'ภายใน 6 เดือน') echo 'checked';?> value="ภายใน 6 เดือน"><div class="radio-symbol"></div><span>ภายใน 6 เดือน</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <label class="radio-box">
                            <input type="radio" name="making_plan_study_term33" id="making_plan_study_term33" <?php if(!empty($row) and $row->making_plan_study_term33 == 'ภายใน 1 ปี') echo 'checked';?> value="ภายใน 1 ปี"><div class="radio-symbol"></div><span>ภายใน 1 ปี</span>
                        </label>
                    </td>
                    <td class="text-left">
                        <div class="radio-other">
                            <label class="radio-box">
                                <input type="radio" name="making_plan_study_term33" id="making_plan_study_term33" <?php if(!empty($row) and $row->making_plan_study_term33 == 'อื่นๆ') echo 'checked';?> value="อื่นๆ"><div class="radio-symbol"></div><span>อื่นๆ</span>
                            </label>
                            <div class="profile-form other-form">
                                <input type="text" name="making_plan_term_other33" id="making_plan_term_other33" value="<?php if(!empty($row)) echo $row->making_plan_term_other33;?>"  placeholder="กรุณาระบุ">
                            </div>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
            <div class="col-12 profile-form-button-wrap">
                <a href="<?php echo site_url('scholarship_my_idp');?>" class="profile-form-button profile-form-button-cancel">ย้อนกลับ</a><input type="submit" name="submit" value="บันทึก" class="profile-form-button profile-form-button-save">
            </div>
        </div>
    </form>
  </section>
  <?php require('inc_footer.php'); ?>

<script>
$(document).ready(function(){
    $('.scls-menu>ul>li:nth-child(2)').addClass('active');
    $('.scls-menu>ul>li:nth-child(2) .submenu li:nth-child(1)').addClass('active');

    // $('.tab-table-btn').click(function(){
    //     if (  $(this).parents('thead').next( '.tab-table-detail' ).is( ":hidden" ) ) {
    //         $(this).parents('thead').next( '.tab-table-detail' ).fadeIn();
    //         $(this).children('i').removeClass('fa-minus').addClass('fa-plus');
    //     }else{
    //         $(this).parents('thead').next( '.tab-table-detail' ).fadeOut();
    //         $(this).children('i').removeClass('fa-plus').addClass('fa-minus');
    //     }
    // });
});    
</script>
</body>
</html>