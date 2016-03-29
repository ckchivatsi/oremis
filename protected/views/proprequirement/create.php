<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->breadcrumbs=array(
	'Proprequirements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proprequirement', 'url'=>array('index')),
	array('label'=>'Manage Proprequirement', 'url'=>array('admin')),
);
?>

<h1>Create Proprequirement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>