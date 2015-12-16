
<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                        <br><br><br><br><br><br><br><br>
						
					
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->          
			<div class="row">
				<div class="col-md-12 page-500">
					<div class=" number">
						<?php echo $code; ?>
					</div>
					<div class=" details">
						<h3>看来是哪里出错了呢.</h3>
						<p>
							<br />
							<?php echo CHtml::encode($message); ?><br /><br />
						</p>
					</div>
				</div>
			</div>
                        
                        
                        <div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
                                        <br><br><br><br><br><br><br><br>
						
					
				</div>
			</div>
                        
			<!-- END PAGE CONTENT-->     
                        <link href="<?php echo Yii::app()->baseUrl?>/assets/css/pages/error.css" rel="stylesheet" type="text/css"/>
                        
                        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/excanvas.min.js"></script>
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/respond.min.js"></script>  
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
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
                
	</script>
	<!-- END JAVASCRIPTS -->