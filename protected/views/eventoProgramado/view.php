<?php
/* @var $this EventoProgramadoController */
/* @var $model EventoProgramado */

$this->breadcrumbs=array(
	'Evento Programados'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EventoProgramado', 'url'=>array('index')),
	array('label'=>'Create EventoProgramado', 'url'=>array('create')),
	array('label'=>'Update EventoProgramado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EventoProgramado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventoProgramado', 'url'=>array('admin')),
);
?>

<h1>View EventoProgramado #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_inicio',
		'fecha_fin',
		'modalidad',
		'cupo',
		'estado',
		'horas',
		'id_evento',
	),
)); ?>
