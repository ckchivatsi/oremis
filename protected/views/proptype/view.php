<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Proptypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Proptype', 'url'=>array('index')),
	array('label'=>'Create Proptype', 'url'=>array('create')),
	array('label'=>'Update Proptype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proptype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proptype', 'url'=>array('admin')),
);
?>

<h1>View Proptype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
