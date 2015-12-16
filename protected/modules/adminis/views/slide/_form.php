
<!-- BEGIN PAGE CONTENT-->
<div class="row">

    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->   
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-reorder"></i> <?php echo $model->isNewRecord ? '创建' : '修改'; ?>图片
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
                    'id' => 'slide-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
                ));
                ?>
                <div class="form-body">


                    <div class="form-group <?php if( $model['pic_path'] == "" ||  $model['pic_path'] == NULL){echo 'hidden';}?> ">
                        <label class="control-label col-md-3">现在的图片</label>
                        <div class="col-md-4">
                            <img height="150px" width="auto" src="<?php echo Yii::app()->baseUrl . $model['pic_path']; ?>">


                        </div>
                    </div>


                    <div class="form-group">
                            <?php echo $form->labelEx($model, 'pic_path', array('class' => 'col-md-3 control-label')); ?>						<div class="col-md-9">

<?php echo $form->fileField($model, 'pic_path') ?>
                            <p class="help-block"><?php echo $form->error($model, 'pic_path') ? $form->error($model, 'pic_path') : 请选择图片; ?></p>

                        </div>
                    </div>

                    <div class="form-group">
                            <?php echo $form->labelEx($model, 'text', array('class' => 'col-md-3 control-label')); ?>
                        <div class="col-md-9">
<?php echo $form->textField($model, 'text', array('size' => 48, 'maxlength' => 300, 'class' => 'form-control', 'placeholder' => '请输入文字简介')); ?> 

                            <span class="help-block"><?php echo $form->error($model, 'text') ? $form->error($model, 'text') : 请输入文字简介; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                                <?php echo $form->labelEx($model, 'sort', array('class' => "col-md-3 control-label ")); ?>
                        <div class="col-md-9 " >
                            <div class="input-group">
<?php echo $form->textField($model, 'sort', array('size' => 48, 'maxlength' => 64, 'class' => "form-control ", 'placeholder' => '请输入排序数字')); ?> 

                                <span class="input-group-addon"><i class="fa  fa-mobile"></i></span>

                            </div>
                            <span class="help-block"><?php echo $form->error($model, 'sort') ? $form->error($model, 'sort') : 请输入排序数字; ?></span>
                        </div>
                    </div>





                    <div class="form-actions fluid">
                        <div class="col-md-offset-3 col-md-9">
<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改', array('class' => 'btn green')); ?>
                    <?php echo CHtml::link('取消', Yii::app()->createUrl("adminis/slide/index"), array('class' => "btn default")); ?>                           
                        </div>
                    </div>
<?php $this->endWidget(); ?>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->

        </div>
    </div>
</div>


