<!-- BEGIN PAGE CONTENT-->
<div class="row">

    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->   
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i> <?php echo $model->isNewRecord ? '创建' : '修改'; ?>属性
                </div>
                <div class="tools">
                    <a href="" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="" class="reload"></a>
                    <a href="" class="remove"></a>
                </div>
            </div>


            <div class="portlet-body form form-horizontal">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'admin-user-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation' => false,
                ));
                ?>
                <div class="form-body">
                    <div class="form-group">
                            <?php echo $form->labelEx($model, 'akey', array('class' => 'col-md-3 control-label')); ?>
                        <div class="col-md-9">
<?php echo $form->textField($model, 'akey', array('size' => 48, 'maxlength' => 48, 'class' => 'form-control', 'placeholder' => '请输入属性的名称')); ?> 

                            <span class="help-block"><?php echo $form->error($model, 'name') ? $form->error($model, 'name') : 请输入属性的名称; ?></span>
                        </div>
                    </div>
<div class="form-group">
                            <?php echo $form->labelEx($model, 'avalues', array('class' => 'col-md-3 control-label')); ?>
                        <div class="col-md-9">
<?php echo $form->textField($model, 'avalues', array('size' => 48, 'maxlength' => 48, 'class' => 'form-control', 'placeholder' => '请输入属性的对应值')); ?> 

                            <span class="help-block"><?php echo $form->error($model, 'name') ? $form->error($model, 'name') : 请输入属性的对应值; ?></span>
                        </div>
                    </div>

                </div>
                <div class="form-actions fluid">
                    <div class="col-md-offset-3 col-md-9">
                        <?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改', array('class' => 'btn green')); ?>
<?php echo CHtml::link('取消', Yii::app()->createUrl("adminis/values/index"), array('class' => "btn default")); ?>                           
                    </div>
                </div>
<?php $this->endWidget(); ?>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->

    </div>
</div>
