<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Property Requirements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update Details',
);

$this->menu=array(
	array('label'=>'List Requirements', 'url'=>array('index'), 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListRequirements')),
	array('label'=>'Post Requirement', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement')),
	array('label'=>'View Requirement', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewRequirement')),
	array('label'=>'Search Requirements', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchRequirement')),
);
?>

<h1>Update Requirement Details</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>