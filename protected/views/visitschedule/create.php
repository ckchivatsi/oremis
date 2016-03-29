<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->breadcrumbs=array(
	'Visitschedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Visitschedule', 'url'=>array('index')),
	array('label'=>'Manage Visitschedule', 'url'=>array('admin')),
);
?>

<h1>Create Visitschedule</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>