<?php
/* @var $this ProprecommendationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proprecommendations',
);

$this->menu=array(
	array('label'=>'Create Proprecommendation', 'url'=>array('create')),
	array('label'=>'Manage Proprecommendation', 'url'=>array('admin')),
);
?>

<h1>Proprecommendations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
