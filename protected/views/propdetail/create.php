<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->breadcrumbs=array(
	'Propdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Propdetail', 'url'=>array('index')),
	array('label'=>'Manage Propdetail', 'url'=>array('admin')),
);
?>

<h1>Create Propdetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>