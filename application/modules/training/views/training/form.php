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
							<form action="<?php echo site_url('training/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
					            <label class="col-md-3 control-label">นักเรียนทุน</label>
					            <div class="col-md-9">
                       				<select name="profile_id" id="profile_id" class="form-control" required>
                       					<option value="">Please Select</option>
<?php
if(!empty($profile)) {
	foreach($profile as $r) {
?>
										<option value="<?php echo $r->profile_id;?>" <?php if(!empty($row)) { if($row->profile_id == $r->profile_id) echo 'selected'; }?>><?php echo $r->profile_name_th.' '.$r->profile_surname_th;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">วันแรกของการฝึกงาน</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_date_begin" id="training_date_begin" class="form-control" value="<?php if(!empty($row)) echo $row->training_date_begin;?>" required>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">วันสุดท้ายของการฝึกงาน</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_date_end" id="training_date_end" class="form-control" value="<?php if(!empty($row)) echo $row->training_date_end;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">หน่วยงานที่ฝึกงาน</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_department" id="training_department" class="form-control" value="<?php if(!empty($row)) echo $row->training_department;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">บริษัทที่ฝึกงาน</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_company" id="training_company" class="form-control" value="<?php if(!empty($row)) echo $row->training_company;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">สถานที่ฝึกงาน</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_place" id="training_place" class="form-control" value="<?php if(!empty($row)) echo $row->training_place;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">ผลการนิเทศการฝึกงานโดย CPSP</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_grade" id="training_grade" class="form-control" value="<?php if(!empty($row)) echo $row->training_grade;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">คำอธิบายผลคะแนนนิเทศ</label>
					            <div class="col-md-9">
                       				<input type="text" name="training_description_grade" id="training_description_grade" class="form-control" value="<?php if(!empty($row)) echo $row->training_description_grade;?>" required>
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
			CKEDITOR.instances.training_ckeditor.setData('');
		}
	</script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script>
	$(function() {
		$("#training_date_begin").datepicker({ dateFormat: 'yy-mm-dd' });
	});

	$(function() {
		$("#training_date_end").datepicker({ dateFormat: 'yy-mm-dd' });
	});
	</script>
</body>
</html>
