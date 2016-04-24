<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->pageTitle=Yii::app()->name . ' - Manage Visit Schedules';

$this->menu=array(
	array('label'=>'Visit Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
	array('label'=>'Schedules Calender', 'url'=>array('calender','Visitschedule_sort'=>'datetime'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);

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
");
?>

<h1>Manage Visit Schedules</h1>

<p>
Click on <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?> for more search options.
</p>

<div class="search-form" style="display:none">
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitschedule-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectionChanged'=>"function(id){window.location='"
		.Yii::app()->urlManager->createUrl('visitschedule/view',array('id'=>''))."' + 
		$.fn.yiiGridView.getSelection(id);}",
	'columns'=>array(
		//'id',
		//'fk_propdetail',
		array(
			'name'=>'fk_propdetail',
			'value'=>'$data->fkPropdetail->name',
			'filter'=>CHtml::listData(Propdetail::model()->findAll(array(
				'order' =>'name ASC',)),'id','name')),
		//'fk_client',
		array(
				'name'=>'fk_client',
				'value'=>'$data->fkClient->username',
				'filter'=>CHtml::listData(User::model()->findAllByAttributes(
					array('usrtype' => "Client")), 'id' , 'username')),
		'datetime',
		'paymentcode',
		'status',
		array(
			'header'=>'Actions',
			'class'=>'CButtonColumn',),
	),
)); ?>
