<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->breadcrumbs=array(
	'Property'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListProperty')),
	array('label'=>'Post Property', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateProperty')),
	array('label'=>'View Property', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewProperty')),
	array('label'=>'Search Property', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchProperty')),
);
?>

<h1>Update Property Details</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>