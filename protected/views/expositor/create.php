<?php
/* @var $this ExpositorController */
/* @var $model Expositor */

$this->breadcrumbs=array(
	'Expositors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Expositor', 'url'=>array('index')),
	array('label'=>'Manage Expositor', 'url'=>array('admin')),
);
?>

<h1>Create Expositor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>