<?php
/* @var $this ExpositorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expositors',
);

$this->menu=array(
	array('label'=>'Create Expositor', 'url'=>array('create')),
	array('label'=>'Manage Expositor', 'url'=>array('admin')),
);
?>

<h1>Expositors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
