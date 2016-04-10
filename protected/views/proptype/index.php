<?php
/* @var $this ProptypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Property Types',
);

$this->menu=array(
	array('label'=>'Add Property Type', 'url'=>array('create')),
	array('label'=>'Manage Property Types', 'url'=>array('admin')),
);
?>

<h1>Property Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
