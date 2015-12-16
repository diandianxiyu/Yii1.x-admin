<?php
/* @var $this ArticleController */
/* @var $model Article */
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
		<?php echo $form->label($model,'atitle'); ?>
		<?php echo $form->textField($model,'atitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pub_time'); ?>
		<?php echo $form->textField($model,'pub_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edit_time'); ?>
		<?php echo $form->textField($model,'edit_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atext'); ?>
		<?php echo $form->textArea($model,'atext',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aauthor'); ?>
		<?php echo $form->textField($model,'aauthor',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->