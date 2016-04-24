<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

if(Yii::app()->user->role!="Admin")
	$this->pageTitle=Yii::app()->name . ' - Change Password';
else
	$this->pageTitle=Yii::app()->name . ' - Reset Password';

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListUsers')),
	array('label'=>'Create User', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateUser')),
	array('label'=>'View Profile', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('ViewUser')),
	array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateUser')),
	array('label'=>'Search Users', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchUser')),
);
?>

<h1> 
<?php 
if(Yii::app()->user->role!="Admin")
	echo "Change My Password";
else
	echo "Reset ".$model->username." Password";
?> 
</h1>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',

	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Please enter your new password</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'newpwd'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->