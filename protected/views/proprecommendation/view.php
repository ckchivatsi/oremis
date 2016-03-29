<?php
/* @var $this ProprecommendationController */
/* @var $model Proprecommendation */

$this->breadcrumbs=array(
	'Proprecommendations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Proprecommendation', 'url'=>array('index')),
	array('label'=>'Create Proprecommendation', 'url'=>array('create')),
	array('label'=>'Update Proprecommendation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proprecommendation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proprecommendation', 'url'=>array('admin')),
);
?>

<h1>View Proprecommendation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fk_proprequirement',
		'fk_propdetail',
	),
)); ?>
