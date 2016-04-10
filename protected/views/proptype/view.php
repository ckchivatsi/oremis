<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Property Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Property Types', 'url'=>array('index')),
	array('label'=>'Add Property Type', 'url'=>array('create')),
	array('label'=>'Update Property Type', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Property Type', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Property Types', 'url'=>array('admin')),
);
?>

<h1>View Proptype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
	),
)); ?>
