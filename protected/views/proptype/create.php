<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Proptypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proptype', 'url'=>array('index')),
	array('label'=>'Manage Proptype', 'url'=>array('admin')),
);
?>

<h1>Create Proptype</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>