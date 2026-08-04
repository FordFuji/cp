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
							<form action="<?php echo site_url('souvenir_shop/backend/save_update/'.$id);?>" method="post" enctype="multipart/form-data" class="form-horizontal">
					        <div class="form-group">
					            <label class="col-md-3 control-label">Type</label>
					            <div class="col-md-9">
                       				<select name="souvenir_shop_type" id="souvenir_shop_type" class="form-control" required>
                       					<option value="">Please Select</option>
										<option value="สั่งซื้อเสื้อโปโลโครงการทุน" <?php if(!empty($row)) { if($row->souvenir_shop_type == 'สั่งซื้อเสื้อโปโลโครงการทุน') echo 'selected'; }?>>สั่งซื้อเสื้อโปโลโครงการทุน</option>
										<option value="สั่งซื้อสินค้าผลงานนักเรียนทุน" <?php if(!empty($row)) { if($row->souvenir_shop_type == 'สั่งซื้อสินค้าผลงานนักเรียนทุน') echo 'selected'; }?>>สั่งซื้อสินค้าผลงานนักเรียนทุน</option>
									</select>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Image</label>
					            <div class="col-md-9">
                       				<input type="file" name="souvenir_shop_image" id="souvenir_shop_image" class="form-control"> Recommend 1600 x 900 px
<?php
if(!empty($row)) {
	if($row->souvenir_shop_image != '') {
?>
									<br><img src="<?php echo base_url('uploads/souvenir_shop/'.$row->souvenir_shop_image);?>" width="150">
<?php
	}
}
?>           
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Before Discount Price</label>
					            <div class="col-md-9">
                       				<input type="number" name="souvenir_shop_before_discount_price" id="souvenir_shop_before_discount_price" class="form-control" value="<?php if(!empty($row)) echo $row->souvenir_shop_before_discount_price;?>" step="0.01" required>
					            </div>
					        </div>
							<div class="form-group">
					            <label class="col-md-3 control-label">Price</label>
					            <div class="col-md-9">
                       				<input type="number" name="souvenir_shop_price" id="souvenir_shop_price" class="form-control" value="<?php if(!empty($row)) echo $row->souvenir_shop_price;?>" step="0.01" required>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 control-label">Link Contact</label>
					            <div class="col-md-9">
                       				<input type="text" name="souvenir_shop_contact" id="souvenir_shop_contact" class="form-control" value="<?php if(!empty($row)) echo $row->souvenir_shop_contact;?>" step="0.01" required>
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
			CKEDITOR.instances.souvenir_shop_ckeditor.setData('');
		}
	</script>
</body>
</html>
