<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propdetail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php //echo $form->textField($model,'category',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->dropDownList($model,'category',
			array('Sell'=>'Sell','Rent'=>'Rent'),
			array('prompt'=>'Select Category')); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_proptype'); ?>
		<?php //echo $form->textField($model,'fk_proptype'); ?>
		<?php echo $form->dropDownList($model,'fk_proptype',CHtml::listData(Proptype::model()->findAll(
			array('order' => 'name ASC')), 'id' , 'name'),
			array('prompt'=>'Select Property Type')); ?>
		<?php echo $form->error($model,'fk_proptype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php //echo $form->textField($model,'location',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->dropDownList($model,'location',CHtml::listData(Location::model()->findAll(
			array('order' => 'name ASC')), 'name' , 'name'),
			array('prompt'=>'Select Location(county)')); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'photos'); ?>
		<?php echo $form->textArea($model,'photos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'photos'); ?>
	</div>

<?php if(Yii::app()->user->role=="Admin"){?>	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->dropDownList($model,'category',
			array('Available'=>'Available','Leased'=>'Leased','Sold'=>'Sold')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
<?php }?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->