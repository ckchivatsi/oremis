<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->breadcrumbs=array(
	'Propdetails'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Propdetail', 'url'=>array('index')),
	array('label'=>'Create Propdetail', 'url'=>array('create')),
	array('label'=>'Update Propdetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Propdetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Propdetail', 'url'=>array('admin')),
);
?>

<h1>View Propdetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'fk_proptype',
		'name',
		'location',
		'description',
		'fk_owner',
		'value',
		'dateposted',
		'status',
		'photos',
	),
)); ?>
