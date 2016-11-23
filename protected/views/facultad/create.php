<?php
/* @var $this FacultadController */
/* @var $model Facultad */

$this->breadcrumbs=array(
	'Facultads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Facultad', 'url'=>array('index')),
	array('label'=>'Manage Facultad', 'url'=>array('admin')),
);
?>

<h1>Create Facultad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>