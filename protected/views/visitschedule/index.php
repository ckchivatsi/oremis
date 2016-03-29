<?php
/* @var $this VisitscheduleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitschedules',
);

$this->menu=array(
	array('label'=>'Create Visitschedule', 'url'=>array('create')),
	array('label'=>'Manage Visitschedule', 'url'=>array('admin')),
);
?>

<h1>Visitschedules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
