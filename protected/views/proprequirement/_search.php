<?php
/* @var $this ProprequirementController */
/* @var $model Proprequirement */
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
		<?php echo $form->label($model,'category'); ?>
		<?php //echo $form->textField($model,'category',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->dropDownList($model,'category',
			array('Buy'=>'Buy','Rent'=>'Rent'),
			array('prompt'=>'Select Category')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_proptype'); ?>
		<?php //echo $form->textField($model,'fk_proptype'); ?>
		<?php echo $form->dropDownList($model,'fk_proptype',CHtml::listData(Proptype::model()->findAll(
			array('order' => 'name ASC')), 'id' , 'name'),
			array('prompt'=>'Select Property Type')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php //echo $form->textField($model,'location',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->dropDownList($model,'location',CHtml::listData(Location::model()->findAll(
			array('order' => 'name ASC')), 'name' , 'name'),
			array('prompt'=>'Select Location(county)')); ?>
	</div>
	
<?php if(Yii::app()->user->role=="Admin"){?>
	<div class="row">
		<?php echo $form->label($model,'fk_client'); ?>
		<?php //echo $form->textField($model,'fk_client'); ?>
		<?php echo $form->dropDownList($model,'fk_client',CHtml::listData(User::model()->findAllByAttributes(
			array('usrtype'=>"Client")), 'id' , 'username'),
			array('prompt'=>'Select Client Username')); ?>
	</div>
<?php }?>

	<div class="row">
		<?php echo $form->label($model,'budget'); ?>
		<?php echo $form->textField($model,'budget',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateposted'); ?>
		<?php echo $form->textField($model,'dateposted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->dropDownList($model,'status',
			array(''=>'All','Pending'=>'Pending','Found'=>'Found')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->