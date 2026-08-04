		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header">Managed Tables <small><?php if(!empty($title)) echo $title;?></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title"><?php if(!empty($title)) echo $title;?></h4>
                        </div>
                        <div class="panel-body">
                        	<!-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='<?php echo site_url('page_diary/backend/form');?>';" style="margin-bottom: 10px;">Add</button> -->
                            <div class="table-responsive">
								<table id="data-table" class="table table-striped table-bordered">
						            <thead>
						                <tr>
						                	<th class="select-filter">ID</th>
						                    <th>นักเรียนทุน</th>
											<th>Living</th>
											<th>Finance</th>
											<th>Study</th>
											<th>Relationship</th>
											<th>Happiness</th>
						                    <th>Action</th>
						                </tr>
						            </thead>
						            <tbody>
						            </tbody>
						        </table>                             
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('asset/backend/jquery-1.12.3.js');?>"></script>
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
	<script src="<?php echo base_url('asset/backend/jquery.dataTables.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/js/table-manage-default.demo.min.js');?>"></script>
	<script src="<?php echo base_url('asset/backend/js/apps.min.js');?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script type="text/javascript">
		$(document).ready(function () {
			App.init();

			var table = $('#data-table').DataTable({
				pageLength: 10,
				serverSide: true,
				processing: true,
				ajax: {
					url:'<?php echo site_url('page_diary/backend/server_processing'); ?>'
				},
				'columns':[
					{
						data:'pi'
					},
					{
						data:'profile_name_th',
						render:function(data, type, row) {
							var profile_name_th = row['profile_name_th'] + ' ' + row['profile_surname_th'];

							return profile_name_th;
						}
					},
					{
						data:'page_diary_life1',
						render:function(data, type, row) {
							var i = 0;
							var life = 0;
							if(!isNaN(row['page_diary_life1']) && row['page_diary_life1'] != '') {
								life += parseInt(row['page_diary_life1']);
								i++;
							}

							if(!isNaN(row['page_diary_life2']) && row['page_diary_life2'] != '') {
								life += parseInt(row['page_diary_life2']);
								i++;
							}

							if(!isNaN(row['page_diary_life2_1']) && row['page_diary_life2_1'] != '') {
								life += parseInt(row['page_diary_life2_1']);
								i++;
							}

							if(!isNaN(row['page_diary_life2_2']) && row['page_diary_life2_2'] != '') {
								life += parseInt(row['page_diary_life2_2']);
								i++;
							}

							if(!isNaN(row['page_diary_life3_1']) && row['page_diary_life3_1'] != '') {
								life += parseInt(row['page_diary_life3_1']);
								i++;
							}

							if(!isNaN(row['page_diary_life3_2']) && row['page_diary_life3_2'] != '') {
								life += parseInt(row['page_diary_life3_2']);
								i++;
							}

							var page_diary_life1 = Math.ceil(life / i);

							if(page_diary_life1 <= 3) {
								page_diary_life = '<span style="color: red;">' + page_diary_life1 + '</span>';
							} else {
								page_diary_life = page_diary_life1;
							}

							return page_diary_life;
						},
						orderable: false
					},
					{
						data:'page_diary_money_from_home1',
						render:function(data, type, row) {
							var i = 0;
							var money_from_home = 0;
							if(!isNaN(row['page_diary_money_from_home1']) && row['page_diary_money_from_home1'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home1']);
								i++;
							}

							if(!isNaN(row['page_diary_money_from_home2']) && row['page_diary_money_from_home2'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home2']);
								i++;
							}

							if(!isNaN(row['page_diary_money_from_home2_1']) && row['page_diary_money_from_home2_1'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home2_1']);
								i++;
							}

							if(!isNaN(row['page_diary_money_from_home2_2']) && row['page_diary_money_from_home2_2'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home2_2']);
								i++;
							}

							if(!isNaN(row['page_diary_money_from_home3_1']) && row['page_diary_money_from_home3_1'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home3_1']);
								i++;
							}

							if(!isNaN(row['page_diary_money_from_home3_2']) && row['page_diary_money_from_home3_2'] != '') {
								money_from_home += parseInt(row['page_diary_money_from_home3_2']);
								i++;
							}

							var page_diary_money_from_home1 = Math.ceil(money_from_home / i);

							if(page_diary_money_from_home1 <= 3) {
								page_diary_money_from_home = '<span style="color: red;">' + page_diary_money_from_home1 + '</span>';
							} else {
								page_diary_money_from_home = page_diary_money_from_home1;
							}

							return page_diary_money_from_home;
						},
						orderable: false
					},
					{
						data:'page_diary_study1',
						render:function(data, type, row) {
							var i = 0;
							var study = 0;
							if(!isNaN(row['page_diary_study1']) && row['page_diary_study1'] != '') {
								study += parseInt(row['page_diary_study1']);
								i++;
							}

							if(!isNaN(row['page_diary_study2']) && row['page_diary_study2'] != '') {
								study += parseInt(row['page_diary_study2']);
								i++;
							}

							if(!isNaN(row['page_diary_study2_1']) && row['page_diary_study2_1'] != '') {
								study += parseInt(row['page_diary_study2_1']);
								i++;
							}

							if(!isNaN(row['page_diary_study2_2']) && row['page_diary_study2_2'] != '') {
								study += parseInt(row['page_diary_study2_2']);
								i++;
							}

							if(!isNaN(row['page_diary_study3_1']) && row['page_diary_study3_1'] != '') {
								study += parseInt(row['page_diary_study3_1']);
								i++;
							}

							if(!isNaN(row['page_diary_study3_2']) && row['page_diary_study3_2'] != '') {
								study += parseInt(row['page_diary_study3_2']);
								i++;
							}

							var page_diary_study1 = Math.ceil(study / i);

							if(page_diary_study1 <= 3) {
								page_diary_study = '<span style="color: red;">' + page_diary_study1 + '</span>';
							} else {
								page_diary_study = page_diary_study1;
							}

							return page_diary_study;
						},
						orderable: false
					},
					{
						data:'page_diary_relation1',
						render:function(data, type, row) {
							var i = 0;
							var relation = 0;
							if(!isNaN(row['page_diary_relation1']) && row['page_diary_relation1'] != '') {
								relation += parseInt(row['page_diary_relation1']);
								i++;
							}

							if(!isNaN(row['page_diary_relation2']) && row['page_diary_relation2'] != '') {
								relation += parseInt(row['page_diary_relation2']);
								i++;
							}

							if(!isNaN(row['page_diary_relation2_1']) && row['page_diary_relation2_1'] != '') {
								relation += parseInt(row['page_diary_relation2_1']);
								i++;
							}

							if(!isNaN(row['page_diary_relation2_2']) && row['page_diary_relation2_2'] != '') {
								relation += parseInt(row['page_diary_relation2_2']);
								i++;
							}

							if(!isNaN(row['page_diary_relation3_1']) && row['page_diary_relation3_1'] != '') {
								relation += parseInt(row['page_diary_relation3_1']);
								i++;
							}

							if(!isNaN(row['page_diary_relation3_2']) && row['page_diary_relation3_2'] != '') {
								relation += parseInt(row['page_diary_relation3_2']);
								i++;
							}

							var page_diary_relation1 = Math.ceil(relation / i);

							if(page_diary_relation1 <= 3) {
								page_diary_relation = '<span style="color: red;">' + page_diary_relation1 + '</span>';
							} else {
								page_diary_relation = page_diary_relation1;
							}

							return page_diary_relation;
						},
						orderable: false
					},
					{
						data:'page_diary_happy1',
						render:function(data, type, row) {
							var i = 0;
							var happy = 0;
							if(!isNaN(row['page_diary_happy1']) && row['page_diary_happy1'] != '') {
								happy += parseInt(row['page_diary_happy1']);
								i++;
							}

							if(!isNaN(row['page_diary_happy2']) && row['page_diary_happy2'] != '') {
								happy += parseInt(row['page_diary_happy2']);
								i++;
							}

							if(!isNaN(row['page_diary_happy2_1']) && row['page_diary_happy2_1'] != '') {
								happy += parseInt(row['page_diary_happy2_1']);
								i++;
							}

							if(!isNaN(row['page_diary_happy2_2']) && row['page_diary_happy2_2'] != '') {
								happy += parseInt(row['page_diary_happy2_2']);
								i++;
							}

							if(!isNaN(row['page_diary_happy3_1']) && row['page_diary_happy3_1'] != '') {
								happy += parseInt(row['page_diary_happy3_1']);
								i++;
							}

							if(!isNaN(row['page_diary_happy3_2']) && row['page_diary_happy3_2'] != '') {
								happy += parseInt(row['page_diary_happy3_2']);
								i++;
							}

							var page_diary_happy1 = Math.ceil(happy / i);

							if(page_diary_happy1 <= 3) {
								page_diary_happy = '<span style="color: red;">' + page_diary_happy1 + '</span>';
							} else {
								page_diary_happy = page_diary_happy1;
							}

							return page_diary_happy;
						},
						orderable: false
					},
					{
						data:'action',
						render:function(data, type, row){
							var action = '<a href="<?php echo site_url('page_diary/backend/form');?>/' + row['profile_id'] + '">Edit</a>';
							
							return action;
						},
						orderable: false
					}
				]
			});
		})
  	</script>
</body>
</html>
