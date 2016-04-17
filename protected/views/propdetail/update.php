<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListProperty')),
	array('label'=>'Post Property', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateProperty')),
	array('label'=>'View Property', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewProperty')),
	array('label'=>'Search Property', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchProperty')),
);
?>

<h1>Update Property Details</h1>


<h5>NB: Make sure that you select a photo before clicking "save"</h5>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<div class="row">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/property/'.$model->photos,"image",array("width"=>200)); ?> 
</div>