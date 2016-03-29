<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */

$this->breadcrumbs=array(
	'Visitschedules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visitschedule', 'url'=>array('index')),
	array('label'=>'Create Visitschedule', 'url'=>array('create')),
	array('label'=>'View Visitschedule', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Visitschedule', 'url'=>array('admin')),
);
?>

<h1>Update Visitschedule <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>