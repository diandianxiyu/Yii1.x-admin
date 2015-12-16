<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						用户资料 <small>用户相关资料</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">用户</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li><a href="#">用户资料</a></li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
			<div class="row profile">
				<div class="col-md-12">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom tabbable-full-width">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1_1" data-toggle="tab">我的资料</a></li>
							<li><a href="#tab_1_3" data-toggle="tab">修改资料</a></li>
							
							<li><a href="#tab_1_6" data-toggle="tab">帮助</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="row">
									<div class="col-md-3">
										<ul class="list-unstyled profile-nav">
											<li><img src="<?php echo Yii::app()->baseUrl.'/upload/'.$userInfo['avatar'];?>" class="img-responsive" alt="" /> 
												
											</li>
											<li><a href="#">项目</a></li>
											<li><a href="#">信息 <span>3</span></a></li>
											<li><a href="#">好友</a></li>
											<li><a href="#">设置</a></li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8 profile-info">
												<h1><?php echo $userInfo['username']; ?></h1>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
												<p><a href="#">www.mywebsite.com</a></p>
												<ul class="list-inline">
													<li><i class="fa fa-map-marker"></i> Spain</li>
													<li><i class="fa fa-calendar"></i> 18 Jan 1982</li>
													<li><i class="fa fa-briefcase"></i> Design</li>
													<li><i class="fa fa-star"></i> Top Seller</li>
													<li><i class="fa fa-heart"></i> BASE Jumping</li>
												</ul>
											</div>
											<!--end col-md-8-->
											<div class="col-md-4">
												<div class="portlet sale-summary">
													<div class="portlet-title">
														<div class="caption">业绩统计</div>
														<div class="tools">
															<a class="reload" href="javascript:;"></a>
														</div>
													</div>
													<div class="portlet-body">
														<ul class="list-unstyled">
															<li>
																<span class="sale-info">TODAY SOLD <i class="fa fa-img-up"></i></span> 
																<span class="sale-num">23</span>
															</li>
															<li>
																<span class="sale-info">WEEKLY SALES <i class="fa fa-img-down"></i></span> 
																<span class="sale-num">87</span>
															</li>
															<li>
																<span class="sale-info">TOTAL SOLD</span> 
																<span class="sale-num">2377</span>
															</li>
															<li>
																<span class="sale-info">EARNS</span> 
																<span class="sale-num">$37.990</span>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!--end col-md-4-->
										</div>
										<!--end row-->
										<div class="tabbable tabbable-custom tabbable-custom-profile">
											<ul class="nav nav-tabs">
												<li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Customers</a></li>
												<li ><a href="#tab_1_22" data-toggle="tab">Feeds</a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="tab_1_11">
													<div class="portlet-body">
														<table class="table table-striped table-bordered table-advance table-hover">
															<thead>
																<tr>
																	<th><i class="fa fa-briefcase"></i> Company</th>
																	<th class="hidden-xs"><i class="fa fa-question"></i> Descrition</th>
																	<th><i class="fa fa-bookmark"></i> Amount</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><a href="#">Pixel Ltd</a></td>
																	<td class="hidden-xs">Server hardware purchase</td>
																	<td>52560.10$ <span class="label label-success label-sm">Paid</span></td>
																	<td><a class="btn default btn-xs green-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																		Smart House
																		</a>  
																	</td>
																	<td class="hidden-xs">Office furniture purchase</td>
																	<td>5760.00$ <span class="label label-warning label-sm">Pending</span></td>
																	<td><a class="btn default btn-xs blue-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																		FoodMaster Ltd
																		</a>
																	</td>
																	<td class="hidden-xs">Company Anual Dinner Catering</td>
																	<td>12400.00$ <span class="label label-success label-sm">Paid</span></td>
																	<td><a class="btn default btn-xs blue-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																		WaterPure Ltd
																		</a>
																	</td>
																	<td class="hidden-xs">Payment for Jan 2013</td>
																	<td>610.50$ <span class="label label-danger label-sm">Overdue</span></td>
																	<td><a class="btn default btn-xs red-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td><a href="#">Pixel Ltd</a></td>
																	<td class="hidden-xs">Server hardware purchase</td>
																	<td>52560.10$ <span class="label label-success label-sm">Paid</span></td>
																	<td><a class="btn default btn-xs green-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																		Smart House
																		</a>  
																	</td>
																	<td class="hidden-xs">Office furniture purchase</td>
																	<td>5760.00$ <span class="label label-warning label-sm">Pending</span></td>
																	<td><a class="btn default btn-xs blue-stripe" href="#">View</a></td>
																</tr>
																<tr>
																	<td>
																		<a href="#">
																		FoodMaster Ltd
																		</a>
																	</td>
																	<td class="hidden-xs">Company Anual Dinner Catering</td>
																	<td>12400.00$ <span class="label label-success label-sm">Paid</span></td>
																	<td><a class="btn default btn-xs blue-stripe" href="#">View</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane" id="tab_1_3">
								<div class="row profile-account">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1-1">
												<i class="fa fa-cog"></i> 
												个人资料
												</a> 
												<span class="after"></span>                                    
											</li>
											<li ><a data-toggle="tab" href="#tab_2-2"><i class="fa fa-picture-o"></i> 修改头像</a></li>
											<li ><a data-toggle="tab" href="#tab_3-3"><i class="fa fa-lock"></i> 修改密码</a></li>
											<li ><a data-toggle="tab" href="#tab_4-4"><i class="fa fa-eye"></i> 个人设置</a></li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1-1" class="tab-pane active">
												<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>true,  
    'enableClientValidation'=>true,  
                    ) );
                                                                                                   
                                                                                                    ?>
               
													<div class="form-group">
                                                                                                                                                                                                    <?php echo $form->labelEx($model,'username',array('class'=>' control-label')); ?>
														 <?php echo $form->textField($model,'username',array('size'=>48,'maxlength'=>48,'class'=>'form-control','placeholder'=>'请输入用户名','disabled'=>true )); ?> 
											
														
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'realname',array('class'=>' control-label')); ?>
														<?php echo $form->textField($model,'realname',array('size'=>48,'maxlength'=>30,'class'=>'form-control','placeholder'=>'请输入姓名')); ?>
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'mobile',array('class'=>' control-label')); ?>
														<?php echo $form->textField($model,'mobile',array('size'=>48,'maxlength'=>18,'class'=>'form-control','placeholder'=>'请输入手机号')); ?> 
													</div>
													<div class="form-group">
														<?php echo $form->labelEx($model,'email',array('class'=>' control-label')); ?>
														<?php echo $form->textField($model,'email',array('size'=>48,'maxlength'=>18,'class'=>'form-control','placeholder'=>'请输入电子邮件地址')); ?> 
                                                                                                        </div>
                                                                                            <div class="form-group" id="quote-of-the-day"></div>
													<div class="margiv-top-10">
                                                                                                                                                                                                               <?php echo CHtml::ajaxSubmitButton("修改", array("profile/AjaxUpdateProfile"), array(
        'type'=>'POST',
        'update'=>'#mydivssss',
        'beforeSend' => 'function(){
            $("#mydivssss").html("loading");
            
        }',
        'complete' => 'function(){
           // $("#mydivssss").html("complete");
            }', ),array("class"=>"btn green")) ; ?>                                      
														
                                                                                                                                                                                                                        <a href="#" class="btn default" >取消</a>
													</div>
												<?php $this->endWidget(); ?>
                                                                                                                               
                                                                                         <div class="form-group" id="mydivssss" ></div>
											</div>
											<div id="tab_2-2" class="tab-pane">
												<p>您可以在这里选择自己喜欢的头像上传。</p>
												<?php $formAvatar=$this->beginWidget('CActiveForm', array(
	'id'=>'avatar-form',
                      'action'=>'AjaxAvatar',
	'enableAjaxValidation'=>true,  
    'enableClientValidation'=>true,  
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
                    ) );
                                                                                                   
                                                                                                    ?>
													<div class="form-group">
                                                                                                            
                                                                                                            
                                                                                                          
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
														<div class="thumbnail" style="width: 310px;">
                                                                                                                    <img src="<?php echo $userInfo['avatar']? Yii::app()->baseUrl.'/upload/'.$userInfo['avatar']:'http://www.placehold.it/310x170/EFEFEF/AAAAAA&amp;text=no+image'; ?>" alt="">
														</div>
                                                                                                            <div class="row">
    
														<div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
															<div class="input-group input-group-fixed">
																<span class="input-group-btn">
																<span class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i> 
																<span class="fileupload-preview"></span>
																</span>
																</span>
																<span class="btn default btn-file">
																<span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择文件 </span>
																<span class="fileupload-exists"><i class="fa fa-undo"></i> 改变 </span>
                                                                                                                                <?php echo $form->fileField($model,'avatar',array('id'=>"fileupload"))?>
																</span>
																<a href="#" class="btn red fileupload-exists" data-dismiss="fileupload" ><i class="fa fa-trash-o"></i> 移除</a>
															</div>
														</div>
														<span class="label label-danger">警告!</span>
                                                                                                                
														<span>
														缩略图只能在Firefox, Chrome, Opera, 
														Safari and Internet Explorer 10 中有效！
														</span>
                                                                                                                
													</div>
													<div class="margin-top-10">
                                                                                                         
														<?php echo CHtml::submitButton("上传", array('class'=> " btn green")) ?> 
														
														<a href="#" class="btn default">Cancel</a>
													</div>
												<?php $this->endWidget(); ?>
                                                                                             <div class="form-group" id="avatardiv" ></div>
                                                                                                        </div>
                                                                                        </div>
											
											<div id="tab_3-3" class="tab-pane">
												<?php $formpwd=$this->beginWidget('CActiveForm', array(
	'id'=>'passwd-form',
	'enableAjaxValidation'=>true,  
    'enableClientValidation'=>true,  
                    ) );
                                                                                                   
                                                                                                    ?>
													<div class="form-group">
														<label class="control-label">原来的密码</label>
														<input type="password" class="form-control" name="oldPasswd" />
													</div>
													<div class="form-group">
														<label class="control-label">新密码</label>
														<input type="password" class="form-control" name ="newPasswd" />
													</div>
													<div class="form-group">
														<label class="control-label">确认密码</label>
														<input type="password" class="form-control" name ="repPasswd" />
													</div>
													<div class="margin-top-10">
														<?php echo CHtml::ajaxSubmitButton("保存密码", array("profile/ajaxUpdatePasswd"), array(
        'type'=>'POST',
        'update'=>'#passwddiv',
        'beforeSend' => 'function(){
            $("#passwddiv").html("loading");
            
        }',
        'complete' => 'function(){
           // $("#passwddiv").html("complete");
            }', ),array("class"=>"btn green")) ; ?>                                      
														<a href="#" class="btn default">取消</a>
													</div>
												<?php $this->endWidget(); ?></form>
                                                                                        <div class="form-group" id="passwddiv" ></div>
											</div>
											<div id="tab_4-4" class="tab-pane">
												<form action="#" class="">
													<table class="table table-bordered table-striped">
														<tr>
															<td>
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
															</td>
															<td>
																<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option1" />
																Yes
																</label>
																<label class="uniform-inline">
																<input type="radio" name="optionsRadios1" value="option2" checked />
																No
																</label>
															</td>
														</tr>
														<tr>
															<td>
																Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes
																</label>
															</td>
														</tr>
														<tr>
															<td>
																Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes
																</label>
															</td>
														</tr>
														<tr>
															<td>
																Enim eiusmod high life accusamus terry richardson ad squid wolf moon
															</td>
															<td>
																<label class="uniform-inline">
																<input type="checkbox" value="" /> Yes
																</label>
															</td>
														</tr>
													</table>
													<!--end profile-settings-->
													<div class="margin-top-10">
														<a href="#" class="btn green">Save Changes</a>
														<a href="#" class="btn default">Cancel</a>
													</div>
												</form>
											</div>
										</div>
									</div>
									<!--end col-md-9-->                                   
								</div>
							</div>
							<!--end tab-pane-->
							<div class="tab-pane" id="tab_1_4">
								<div class="row">
									<div class="col-md-12">
										<div class="add-portfolio">
											<span>502 Items sold this week</span>
											<a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>                          
										</div>
									</div>
								</div>
								<!--end add-portfolio-->
								<div class="row portfolio-block">
									<div class="col-md-5">
										<div class="portfolio-text">
											<img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />
											<div class="portfolio-text-info">
												<h4>Metronic - Responsive Template</h4>
												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="portfolio-info">
											Today Sold
											<span>187</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>1789</span>
										</div>
										<div class="portfolio-info">
											Earns
											<span>$37.240</span>
										</div>
									</div>
									<div class="col-md-2">
										<div class="portfolio-btn">
											<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
										</div>
									</div>
								</div>
								<!--end row-->
								<div class="row portfolio-block">
									<div class="col-md-5 portfolio-text">
										<img src="<?php echo Yii::app()->baseUrl?>/assets/img/profile/portfolio/logo_azteca.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="col-md-5">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>660</span>
										</div>
										<div class="portfolio-info">
											Earns
											<span>$7.060</span>
										</div>
									</div>
									<div class="col-md-2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
									</div>
								</div>
								<!--end row-->
								<div class="row portfolio-block">
									<div class="col-md-5 portfolio-text">
										<img src="<?php echo Yii::app()->baseUrl?>/assets/img/profile/portfolio/logo_conquer.jpg" alt="" />
										<div class="portfolio-text-info">
											<h4>Metronic - Responsive Template</h4>
											<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
										</div>
									</div>
									<div class="col-md-5" style="overflow:hidden;">
										<div class="portfolio-info">
											Today Sold
											<span>24</span>
										</div>
										<div class="portfolio-info">
											Total Sold
											<span>975</span>
										</div>
										<div class="portfolio-info">
											Earns
											<span>$21.700</span>
										</div>
									</div>
									<div class="col-md-2 portfolio-btn">
										<a href="#" class="btn bigicn-only"><span>Manage</span></a>                      
									</div>
								</div>
								<!--end row-->
							</div>
							<!--end tab-pane-->
							<div class="tab-pane" id="tab_1_6">
								<div class="row">
									<div class="col-md-3">
										<ul class="ver-inline-menu tabbable margin-bottom-10">
											<li class="active">
												<a data-toggle="tab" href="#tab_1">
												<i class="fa fa-briefcase"></i> 
												General Questions
												</a> 
												<span class="after"></span>                                    
											</li>
											<li><a data-toggle="tab" href="#tab_2"><i class="fa fa-group"></i> Membership</a></li>
											<li><a data-toggle="tab" href="#tab_3"><i class="fa fa-leaf"></i> Terms Of Service</a></li>
											<li><a data-toggle="tab" href="#tab_1"><i class="fa fa-info-circle"></i> License Terms</a></li>
											<li><a data-toggle="tab" href="#tab_2"><i class="fa fa-tint"></i> Payment Rules</a></li>
											<li><a data-toggle="tab" href="#tab_3"><i class="fa fa-plus"></i> Other Questions</a></li>
										</ul>
									</div>
									<div class="col-md-9">
										<div class="tab-content">
											<div id="tab_1" class="tab-pane active">
												<div id="accordion1" class="panel-group">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
																1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion1_1" class="panel-collapse collapse  in">
															<div class="panel-body">
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
																2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion1_2" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
																3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
																</a>
															</h4>
														</div>
														<div id="accordion1_3" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-warning">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
																4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
																</a>
															</h4>
														</div>
														<div id="accordion1_4" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
																5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
																</a>
															</h4>
														</div>
														<div id="accordion1_5" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
																6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
																</a>
															</h4>
														</div>
														<div id="accordion1_6" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
																7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
																</a>
															</h4>
														</div>
														<div id="accordion1_7" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_2" class="tab-pane">
												<div id="accordion2" class="panel-group">
													<div class="panel panel-warning">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_1">
																1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion2_1" class="panel-collapse collapse  in">
															<div class="panel-body">
																<p>
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
																<p>
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
															</div>
														</div>
													</div>
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_2">
																2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion2_2" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_3">
																3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
																</a>
															</h4>
														</div>
														<div id="accordion2_3" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_4">
																4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
																</a>
															</h4>
														</div>
														<div id="accordion2_4" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_5">
																5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
																</a>
															</h4>
														</div>
														<div id="accordion2_5" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_6">
																6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
																</a>
															</h4>
														</div>
														<div id="accordion2_6" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2_7">
																7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
																</a>
															</h4>
														</div>
														<div id="accordion2_7" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="tab_3" class="tab-pane">
												<div id="accordion3" class="panel-group">
													<div class="panel panel-danger">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1">
																1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion3_1" class="panel-collapse collapse  in">
															<div class="panel-body">
																<p>
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
																</p>
																<p>
																	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
																</p>
																<p>
																	Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
																</p>
															</div>
														</div>
													</div>
													<div class="panel panel-success">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_2">
																2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
																</a>
															</h4>
														</div>
														<div id="accordion3_2" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_3">
																3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
																</a>
															</h4>
														</div>
														<div id="accordion3_3" class="panel-collapse collapse">
															<div class="panel-body">
																Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
																Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_4">
																4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
																</a>
															</h4>
														</div>
														<div id="accordion3_4" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_5">
																5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
																</a>
															</h4>
														</div>
														<div id="accordion3_5" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_6">
																6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
																</a>
															</h4>
														</div>
														<div id="accordion3_6" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_7">
																7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
																</a>
															</h4>
														</div>
														<div id="accordion3_7" class="panel-collapse collapse">
															<div class="panel-body">
																3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end tab-pane-->
						</div>
					</div>
					<!--END TABS-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
                        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl?>/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
                        <link href="<?php echo Yii::app()->baseUrl?>/assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
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