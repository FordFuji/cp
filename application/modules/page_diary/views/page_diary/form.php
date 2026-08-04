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
							<form action="<?php echo site_url('page_diary/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<legend>Year 1 Part 1 - แรกเข้าเป็นผู้รับทุน</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label">ชีวิตความเป็นอยู่</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_life1" id="page_diary_life1" value="1" <?php if(!empty($row) and $row->page_diary_life1 == '1') echo 'checked';?> required> 1 แย่ลง
									<input type="radio" name="page_diary_life1" id="page_diary_life1" value="2" <?php if(!empty($row) and $row->page_diary_life1 == '2') echo 'checked';?> required> 2 เท่าเดิม คงเดิม
									<input type="radio" name="page_diary_life1" id="page_diary_life1" value="3" <?php if(!empty($row) and $row->page_diary_life1 == '3') echo 'checked';?> required> 3 ดีขึ้นเพียงเล็กน้อย
									<input type="radio" name="page_diary_life1" id="page_diary_life1" value="4" <?php if(!empty($row) and $row->page_diary_life1 == '4') echo 'checked';?> required> 4 ดีขึ้นกว่าเดิมมาก
									<input type="radio" name="page_diary_life1" id="page_diary_life1" value="5" <?php if(!empty($row) and $row->page_diary_life1 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_life_other1;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">การเงินทางบ้าน</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_money_from_home1" id="page_diary_money_from_home1" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home1 == '1') echo 'checked';?> required> 1 ไม่พอใช้ และมีหนี้สิน
									<input type="radio" name="page_diary_money_from_home1" id="page_diary_money_from_home1" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home1 == '2') echo 'checked';?> required> 2 ไม่พอใช้ ไม่มีหนี้สิน
									<input type="radio" name="page_diary_money_from_home1" id="page_diary_money_from_home1" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home1 == '3') echo 'checked';?> required> 3 พอใช้เดือนชนเดือน
									<input type="radio" name="page_diary_money_from_home1" id="page_diary_money_from_home1" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home1 == '4') echo 'checked';?> required> 4 มีเหลือเก็บ
									<input type="radio" name="page_diary_money_from_home1" id="page_diary_money_from_home1" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home1 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_money_from_home_other1;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">การเรียน</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_study1" id="page_diary_study1" value="1" <?php if(!empty($row) and $row->page_diary_study1 == '1') echo 'checked';?> required> 1 แย่ลงกว่าเดิม
									<input type="radio" name="page_diary_study1" id="page_diary_study1" value="2" <?php if(!empty($row) and $row->page_diary_study1 == '2') echo 'checked';?> required> 2 เสมอตัว
									<input type="radio" name="page_diary_study1" id="page_diary_study1" value="3" <?php if(!empty($row) and $row->page_diary_study1 == '3') echo 'checked';?> required> 3 ดีขึ้นกว่าเดิมเพียงเล็กน้อย
									<input type="radio" name="page_diary_study1" id="page_diary_study1" value="4" <?php if(!empty($row) and $row->page_diary_study1 == '4') echo 'checked';?> required> 4 ดีขึ้นกว่าเดิมมาก
									<input type="radio" name="page_diary_study1" id="page_diary_study1" value="5" <?php if(!empty($row) and $row->page_diary_study1 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_study_other1;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ความสัมพันธ์</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_relation1" id="page_diary_relation1" value="1" <?php if(!empty($row) and $row->page_diary_relation1 == '1') echo 'checked';?> required> 1 มีเพื่อนน้อยลง ปรับตัวยากขึ้น
									<input type="radio" name="page_diary_relation1" id="page_diary_relation1" value="2" <?php if(!empty($row) and $row->page_diary_relation1 == '2') echo 'checked';?> required> 2 เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ
									<input type="radio" name="page_diary_relation1" id="page_diary_relation1" value="3" <?php if(!empty($row) and $row->page_diary_relation1 == '3') echo 'checked';?> required> 3 ปรับตัวได้ดี มีความสุขกับสังคม
									<input type="radio" name="page_diary_relation1" id="page_diary_relation1" value="4" <?php if(!empty($row) and $row->page_diary_relation1 == '4') echo 'checked';?> required> 4 มีความสุขกับสังคมที่อาศัยอยู่มาก
									<input type="radio" name="page_diary_relation1" id="page_diary_relation1" value="5" <?php if(!empty($row) and $row->page_diary_relation1 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_relation_other1;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ความสุข</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_happy1" id="page_diary_happy1" value="1" <?php if(!empty($row) and $row->page_diary_happy1 == '1') echo 'checked';?> required> 1 รู้สึกแย่กว่าเดิม
									<input type="radio" name="page_diary_happy1" id="page_diary_happy1" value="2" <?php if(!empty($row) and $row->page_diary_happy1 == '2') echo 'checked';?> required> 2 รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง
									<input type="radio" name="page_diary_happy1" id="page_diary_happy1" value="3" <?php if(!empty($row) and $row->page_diary_happy1 == '3') echo 'checked';?> required> 3 รู้สึกมีความสุขเป็นส่วนใหญ่
									<input type="radio" name="page_diary_happy1" id="page_diary_happy1" value="4" <?php if(!empty($row) and $row->page_diary_happy1 == '4') echo 'checked';?> required> 4 รู้สึกมีความสุขมากขึ้น
									<input type="radio" name="page_diary_happy1" id="page_diary_happy1" value="5" <?php if(!empty($row) and $row->page_diary_happy1 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_happy_other1;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">อธิบายเพิ่มเติมสั้นๆ</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<textarea name="page_diary_note1" id="page_diary_note1" class="form-control" rows="4"><?php if(!empty($row)) echo $row->page_diary_note1;?></textarea>
					            </div>
					        </div>
							<legend>Year 1 Part 2 - เป็น นร ทุนมาแล้ว 6 เดือน</legend>
					        <div class="form-group">
					            <label class="col-md-3 control-label">ชีวิตความเป็นอยู่</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_life2" id="page_diary_life2" value="1" <?php if(!empty($row) and $row->page_diary_life2 == '1') echo 'checked';?> required> 1 แย่ลง
									<input type="radio" name="page_diary_life2" id="page_diary_life2" value="2" <?php if(!empty($row) and $row->page_diary_life2 == '2') echo 'checked';?> required> 2 เท่าเดิม คงเดิม
									<input type="radio" name="page_diary_life2" id="page_diary_life2" value="3" <?php if(!empty($row) and $row->page_diary_life2 == '3') echo 'checked';?> required> 3 ดีขึ้นเพียงเล็กน้อย
									<input type="radio" name="page_diary_life2" id="page_diary_life2" value="4" <?php if(!empty($row) and $row->page_diary_life2 == '4') echo 'checked';?> required> 4 ดีขึ้นกว่าเดิมมาก
									<input type="radio" name="page_diary_life2" id="page_diary_life2" value="5" <?php if(!empty($row) and $row->page_diary_life2 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_life_other2;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">การเงินทางบ้าน</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_money_from_home2" id="page_diary_money_from_home2" value="1" <?php if(!empty($row) and $row->page_diary_money_from_home2 == '1') echo 'checked';?> required> 1 ไม่พอใช้ และมีหนี้สิน
									<input type="radio" name="page_diary_money_from_home2" id="page_diary_money_from_home2" value="2" <?php if(!empty($row) and $row->page_diary_money_from_home2 == '2') echo 'checked';?> required> 2 ไม่พอใช้ ไม่มีหนี้สิน
									<input type="radio" name="page_diary_money_from_home2" id="page_diary_money_from_home2" value="3" <?php if(!empty($row) and $row->page_diary_money_from_home2 == '3') echo 'checked';?> required> 3 พอใช้เดือนชนเดือน
									<input type="radio" name="page_diary_money_from_home2" id="page_diary_money_from_home2" value="4" <?php if(!empty($row) and $row->page_diary_money_from_home2 == '4') echo 'checked';?> required> 4 มีเหลือเก็บ
									<input type="radio" name="page_diary_money_from_home2" id="page_diary_money_from_home2" value="5" <?php if(!empty($row) and $row->page_diary_money_from_home2 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_money_from_home_other2;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">การเรียน</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_study2" id="page_diary_study2" value="1" <?php if(!empty($row) and $row->page_diary_study2 == '1') echo 'checked';?> required> 1 แย่ลงกว่าเดิม
									<input type="radio" name="page_diary_study2" id="page_diary_study2" value="2" <?php if(!empty($row) and $row->page_diary_study2 == '2') echo 'checked';?> required> 2 เสมอตัว
									<input type="radio" name="page_diary_study2" id="page_diary_study2" value="3" <?php if(!empty($row) and $row->page_diary_study2 == '3') echo 'checked';?> required> 3 ดีขึ้นกว่าเดิมเพียงเล็กน้อย
									<input type="radio" name="page_diary_study2" id="page_diary_study2" value="4" <?php if(!empty($row) and $row->page_diary_study2 == '4') echo 'checked';?> required> 4 ดีขึ้นกว่าเดิมมาก
									<input type="radio" name="page_diary_study2" id="page_diary_study2" value="5" <?php if(!empty($row) and $row->page_diary_study2 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_study_other2;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ความสัมพันธ์</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_relation2" id="page_diary_relation2" value="1" <?php if(!empty($row) and $row->page_diary_relation2 == '1') echo 'checked';?> required> 1 มีเพื่อนน้อยลง ปรับตัวยากขึ้น
									<input type="radio" name="page_diary_relation2" id="page_diary_relation2" value="2" <?php if(!empty($row) and $row->page_diary_relation2 == '2') echo 'checked';?> required> 2 เริ่มมีเพื่อน เริ่มปรับตัวได้อย่างช้าๆ
									<input type="radio" name="page_diary_relation2" id="page_diary_relation2" value="3" <?php if(!empty($row) and $row->page_diary_relation2 == '3') echo 'checked';?> required> 3 ปรับตัวได้ดี มีความสุขกับสังคม
									<input type="radio" name="page_diary_relation2" id="page_diary_relation2" value="4" <?php if(!empty($row) and $row->page_diary_relation2 == '4') echo 'checked';?> required> 4 มีความสุขกับสังคมที่อาศัยอยู่มาก
									<input type="radio" name="page_diary_relation2" id="page_diary_relation2" value="5" <?php if(!empty($row) and $row->page_diary_relation2 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_relation_other2;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ความสุข</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<input type="radio" name="page_diary_happy2" id="page_diary_happy2" value="1" <?php if(!empty($row) and $row->page_diary_happy2 == '1') echo 'checked';?> required> 1 รู้สึกแย่กว่าเดิม
									<input type="radio" name="page_diary_happy2" id="page_diary_happy2" value="2" <?php if(!empty($row) and $row->page_diary_happy2 == '2') echo 'checked';?> required> 2 รู้สึกเฉยๆ ไม่ดีขึ้น ไม่แย่ลง
									<input type="radio" name="page_diary_happy2" id="page_diary_happy2" value="3" <?php if(!empty($row) and $row->page_diary_happy2 == '3') echo 'checked';?> required> 3 รู้สึกมีความสุขเป็นส่วนใหญ่
									<input type="radio" name="page_diary_happy2" id="page_diary_happy2" value="4" <?php if(!empty($row) and $row->page_diary_happy2 == '4') echo 'checked';?> required> 4 รู้สึกมีความสุขมากขึ้น
									<input type="radio" name="page_diary_happy2" id="page_diary_happy2" value="5" <?php if(!empty($row) and $row->page_diary_happy2 == '5') echo 'checked';?> required> 5 อื่นๆ <?php if(!empty($row)) echo $row->page_diary_happy_other2;?>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">อธิบายเพิ่มเติมสั้นๆ</label>
					            <div class="col-md-9" style="margin-top: 7px;">
                       				<textarea name="page_diary_note2" id="page_diary_note2" class="form-control" rows="4"><?php if(!empty($row)) echo $row->page_diary_note2;?></textarea>
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
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.page_diary_ckeditor.setData('');
		}
	</script>
</body>
</html>
