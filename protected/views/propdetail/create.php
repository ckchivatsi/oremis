<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->pageTitle=Yii::app()->name . ' - Post Property';

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListProperty')),
	array('label'=>'Manage Property', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchProperty')),
);
?>

<h1>Post Property</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>