<?php
/* @var $this ExpositorController */
/* @var $model Expositor */

$this->breadcrumbs=array(
	'Expositors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Expositor', 'url'=>array('index')),
	array('label'=>'Create Expositor', 'url'=>array('create')),
	array('label'=>'Update Expositor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Expositor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expositor', 'url'=>array('admin')),
);
?>

<h1>View Expositor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'correo',
		'genero',
		'id_facultad',
	),
)); ?>
