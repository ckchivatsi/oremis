<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Proprequirements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proprequirement', 'url'=>array('index')),
	array('label'=>'Create Proprequirement', 'url'=>array('create')),
	array('label'=>'View Proprequirement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proprequirement', 'url'=>array('admin')),
);
?>

<h1>Update Proprequirement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>