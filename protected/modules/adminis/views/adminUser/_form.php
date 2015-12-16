
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				
				<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->   
					<div class="portlet box green ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-reorder"></i> <?php echo $model->isNewRecord ? '创建' : '修改'; ?>管理员
							</div>
							<div class="tools">
								<a href="" class="collapse"></a>
								<a href="#portlet-config" data-toggle="modal" class="config"></a>
								<a href="" class="reload"></a>
								<a href="" class="remove"></a>
							</div>
						</div>
                                            
                                            
						<div class="portlet-body form form-horizontal">
							<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
								<div class="form-body">
									<div class="form-group">
										<?php echo $form->labelEx($model,'username',array('class'=>'col-md-3 control-label')); ?>
										<div class="col-md-9">
                                                                                                                                                                    <?php echo $form->textField($model,'username',array('size'=>48,'maxlength'=>48,'class'=>'form-control','placeholder'=>'请输入用户名',"disabled"=>$model->isNewRecord ? false : true)); ?> 
											
											<span class="help-block"><?php echo $form->error($model,'username')?$form->error($model,'username'):请输入唯一的用户名; ?></span>
										</div>
									</div>
                                                                    
                                                                    <div class="form-group <?php echo $model->isNewRecord?'':'hidden'?>">
										<?php echo $form->labelEx($model,'password',array('class'=>"col-md-3 control-label ")); ?>
										<div class="col-md-9 " >
											<div class="input-group">
                                                                                                                                                                                <?php echo $form->passwordField($model,'password',array('size'=>48,'maxlength'=>64,'class'=>"form-control ",'placeholder'=>'请输入密码' )); ?> 
											
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                                              
											</div>
                                                                                      <span class="help-block"><?php echo $form->error($model,'password')?$form->error($model,'password'):请输入密码; ?></span>
										</div>
									</div>
                                                                    <div class="form-group">
										<?php echo $form->labelEx($model,'realname',array('class'=>'col-md-3 control-label')); ?>
										<div class="col-md-9">
                                                                                     <?php echo $form->textField($model,'realname',array('size'=>48,'maxlength'=>30,'class'=>'form-control','placeholder'=>'请输入姓名')); ?> 
											
											<span class="help-block"><?php echo $form->error($model,'realname')?$form->error($model,'realname'):请输入姓名; ?></span>
										</div>
									</div>
                                                                    <div class="form-group">
										<?php echo $form->labelEx($model,'mobile',array('class'=>'col-md-3 control-label')); ?>
										<div class="col-md-9">
                                                                                    <?php echo $form->textField($model,'mobile',array('size'=>48,'maxlength'=>18,'class'=>'form-control','placeholder'=>'请输入手机号')); ?> 
											
										</div>
									</div>
									<div class="form-group">
										<?php echo $form->labelEx($model,'email',array('class'=>'col-md-3 control-label')); ?>										<div class="col-md-9">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                                                                                                                                  <?php echo $form->textField($model,'email',array('size'=>48,'maxlength'=>18,'class'=>'form-control','placeholder'=>'请输入电子邮件地址')); ?> 
							
											</div>
                                                                                    <span class="help-block"><?php echo $form->error($model,'email')?$form->error($model,'email'):请输入电子邮箱; ?></span>
										</div>
									</div>
									
									<div class="form-group">
										<?php echo $form->labelEx($model,'department',array('class'=>'col-md-3 control-label')); ?>
										<div class="col-md-9">
											<?php echo $form->dropDownList($model,'department', Department::model()->getAllDepart(),array('class'=>'form-control')); ?>
										</div>
									</div>
									<div class="form-group">
									<?php echo $form->labelEx($model,'avatar',array('class'=>'col-md-3 control-label')); ?>						<div class="col-md-9">
											
                                                                                                                                                                    <?php echo $form->fileField($model,'avatar')?>
											<p class="help-block"><?php echo $form->error($model,'avatar')?$form->error($model,'avatar'):选择图片; ?></p>
                                                                                                                                            
										</div>
									</div>
									
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改',array('class'=>'btn green')); ?>
										<?php echo CHtml::link('取消',  Yii::app()->createUrl("adminis/adminUser/index"), array('class' => "btn default")); ?>                           
									</div>
								</div>
						<?php $this->endWidget(); ?>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					
				</div>
			</div>
                        