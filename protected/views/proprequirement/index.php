<?php
/* @var $this ProprequirementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proprequirements',
);

$this->menu=array(
	array('label'=>'Create Proprequirement', 'url'=>array('create')),
	array('label'=>'Manage Proprequirement', 'url'=>array('admin')),
);
?>

<h1>Proprequirements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
