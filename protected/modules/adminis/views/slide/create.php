<!-- BEGIN PAGE HEADER-->   


			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						图片管理 <small>添加图片</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">图片</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">创建图片</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
			
							<!-- BEGIN FORM-->
							<?php  $this->renderPartial("_form",array('model'=>$model)) ?>
							<!-- END FORM-->
						
			
			
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