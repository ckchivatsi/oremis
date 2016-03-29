<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Proprequirements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Proprequirement', 'url'=>array('index')),
	array('label'=>'Create Proprequirement', 'url'=>array('create')),
	array('label'=>'Update Proprequirement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proprequirement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proprequirement', 'url'=>array('admin')),
);
?>

<h1>View Proprequirement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'fk_proptype',
		'location',
		'description',
		'fk_client',
		'budget',
		'status',
	),
)); ?>
