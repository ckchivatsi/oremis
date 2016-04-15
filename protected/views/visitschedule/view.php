<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->breadcrumbs=array(
	'Visit Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Visit Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'Edit Schedule', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateSchedule')),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->checkAccess('DeleteSchedule')),
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);
?>

<h1>Schedule Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'fk_propdetail',
		'propertyName',
		//'fk_client',
		'clientName',
		'datetime',
		'paymentcode',
		'status',
	),
)); ?>
