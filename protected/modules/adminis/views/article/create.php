
<!-- BEGIN PAGE HEADER-->   


			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						文章管理 <small>添加文章</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">文章</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">创建文章</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
			
			
							<?php  $this->renderPartial("_form",array('model'=>$model)) ?>
							
			
			
			<!-- END PAGE CONTENT--> 
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->


<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-multi-select/css/multi-select.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/respond.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>     
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/fuelux/js/spinner.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/scripts/app.js"></script>
	<script src="<?php echo Yii::app()->baseUrl ?>/assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
        
      
        
        
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>
	
	<!-- END JAVASCRIPTS -->   