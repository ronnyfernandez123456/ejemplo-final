<?php
/* @var $this FacultadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facultads',
);

$this->menu=array(
	array('label'=>'Create Facultad', 'url'=>array('create')),
	array('label'=>'Manage Facultad', 'url'=>array('admin')),
);
?>

<h1>Facultads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
