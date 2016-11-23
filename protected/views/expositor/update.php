<?php
/* @var $this ExpositorController */
/* @var $model Expositor */

$this->breadcrumbs=array(
	'Expositors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Expositor', 'url'=>array('index')),
	array('label'=>'Create Expositor', 'url'=>array('create')),
	array('label'=>'View Expositor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Expositor', 'url'=>array('admin')),
);
?>

<h1>Update Expositor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>