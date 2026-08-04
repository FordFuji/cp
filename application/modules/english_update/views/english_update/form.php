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
							<form action="<?php echo site_url('english_update/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
					            <label class="col-md-3 control-label">นักเรียนทุน</label>
					            <div class="col-md-9">
                       				<select name="profile_id" id="profile_id" class="form-control" required>
                       					<option value="">Please Select</option>
<?php
if(!empty($profile)) {
	foreach($profile as $r) {
?>
										<option value="<?php echo $r->profile_id;?>" <?php if(!empty($row)) { if($row->profile_id == $r->profile_id) echo 'selected'; }?>><?php echo $r->profile_name_th.' '.$r->profile_name_en;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Year</label>
					            <div class="col-md-9">
                       				<select name="english_update_year" id="english_update_year" class="form-control" required>
										<option value="">Please Select</option>
<?php
for($i = date('Y') - 2; $i <= date('Y') + 10; $i++) {
?>
										<option value="<?php echo $i;?>" <?php if(!empty($row)) { if($row->english_update_year == $i) echo 'selected'; }?>><?php echo $i;?></option>
<?php
}
?>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Quarter</label>
					            <div class="col-md-9">
                       				<select name="english_update_quarter" id="english_update_quarter" class="form-control" required>
										<option value="">Please Select</option>
										<option value="Q1" <?php if(!empty($row)) { if($row->english_update_quarter == 'Q1') echo 'selected'; }?>>Q1</option>
										<option value="Q2" <?php if(!empty($row)) { if($row->english_update_quarter == 'Q2') echo 'selected'; }?>>Q2</option>
										<option value="Q3" <?php if(!empty($row)) { if($row->english_update_quarter == 'Q3') echo 'selected'; }?>>Q3</option>
										<option value="Q4" <?php if(!empty($row)) { if($row->english_update_quarter == 'Q4') echo 'selected'; }?>>Q4</option>
									</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Hours</label>
					            <div class="col-md-9">
                       				<input type="number" name="english_update_hours" id="english_update_hours" class="form-control" value="<?php if(!empty($row)) echo $row->english_update_hours;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Level</label>
					            <div class="col-md-9">
                       				<input type="text" name="english_update_level" id="english_update_level" class="form-control" value="<?php if(!empty($row)) echo $row->english_update_level;?>" required>
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
			CKEDITOR.instances.english_update_ckeditor.setData('');
		}
	</script>
</body>
</html>
