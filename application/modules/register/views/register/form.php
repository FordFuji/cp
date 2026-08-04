		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">Managed Form <small><?php if(!empty($title)) echo $title;?></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?php if(!empty($title)) echo $title;?></h4>
                        </div>
                        <div class="panel-body">
<?php
if(empty($id)) {
	$id = '';
}
?>
							<form action="<?php echo site_url('register/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<legend>Data</legend>
							<div class="form-group">
					            <label class="col-md-3 control-label">ประเภท</label>
					            <div class="col-md-9">
                       				<select name="profile_type" id="profile_type" class="form-control" required>
										<option value="">กรุณาเลือก</option>
										<option value="ศิษย์เก่า" <?php if(!empty($row) and $row->profile_type == 'ศิษย์เก่า') echo 'selected';?>>ศิษย์เก่า</option>
										<option value="นักเรียนทุน" <?php if(!empty($row) and $row->profile_type == 'นักเรียนทุน') echo 'selected';?>>นักเรียนทุน</option>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ปี</label>
					            <div class="col-md-9">
                       				<select name="profile_year" id="profile_year" class="form-control" required>
										<option value="">กรุณาเลือก</option>
<?php
for($i = date('Y') - 2; $i <= date('Y') + 10; $i++) {
?>
										<option value="<?php echo $i;?>" <?php if(!empty($row) and $row->profile_year == $i) echo 'selected';?>><?php echo $i;?></option>
<?php
}
?>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">รุ่นที่</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_model" id="profile_model" class="form-control" value="<?php if(!empty($row)) echo $row->profile_model;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ประเภททุน</label>
					            <div class="col-md-9">
                       				<select name="profile_capital_type" id="profile_capital_type" class="form-control" onchange="checkCapitalType(this.value);" required>
										<option value="">กรุณาเลือก</option>
										<option value="ม.ปลาย" <?php if(!empty($row) and $row->profile_capital_type == 'ม.ปลาย') echo 'selected';?>>ม.ปลาย</option>
										<option value="ปวช" <?php if(!empty($row) and $row->profile_capital_type == 'ปวช') echo 'selected';?>>ปวช</option>
										<option value="ปวส" <?php if(!empty($row) and $row->profile_capital_type == 'ปวส') echo 'selected';?>>ปวส</option>
										<option value="ป.ตรี" <?php if(!empty($row) and $row->profile_capital_type == 'ป.ตรี') echo 'selected';?>>ป.ตรี</option>
									</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">เลขที่บัตรประชาชน</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_card_no" id="profile_card_no" class="form-control" value="<?php if(!empty($row)) echo $row->profile_card_no;?>" required>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">เพศ</label>
					            <div class="col-md-9">
                       				<input type="radio" name="profile_gender" id="profile_gender" value="ชาย" <?php if(!empty($row) and $row->profile_gender == 'ชาย') echo 'checked';?> required> ชาย
									<input type="radio" name="profile_gender" id="profile_gender" value="หญิง" <?php if(!empty($row) and $row->profile_gender == 'หญิง') echo 'checked';?> required> หญิง
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">คำนำหน้า</label>
					            <div class="col-md-9">
                       				<select name="profile_prefix" id="profile_prefix" class="form-control" required>
										<option value="">กรุณาเลือก</option>
										<option value="เด็กชาย" <?php if(!empty($row) and $row->profile_prefix == 'เด็กชาย') echo 'selected';?>>เด็กชาย</option>
										<option value="เด็กหญิง" <?php if(!empty($row) and $row->profile_prefix == 'เด็กหญิง') echo 'selected';?>>เด็กหญิง</option>
										<option value="นาย" <?php if(!empty($row) and $row->profile_prefix == 'นาย') echo 'selected';?>>นาย</option>
										<option value="นางสาว" <?php if(!empty($row) and $row->profile_prefix == 'นางสาว') echo 'selected';?>>นางสาว</option>
										<option value="นาง" <?php if(!empty($row) and $row->profile_prefix == 'นาง') echo 'selected';?>>นาง</option>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ชื่อ(Th)</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_name_th" id="profile_name_th" class="form-control" value="<?php if(!empty($row)) echo $row->profile_name_th;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">นามสกุล(Th)</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_surname_th" id="profile_surname_th" class="form-control" value="<?php if(!empty($row)) echo $row->profile_surname_th;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ชื่อ(En)</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_name_en" id="profile_name_en" class="form-control" value="<?php if(!empty($row)) echo $row->profile_name_en;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">นามสกุล(En)</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_surname_en" id="profile_surname_en" class="form-control" value="<?php if(!empty($row)) echo $row->profile_surname_en;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Email</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_email_personal" id="profile_email_personal" class="form-control" value="<?php if(!empty($row)) echo $row->profile_email_personal;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">โทร</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_mobile" id="profile_mobile" class="form-control" value="<?php if(!empty($row)) echo $row->profile_mobile;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">วัน เดือน ปีเกิด</label>
					            <div class="col-md-9">
                       				<input type="date" name="profile_date_of_birth" id="profile_date_of_birth" class="form-control" value="<?php if(!empty($row)) echo $row->profile_date_of_birth;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">น้ำหนัก</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_weight" id="profile_weight" class="form-control" value="<?php if(!empty($row)) echo $row->profile_weight;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ส่วนสูง</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_height" id="profile_height" class="form-control" value="<?php if(!empty($row)) echo $row->profile_height;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ภูมิลำเนา</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_domicile" id="profile_domicile" class="form-control" value="<?php if(!empty($row)) echo $row->profile_domicile;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">สถาบันการศึกษา</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_institute" id="profile_institute" class="form-control" value="<?php if(!empty($row)) echo $row->profile_institute;?>" required>
					            </div>
					        </div>

							<div class="form-group div_faculty" style="display: <?php echo $profile_faculty;?>;">
					            <label class="col-md-3 control-label">คณะวิชา</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_faculty" id="profile_faculty" class="form-control" value="<?php if(!empty($row)) echo $row->profile_faculty;?>">
					            </div>
					        </div>

							<div class="form-group">
					            <label class="col-md-3 control-label">สาขาวิชา/แผนการเรียน</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_study_plan" id="profile_study_plan" class="form-control" value="<?php if(!empty($row)) echo $row->profile_study_plan;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">จังหวัดที่ตั้งของสถาบันการศึกษา</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_province_institute" id="profile_province_institute" class="form-control" value="<?php if(!empty($row)) echo $row->profile_province_institute;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">GPAX แรกรับทุน</label>
					            <div class="col-md-9">
                       				<input type="text" name="profile_gpax" id="profile_gpax" class="form-control" value="<?php if(!empty($row)) echo $row->profile_gpax;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">รายได้ครัวเรือนต่อหัวต่อเดือน</label>
					            <div class="col-md-9">
                       				<input type="text" name="profle_salary_per_person_per_month" id="profle_salary_per_person_per_month" class="form-control" value="<?php if(!empty($row)) echo $row->profle_salary_per_person_per_month;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">สถานะการทำงานพิเศษ</label>
					            <div class="col-md-9">
                       				<input type="radio" name="profile_special_working_status" id="profile_special_working_status" value="ทำ" <?php if(!empty($row) and $row->profile_special_working_status == 'ทำ') echo 'checked';?> required> ทำ
									<input type="radio" name="profile_special_working_status" id="profile_special_working_status" value="ไม่ทำ" <?php if(!empty($row) and $row->profile_special_working_status == 'ไม่ทำ') echo 'checked';?> required> ไม่ทำ
					            </div>
					        </div>
							<legend>Password</legend>
							<div class="form-group">
					            <label class="col-md-3 control-label">Password</label>
					            <div class="col-md-9">
                       				<input type="password" name="profile_password" id="profile_password" class="form-control" value="<?php if(!empty($row)) echo $row->profile_password;?>" required>
					            </div>
					        </div>
					        <div class="form-group">
								<label class="col-md-3 control-label"> </label>
								<div class="col-md-9">
									<button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
									<button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
								</div>
							</div>
							</form>                    
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
            
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	<!-- </div> -->
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('asset/backend/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/html5shiv.js');?>"></script>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/respond.min.js');?>"></script>
		<script src="<?php echo base_url('asset/backend/crossbrowserjs/excanvas.min.js');?>"></script>
	<![endif]-->
	<script src="<?php echo base_url('asset/backend/plugins/slimscroll/jquery.slimscroll.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('asset/backend/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});

		function checkCapitalType(capital_type) {
			if(capital_type == 'ป.ตรี') {
				$(".div_faculty").show();
			} else {
				$(".div_faculty").hide();
			}
		}
		
		function resetForm() {
			$(".form-control").val('');
			//CKEDITOR.instances.register_ckeditor.setData('');
		}
	</script>
</body>
</html>
