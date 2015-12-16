<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>48,'maxlength'=>48)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'regtime'); ?>
		<?php echo $form->textField($model,'regtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department'); ?>
		<?php echo $form->textField($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disable'); ?>
		<?php echo $form->textField($model,'disable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->