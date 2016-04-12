<?php
/* @var $this PropdetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Property',
);

$this->menu=array(
	array('label'=>'Post Property', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateProperty')),
	array('label'=>'Search Property', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchProperty')),
);
?>

<h1> 
<?php 
if(Yii::app()->user->role!="Admin")
	echo "My";
?> 
Property</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
