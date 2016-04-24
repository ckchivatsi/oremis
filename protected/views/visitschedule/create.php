<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->pageTitle=Yii::app()->name . ' - Schedule a Visit';

$this->menu=array(
	array('label'=>'Visit Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);
?>

<h1>Schedule a Visit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>