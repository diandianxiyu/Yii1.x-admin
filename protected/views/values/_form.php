<?php
/* @var $this ValuesController */
/* @var $model Values */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'values-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'akey'); ?>
		<?php echo $form->textField($model,'akey',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'akey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avalues'); ?>
		<?php echo $form->textField($model,'avalues',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'avalues'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->