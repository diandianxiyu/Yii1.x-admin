<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0.2
Version: 1.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo Yii::app()->name; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="<?php echo Yii::app()->baseUrl?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/pages/lock.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->baseUrl?>/assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl?>/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="page-lock">
		<div class="page-logo">
			<a class="brand" href="index.html">
			<img src="<?php echo Yii::app()->baseUrl?>/assets/img/logo-big.png" alt="logo" />
			</a>
		</div>
		<div class="page-body">
			<img class="page-lock-img" src="<?php echo Yii::app()->baseUrl.'/upload/'.$userInfo['avatar']?>" alt="">
			<div class="page-lock-info">
				<h1><?php  echo $userInfo['realname'];?></h1>
				<span class="email"><?php  echo $userInfo['email'];?></span>
				<span class="locked">锁屏</span>
				<form class="form-inline" action="<?php echo Yii::app()->createUrl("adminis/public/lock") ?>" method="post">
					<div class="input-group input-medium">
                                            <input type="password" class="form-control" placeholder="密码" name="passwd">
						<span class="input-group-btn">        
						<button type="submit" class="btn blue icn-only"><i class="m-icon-swapright m-icon-white"></i></button>
						</span>
					</div>
					<!-- /input-group -->
					<div class="relogin">
						<a href="<?php echo Yii::app()->createUrl("adminis/Public/Logout") ?>">不是 <?php  echo $userInfo['realname'];?> ?</a>
					</div>
				</form>
			</div>
		</div>
		<div class="page-footer">
			2013 &copy; <?php echo $this->_author ?> - <?php echo $this->_cmsName ?>.
		</div>
	</div>
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
	<script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->   
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/app.js"></script>  
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/lock.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		   Lock.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>