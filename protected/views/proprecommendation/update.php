<?php
/* @var $this ProprecommendationController */
/* @var $model Proprecommendation */

$this->breadcrumbs=array(
	'Proprecommendations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proprecommendation', 'url'=>array('index')),
	array('label'=>'Create Proprecommendation', 'url'=>array('create')),
	array('label'=>'View Proprecommendation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proprecommendation', 'url'=>array('admin')),
);
?>

<h1>Update Proprecommendation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>