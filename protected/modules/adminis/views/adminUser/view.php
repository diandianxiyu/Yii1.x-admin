<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						管理员管理 <small>管理后台用户</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							<button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							<span>Actions</span> <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">管理员管理</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">管理员信息</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div

<!-- BEGIN PAGE CONTENT-->

			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1_1" data-toggle="tab">管理员信息</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-5">
										<ul class="list-unstyled profile-nav">
											<li><img src="<?php echo Yii::app()->baseUrl."/upload/".$model->attributes['avatar'] ?>" class="img-responsive" alt="<?php echo $model->attributes['username'];?>" /> 
												
											</li>
                                                                                        <li><a href="<?php echo Yii::app()->createUrl("adminis/adminUser/update", array('id'=>$model->attributes['id']));?>">修改信息</a></li>
											<li><a href="<?php echo Yii::app()->createUrl("adminis/adminUser/index");?>">管理员列表</a></li>
											
											
										</ul>
									</div>
									<div class="col-md-7">
										<div class="row">
											
											<!--end col-md-8-->
											<div class="col-md-6">
												<div class="portlet sale-summary">
													<div class="portlet-title">
														<div class="caption">个人资料</div>
														<div class="tools">
															
														</div>
													</div>
                                                                                                    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
													<div class="portlet-body">
														<ul class="list-unstyled">
															<li>
																<span class="sale-info"><?php echo $form->labelEx($model,'username'); ?></span> 
																<span class="sale-num"><?php echo $model->attributes['username'];?></span>
															</li>
															<li>
																<span class="sale-info"><?php echo $form->labelEx($model,'realname'); ?></span> 
																<span class="sale-num"><?php echo $model->attributes['realname'];?></span>
															</li>
															<li>
																<span class="sale-info"><?php echo $form->labelEx($model,'regtime'); ?></span> 
                                                                                                                                                                                                                        <span class="sale-num"><?php echo date("Y-m-d H:i:s",$model->attributes['regtime']);?></span>
															</li>
															<li>
																<span class="sale-info"><?php echo $form->labelEx($model,'department'); ?></span> 
																<span class="sale-num"><?php echo $fkmodel->find('id = :id',array(':id'=>$model->attributes['department']))->attributes['name'];  ?></span>
															</li>
                                                                                                                        <li>
																<span class="sale-info"><?php echo $form->labelEx($model,'email'); ?></span> 
                                                                                                                                                                                                                        <span class="sale-num"><?php echo $model->attributes['email'];?></span>
															</li>
                                                                                                                        <li>
																<span class="sale-info"><?php echo $form->labelEx($model,'mobile'); ?></span> 
                                                                                                                                                                                                                        <span class="sale-num"><?php echo $model->attributes['mobile'];?></span>
															</li>
                                                                                                                        <li>
																<span class="sale-info"><?php echo $form->labelEx($model,'disable'); ?></span> 
                                                                                                                                                                                                                        <span class="sale-num"><?php echo $model->attributes['disable']==0?'否':'是';?></span>
															</li>
														</ul>
													</div>
                                                                                                    <?php $this->endWidget(); ?>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
										
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
                        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->   
        <link href="<?php echo Yii::app()->baseUrl?>/assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
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
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo Yii::app()->baseUrl?>/assets/scripts/app.js"></script>      
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->