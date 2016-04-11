<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proprequirement-form',
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
			array('Buy'=>'Buy','Rent'=>'Rent'),
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
		<?php echo $form->labelEx($model,'location'); ?>
		<?php //echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->labelEx($model,'budget'); ?>
		<?php echo $form->textField($model,'budget',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'budget'); ?>
	</div>

<?php if(Yii::app()->user->role=="Admin"){?>	
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->dropDownList($model,'status',
			array('Pending'=>'Pending','Found'=>'Found')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
<?php }?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Post' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->