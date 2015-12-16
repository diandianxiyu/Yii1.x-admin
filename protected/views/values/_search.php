<?php
/* @var $this ValuesController */
/* @var $model Values */
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
		<?php echo $form->label($model,'akey'); ?>
		<?php echo $form->textField($model,'akey',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avalues'); ?>
		<?php echo $form->textField($model,'avalues',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->