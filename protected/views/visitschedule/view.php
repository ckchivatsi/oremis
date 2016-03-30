<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->breadcrumbs=array(
	'Visitschedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Visitschedule', 'url'=>array('index')),
	array('label'=>'Create Visitschedule', 'url'=>array('create')),
	array('label'=>'Update Visitschedule', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Visitschedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitschedule', 'url'=>array('admin')),
);
?>

<h1>View Visitschedule #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fk_propdetail',
		'fk_client',
		'datetime',
		'paymentcode',
		'status',
	),
)); ?>
