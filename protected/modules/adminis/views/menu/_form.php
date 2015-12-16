
<?php

$att=$model->attributes;
//var_dump($att);
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'menu-form',
    'action' => '#',
    'enableAjaxValidation' => false,
        ));
?>							<div class="form-body form-horizontal">
    <div class="alert alert-danger <?php if (trim($form->errorSummary($model)) == NULL) {
    echo "display-hide";
} ?>">
        <button class="close" data-close="alert"></button>
<?php echo $form->errorSummary($model); ?>
    </div>
    <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button>
        验证完成！
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'name'); ?></label>
        <div class="col-md-4">
<?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 60, 'class' => 'form-control')); ?>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'pid'); ?></label>
        <div class="col-md-4">
<?php echo $form->dropDownList($model, 'pid', Menu::model()->getAllAuthItem(), array('class' => 'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'url'); ?></label>
        <div class="col-md-4">
<?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>

            <span class="help-block">e.g: Site/Index</span>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'auth_item'); ?></label>
        <div class="col-md-4">
<?php echo $form->textField($model, 'auth_item', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'icon'); ?></label>
        <div class="col-md-4">
            <div class="input-group" >
                <span class="input-group-addon"><a href="#" ><i class="<?php echo $att['icon']?$att['icon']:'fa fa-briefcase';?>" id="iconsBut"></i></a></span>
<?php echo $form->textField($model, 'icon', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'other'); ?></label>
        <div class="col-md-4">
<?php echo $form->TextArea($model, 'other', array('size' => 60, 'maxlength' => 150, 'class' => 'form-control')); ?>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'sort'); ?></label>
        <div class="col-md-4">
<?php echo $form->textField($model, 'sort', array('class' => 'form-control')); ?>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3"><?php echo $form->labelEx($model, 'reamrk'); ?></label>
        <div class="col-md-4">
<?php echo $form->textField($model, 'reamrk', array('size' => 60, 'maxlength' => 420, 'class' => 'form-control')); ?>

            <span class="help-block"><?php echo $form->error($model, 'reamrk'); ?></span>
        </div>
    </div>

</div>
<div class="form-actions fluid">
    <div class="col-md-offset-3 col-md-9">
<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '修改', array('class' => "btn green")); ?>
<?php echo CHtml::link('取消',  Yii::app()->createUrl("adminis/menu/index"), array('class' => "btn default")); ?>

    </div>
</div>
<?php $this->endWidget(); ?>

<input id="iconsUrl" type="hidden" value="<?php echo Yii::app()->createUrl("adminis/menu/icons") ?>">
                <script src="<?php echo Yii::app()->baseUrl?>/assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>  
        <script type="text/javascript">
      

 var hrefq=$("#iconsUrl").val();
$("#iconsBut").eq(0).click(function(){
   window.open(hrefq,"name","height=700, width=1000, toolbar=no, menubar=no, scrollbars=yes, resizable=no, location=no, status=no");
})
           
</script>