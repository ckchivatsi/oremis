<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Property Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Property Types', 'url'=>array('index')),
	array('label'=>'Add Property Type', 'url'=>array('create')),
	array('label'=>'View Property Type', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Property Types', 'url'=>array('admin')),
);
?>

<h1>Update Proptype #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>