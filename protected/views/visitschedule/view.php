<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->pageTitle=Yii::app()->name . ' - Schedule Details';

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'Update Schedule', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateSchedule')),
	array('label'=>'Delete Schedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->checkAccess('DeleteSchedule')),
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
	array('label'=>'Schedules Calender', 'url'=>array('calender','Visitschedule_sort'=>'datetime'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
	array('label'=>'View Property', 'url'=>array('propdetail/view', 'id'=>$model->fk_propdetail), 'visible'=>Yii::app()->user->checkAccess('ViewProperty')),
	array('label'=>'View Client Profile', 'url'=>array('user/view', 'id'=>$model->fk_client), 'visible'=>Yii::app()->user->checkAccess('ManageUsers')),
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
