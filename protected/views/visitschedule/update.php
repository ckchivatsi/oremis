<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->pageTitle=Yii::app()->name . ' - Update Schedule Details';

$this->menu=array(
	array('label'=>'Visit Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'View Schedule', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewSchedule')),
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);
?>

<h1>Update Schedule Details</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>