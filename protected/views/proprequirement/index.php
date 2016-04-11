<?php
/* @var $this ProprequirementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Property Requirements',
);

$this->menu=array(
	array('label'=>'Post Requirement', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement')),
	array('label'=>'Search Requirements', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchRequirement')),
);
?>

<h1>Property Requirements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
