<?php
/* @var $this ProptypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proptypes',
);

$this->menu=array(
	array('label'=>'Create Proptype', 'url'=>array('create')),
	array('label'=>'Manage Proptype', 'url'=>array('admin')),
);
?>

<h1>Proptypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
