<?php
/* @var $this EventoProgramadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Evento Programados',
);

$this->menu=array(
	array('label'=>'Create EventoProgramado', 'url'=>array('create')),
	array('label'=>'Manage EventoProgramado', 'url'=>array('admin')),
);
?>

<h1>Evento Programados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
