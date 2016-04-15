<?php
/* @var $this ProprequirementController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Post Requirement', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement')),
	array('label'=>'Search Requirements', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchRequirement')),
);
?>

<h1> 
<?php 
if(Yii::app()->user->role!="Admin")
	echo "My";
else
	echo "Property";
?> 
Requirements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
