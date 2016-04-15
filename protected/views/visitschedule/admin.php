<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->breadcrumbs=array(
	'Visit Schedules'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListSchedules')),
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
	'columns'=>array(
		//'id',
		'fk_propdetail',
		'fk_client',
		'datetime',
		'paymentcode',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
