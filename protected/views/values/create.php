<?php
/* @var $this ValuesController */
/* @var $model Values */

$this->breadcrumbs=array(
	'Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Values', 'url'=>array('index')),
	array('label'=>'Manage Values', 'url'=>array('admin')),
);
?>

<h1>Create Values</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>