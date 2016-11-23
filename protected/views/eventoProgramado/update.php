<?php
/* @var $this EventoProgramadoController */
/* @var $model EventoProgramado */

$this->breadcrumbs=array(
	'Evento Programados'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventoProgramado', 'url'=>array('index')),
	array('label'=>'Create EventoProgramado', 'url'=>array('create')),
	array('label'=>'View EventoProgramado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EventoProgramado', 'url'=>array('admin')),
);
?>

<h1>Update EventoProgramado <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>