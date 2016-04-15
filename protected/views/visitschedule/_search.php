<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fk_propdetail'); ?>
		<?php //echo $form->textField($model,'fk_propdetail'); ?>
		<?php echo $form->dropDownList($model,'fk_propdetail',CHtml::listData(Propdetail::model()->findAll(
			array('order' => 'name ASC')), 'id' , 'name'),
			array('prompt'=>'Select Property')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_client'); ?>
		<?php //echo $form->textField($model,'fk_client'); ?>
		<?php echo $form->dropDownList($model,'fk_client',CHtml::listData(User::model()->findAllByAttributes(
			array('usrtype'=>"Client")), 'id' , 'username'),
			array('prompt'=>'Select Client Username')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime'); ?>
		<?php echo $form->textField($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentcode'); ?>
		<?php echo $form->textField($model,'paymentcode',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->dropDownList($model,'status',
			array(''=>'All','Closed'=>'Close','Nullified'=>'Nullify','Pending'=>'Pending','Verified'=>'Verify')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->