		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">Managed Form <small><?php if(!empty($title)) echo $title;?></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
<?php
	$this->form_validation->set_error_delimiters('<div style="color:red; padding-bottom:5px;" class="form-control parsley-error">', '</div><br>'); 
	echo validation_errors(); 
?>
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
							<form action="<?php echo site_url('planning_your_project/backend/level_planning_your_project_save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
					            <label class="col-md-3 control-label">นักเรียนทุน</label>
					            <div class="col-md-9">
                       				<select name="profile_id" id="level_planning_your_project_name" class="form-control" required>
										<option value="">กรุณาเลือก</option>
<?php
if(!empty($profile)) {
	foreach($profile as $r) {
?>
										<option value="<?php echo $r->profile_id;?>" <?php if(!empty($row) and $row->profile_id == $r->profile_id) echo 'selected';?>><?php echo $r->profile_name_th.' '.$r->profile_surname_th;?></option>
<?php
	}
}
?>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Embed Youtube</label>
					            <div class="col-md-9">
                       				<input type="text" name="level_planning_your_project_embed_youtube" id="level_planning_your_project_embed_youtube" class="form-control" value="<?php if(!empty($row)) echo $row->level_planning_your_project_embed_youtube;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Image</label>
					            <div class="col-md-9">
                       				<input type="file" name="level_planning_your_project_embed_image" id="level_planning_your_project_embed_image" class="form-control"> Recommend 1600 x 900 px
<?php
if(!empty($row)) {
	if($row->level_planning_your_project_embed_image != '') {
?>
									<br><img src="<?php echo base_url('uploads/ford/'.$row->level_planning_your_project_embed_image);?>" width="150">
<?php
	}
}
?>           
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Name</label>
					            <div class="col-md-9">
                       				<select name="level_planning_your_project_name" id="level_planning_your_project_name" class="form-control" required>
										<option value="">กรุณาเลือก</option>
										<option value="ขั้นต้น" <?php if(!empty($row) and $row->level_planning_your_project_name == 'ขั้นต้น') echo 'selected';?>>ขั้นต้น</option>
										<option value="ขั้นกลาง" <?php if(!empty($row) and $row->level_planning_your_project_name == 'ขั้นกลาง') echo 'selected';?>>ขั้นกลาง</option>
										<option value="ขั้นสูง" <?php if(!empty($row) and $row->level_planning_your_project_name == 'ขั้นสูง') echo 'selected';?>>ขั้นสูง</option>
									</select>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Description</label>
					            <div class="col-md-9">
                       				<textarea name="level_planning_your_project_description" id="level_planning_your_project_description" class="form-control" rows="4" required><?php if(!empty($row)) echo $row->level_planning_your_project_description;?></textarea>
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
			CKEDITOR.instances.level_planning_your_project_ckeditor.setData('');
		}
	</script>
</body>
</html>
