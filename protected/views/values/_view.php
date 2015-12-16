<?php
/* @var $this ValuesController */
/* @var $data Values */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('akey')); ?>:</b>
	<?php echo CHtml::encode($data->akey); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avalues')); ?>:</b>
	<?php echo CHtml::encode($data->avalues); ?>
	<br />


</div>