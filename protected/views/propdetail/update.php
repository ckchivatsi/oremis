<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->breadcrumbs=array(
	'Propdetails'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Propdetail', 'url'=>array('index')),
	array('label'=>'Create Propdetail', 'url'=>array('create')),
	array('label'=>'View Propdetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Propdetail', 'url'=>array('admin')),
);
?>

<h1>Update Propdetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>