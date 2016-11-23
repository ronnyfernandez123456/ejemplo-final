<?php
/* @var $this FacultadController */
/* @var $model Facultad */

$this->breadcrumbs=array(
	'Facultads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facultad', 'url'=>array('index')),
	array('label'=>'Create Facultad', 'url'=>array('create')),
	array('label'=>'View Facultad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Facultad', 'url'=>array('admin')),
);
?>

<h1>Update Facultad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>