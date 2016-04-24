<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

if(Yii::app()->user->name==$model->username)
	$this->pageTitle=Yii::app()->name . ' - Profile';
else
	$this->pageTitle=Yii::app()->name . ' - ' .$model->username. ' Profile';

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListUsers')),
	array('label'=>'Create User', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateUser')),
	array('label'=>'View Profile', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewUser')),
	array('label'=>'Change Password', 'url'=>array('chnpwd', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateUser')),
	array('label'=>'Search Users', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchUser')),
);
?>

<h1>Update 
<?php 
if(Yii::app()->user->name==$model->username)
	echo "My";
else
	echo $model->username;
?> 
Profile</h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usrtype'); ?>
		<?php echo $form->textField($model,'usrtype',array('size'=>14,'maxlength'=>14, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'usrtype');  ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->