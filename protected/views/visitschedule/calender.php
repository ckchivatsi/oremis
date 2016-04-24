<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->pageTitle=Yii::app()->name . ' - Visit Schedule Calendar';

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);
/* 
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitschedule-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
"); */
?>

<h1>Visit Schedule Calendar</h1>


<?php 
	$this->widget('ext.xdateview.XDateView',array( 
		'dataProvider'=>$model->search(), 
		//'filter'=>$model, 
		'dateField' => 'datetime', 
		'columns'=>array(
			//'id',
			//'fk_propdetail',
			array(
				'header'=>'Property Name',
				'value'=>'$data->fkPropdetail->name',),
			//'fk_client',
			array(
				'header'=>'Client',
				'value'=>'$data->fkClient->fullname',),
			//'datetime',
			array(
				'header'=>'Date-Time',
				'value'=>'$data->datetime',),
			//'paymentcode',
			//'status',
			array(
				'header'=>'Actions',
				'class'=>'CButtonColumn',),
		), 
	)); 
?> 