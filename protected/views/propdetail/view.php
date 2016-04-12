<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->breadcrumbs=array(
	'Property'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListProperty')),
	array('label'=>'Post Property', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateProperty')),
	array('label'=>'Update Property', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateProperty')),
	array('label'=>'Delete Property', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->checkAccess('DeleteProperty')),
	array('label'=>'Search Property', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchProperty')),
	//place button to schedule visit for this property
);
?>

<h1>Property Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'category',
		//'fk_proptype',	
		'propertyType',
		'location',
		'description',
		//'fk_owner',
		'PropertyOwnerName',
		'value',
		'dateposted',
		'status',
		'photos',
	),
)); ?>
