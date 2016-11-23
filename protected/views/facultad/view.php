<?php
/* @var $this FacultadController */
/* @var $model Facultad */

$this->breadcrumbs=array(
	'Facultads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Facultad', 'url'=>array('index')),
	array('label'=>'Create Facultad', 'url'=>array('create')),
	array('label'=>'Update Facultad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Facultad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facultad', 'url'=>array('admin')),
);
?>

<h1>View Facultad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'tipo',
		'descripcion',
	),
)); ?>
