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
							<form action="<?php echo site_url('webboard/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
					        <div class="form-group">
					            <label class="col-md-3 control-label">Username</label>
					            <div class="col-md-9">
                       				<input type="text" name="webboard_username" id="webboard_username" class="form-control" value="<?php if(!empty($row)) echo $row->webboard_username; else echo $this->session->userdata('session_username');?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Topic</label>
					            <div class="col-md-9">
                       				<input type="text" name="webboard_topic" id="webboard_topic" class="form-control" value="<?php if(!empty($row)) echo $row->webboard_topic;?>" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Datetime</label>
					            <div class="col-md-5">
                       				<input type="date" name="webboard_date" id="webboard_date" class="form-control" value="<?php if(!empty($row)) echo date2DateFormat($row->webboard_datetime);?>" required>
					            </div>
								<div class="col-md-2">
									<select name="webboard_hour" id="webboard_hour" class="form-control" required>
										<option value="">Please Select</option>
<?php
for($i = 0; $i <= 23; $i++) {
	if(strlen($i) == 1) {
		$ii = '0'.$i;
	} else {
		$ii = $i;
	}
?>
										<option value="<?php echo $ii;?>" <?php if(!empty($row) and date2HourFormat($row->webboard_datetime) == $ii) echo 'selected';?>><?php echo $ii;?></option>
<?php
}
?>
									</select>
								</div>
								<div class="col-md-2">
									<select name="webboard_minute" id="webboard_minute" class="form-control" required>
										<option value="">Please Select</option>
<?php
for($i = 0; $i <= 59; $i++) {
	if(strlen($i) == 1) {
		$ii = '0'.$i;
	} else {
		$ii = $i;
	}
?>
										<option value="<?php echo $ii;?>" <?php if(!empty($row) and date2MinuteFormat($row->webboard_datetime) == $ii) echo 'selected';?>><?php echo $ii;?></option>
<?php
}
?>
									</select>
								</div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Detail</label>
					            <div class="col-md-9">
                       				<textarea name="webboard_detail" id="webboard_detail" class="form-control"><?php if(!empty($row)) echo $row->webboard_detail;?></textarea>
                       				<?php echo textarea_ckeditor('webboard_detail');?>
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
<?php
if($id != '') {
	if(!empty($chat)) {
		foreach($chat as $c) {
?>
							<legend>Chat History</legend>
							<form action="<?php echo site_url('webboard/backend/chat_history/'.$id.'/'.$c->profile_id);?>" method="post">
<?php
			$chat_history = $this->model_webboard->getChatHistoryResult($c->webboard_id, $c->profile_id);

			//pre($chat_history);

			if(!empty($chat_history)) {
				foreach($chat_history as $r) {

					if($r->user_id != 0) {
						$user = $this->model_webboard->getUserRow($r->user_id);
?>
				<div class="message-list">
					<div class="message-sender"><span>From : </span><?php echo $user->user_name;?> (<?php echo $user->user_username;?>)<span> -  <?php echo $r->my_message_datetime_create;?> น.</span></div>
					<p><?php echo $r->my_message_answer;?></p>
					<!-- <div class="message-action">
						<button><i class="fas fa-reply"></i></button>
						<button><i class="fas fa-trash-alt"></i></button>
					</div> -->
				</div>
<?php				
					} elseif($r->profile_id != 0) {
						$profile = $this->model_webboard->getProfileRow($r->profile_id);
?>
				<div class="message-list">
					<div class="message-sender"><span>From : </span><?php echo $profile->profile_name_th.' '.$profile->profile_surname_th;?> <span> -  <?php echo $r->my_message_datetime_create;?> น.</span></div>
					<p><?php echo $r->my_message_answer;?></p>
					<!-- <div class="message-action">
						<button><i class="fas fa-reply"></i></button>
						<button><i class="fas fa-trash-alt"></i></button>
					</div> -->
				</div>
<?php
					}
				}
			}
?>
								<legend>ตอบกลับ</legend>
								<div class="row">
									<div class="col-md-12">
										<textarea name="my_message_answer" id="my_message_answer" class="form-control" rows="4"></textarea>
									</div>
								</div>
								<br>
								<div class="form-group">
								<label class="col-md-3 control-label"> </label>
								<div class="col-md-9">
									<button class="btn btn-sm btn-primary m-r-5" type="submit">ตอบกลับ</button>
									<button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
								</div>
							</div>
							</form>
<?php
		}
	}
}
?>
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
			CKEDITOR.instances.webboard_ckeditor.setData('');
		}
	</script>
</body>
</html>
