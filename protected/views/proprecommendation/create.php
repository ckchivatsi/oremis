<?php
/* @var $this ProprecommendationController */
/* @var $model Proprecommendation */

$this->breadcrumbs=array(
	'Proprecommendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proprecommendation', 'url'=>array('index')),
	array('label'=>'Manage Proprecommendation', 'url'=>array('admin')),
);
?>

<h1>Create Proprecommendation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>