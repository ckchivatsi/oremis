<?php
/* @var $this ProprecommendationController */
/* @var $model Proprecommendation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_proprequirement'); ?>
		<?php echo $form->textField($model,'fk_proprequirement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_propdetail'); ?>
		<?php echo $form->textField($model,'fk_propdetail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->