<!-- BEGIN PAGE HEADER-->   


			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						菜单管理 <small>添加菜单</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">菜单</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">创建菜单</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-reorder"></i>添加菜单</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php  $this->renderPartial("_form",array('model'=>$model)) ?>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			
			
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/respond.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/form-validation.js"></script> 
	<!-- END PAGE LEVEL STYLES -->    
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		   FormValidation.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->