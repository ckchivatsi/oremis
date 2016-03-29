<?php
/* @var $this PropdetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propdetails',
);

$this->menu=array(
	array('label'=>'Create Propdetail', 'url'=>array('create')),
	array('label'=>'Manage Propdetail', 'url'=>array('admin')),
);
?>

<h1>Propdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
