<?php
/* @var $this VisitscheduleController */
/* @var $model Visitschedule */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitschedule-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_propdetail'); ?>
		<?php echo $form->textField($model,'fk_propdetail'); ?>
		<?php echo $form->error($model,'fk_propdetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_client'); ?>
		<?php echo $form->textField($model,'fk_client'); ?>
		<?php echo $form->error($model,'fk_client'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php//Date and time picker extension for visiting date and time?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
				'model'=>$model, //Model object
				'attribute'=>'datetime', //attribute name
                'mode'=>'datetime', //use "time","date" or "datetime" (default)
				'language' => 'en',
				'options'=>array(
					'changeYear' => true,
					'yearRange' => 'now:2099',
				) // jquery plugin options
		)	); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentcode'); ?>
		<?php echo $form->textField($model,'paymentcode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'paymentcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->