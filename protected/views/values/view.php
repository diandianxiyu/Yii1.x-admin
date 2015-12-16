<?php
/* @var $this ValuesController */
/* @var $model Values */

$this->breadcrumbs=array(
	'Values'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Values', 'url'=>array('index')),
	array('label'=>'Create Values', 'url'=>array('create')),
	array('label'=>'Update Values', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Values', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Values', 'url'=>array('admin')),
);
?>

<h1>View Values #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'akey',
		'avalues',
	),
)); ?>
