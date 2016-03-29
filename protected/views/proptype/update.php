<?php
/* @var $this ProptypeController */
/* @var $model Proptype */

$this->breadcrumbs=array(
	'Proptypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proptype', 'url'=>array('index')),
	array('label'=>'Create Proptype', 'url'=>array('create')),
	array('label'=>'View Proptype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proptype', 'url'=>array('admin')),
);
?>

<h1>Update Proptype <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>