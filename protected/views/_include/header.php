<?php 
 $user = Yii::app()->user;
 $userInfo=$user->getState('userInfo');
?>
<!-- BEGIN HEADER -->   
	<div class="header navbar  navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" href="index.html">
			<img src="<?php echo Yii::app()->baseUrl?>/assets/img/logo.png" alt="logo" class="img-responsive" />
			</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo Yii::app()->baseUrl?>/assets/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">

				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            <img  style="height: 28px" src="<?php echo Yii::app()->baseUrl.'/upload/'.$userInfo['avatar'];  ?>"/>
					<span class="username"><?php echo $userInfo['realname'] ;?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo Yii::app()->createUrl("/adminis/profile/index") ?>"><i class="fa fa-user"></i> 个人资料</a></li>
						<li><a href="page_calendar.html"><i class="fa fa-calendar"></i> 我的日记</a></li>
						<li><a href="inbox.html"><i class="fa fa-envelope"></i> 我的收件箱 <span class="badge badge-danger">3</span></a></li>
						<li><a href="#"><i class="fa fa-tasks"></i> 我的任务 <span class="badge badge-success">7</span></a></li>
						<li class="divider"></li>
						<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> 全屏</a></li>
						<li><a href="<?php echo Yii::app()->createUrl("/adminis/public/lock") ?>"><i class="fa fa-lock"></i> 锁屏</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl("/adminis/public/logout") ?>"><i class="fa fa-key"></i> 退出</a></li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix"></div>
