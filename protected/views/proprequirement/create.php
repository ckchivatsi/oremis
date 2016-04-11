<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Property Requirements'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List Requirements', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListRequirements')),
	array('label'=>'Search Requirements', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchRequirement')),
);
?>

<h1>Post Property Requirement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>