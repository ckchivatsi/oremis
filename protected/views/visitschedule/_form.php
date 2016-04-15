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
	
<?php /**	
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
**/ ?>
	
	<div class="row">
		<p>Please set a date and time you would like to visit the selected property.</p>
		<?php echo $form->labelEx($model,'datetime'); ?>
		<?php //echo $form->textField($model,'datetime'); ?>		
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
			$this->widget('CJuiDateTimePicker',array(
				'model'=>$model, 
				'attribute'=>'datetime',
                'mode'=>'datetime',
				'language' => 'en',
				'options'=>array(
					'showOn' => 'both',
					'dateFormat' => 'yy-mm-dd',
					'timeFormat' => 'hh-mm-ss',
					'hourMin' => '08',
					'hourMax' => '16',
				) 
		)	); ?>
		<?php echo $form->error($model,'datetime'); ?>
	</div>

	<div class="row">
		<p>
		Please pay a deposit of KSh.500 via the following payment options:
			<ol>
				<li>M-PESA paybill number <b>557109</b></li>
				<li>AirtelMoney paybill <b>FAB254</b></li>
			</ol>
		<b>NB: Use your username as the reference.</b>	
		<br/>
		Enter your transaction ID below...
		</p>				
		<?php echo $form->labelEx($model,'paymentcode'); ?>
		<?php echo $form->textField($model,'paymentcode',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'paymentcode'); ?>
	</div>
	
	<p class="note">
	You'll be contacted immediately the payment transaction is verified.
	</p>

<?php if(Yii::app()->user->role=="Admin"){?>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->dropDownList($model,'status',
			array('Closed'=>'Close','Nullified'=>'Nullify','Pending'=>'Pending','Verified'=>'Verify')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
<?php }?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Schedule' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->