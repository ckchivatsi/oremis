<?php
/* @var $this PropdetailController */
/* @var $model Propdetail */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php //echo $form->textField($model,'category',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->dropDownList($model,'category',
			array('Sell'=>'Sell','Rent'=>'Rent'),
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php //echo $form->textField($model,'location',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->dropDownList($model,'location',CHtml::listData(Location::model()->findAll(
			array('order' => 'name ASC')), 'name' , 'name'),
			array('prompt'=>'Select Location(county)')); ?>
	</div>
	
<?php if(Yii::app()->user->role=="Admin"){?>
	<div class="row">
		<?php echo $form->label($model,'fk_owner'); ?>
		<?php //echo $form->textField($model,'fk_owner'); ?>
		<?php echo $form->dropDownList($model,'fk_owner',CHtml::listData(User::model()->findAllByAttributes(
			array('usrtype' => "PropertyOwner")), 'id' , 'username'),
			array('prompt'=>'Select Owner Username')); ?>
	</div>
<?php }?>

	<div class="row">
		<?php echo $form->label($model,'value'); ?>
		<?php echo $form->textField($model,'value',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateposted'); ?>
		<?php echo $form->textField($model,'dateposted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php //echo $form->textField($model,'status',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->dropDownList($model,'status',
			array(''=>'All','Available'=>'Available','Leased'=>'Leased','Sold'=>'Sold')); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->