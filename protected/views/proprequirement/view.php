<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */

$this->menu=array(
	array('label'=>'List Requirements', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListRequirements')),
	array('label'=>'Post Requirement', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement')),
	array('label'=>'Update Requirement', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateRequirement')),
	array('label'=>'Delete Requirement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->checkAccess('DeleteRequirement')),
	array('label'=>'Search Requirements', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchRequirement')),
	array('label'=>'View Client Profile', 'url'=>array('user/view', 'id'=>$model->fk_client), 'visible'=>Yii::app()->user->checkAccess('ManageUsers')),
);
?>

<h1>Requirement Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'category',
		//'fk_proptype',
		'propertyType',
		'location',
		'description',
		//'fk_client',
		'clientName',
		'budget',
		'dateposted',
		'status',
	),
)); ?>
