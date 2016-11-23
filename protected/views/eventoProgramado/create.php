<?php
/* @var $this EventoProgramadoController */
/* @var $model EventoProgramado */

$this->breadcrumbs=array(
	'Evento Programados'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventoProgramado', 'url'=>array('index')),
	array('label'=>'Manage EventoProgramado', 'url'=>array('admin')),
);
?>

<h1>Create EventoProgramado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>