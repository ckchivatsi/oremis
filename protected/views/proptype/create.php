<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Property Types'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List Property Types', 'url'=>array('index')),
	array('label'=>'Manage Property Types', 'url'=>array('admin')),
);
?>

<h1>Add Property Type</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>