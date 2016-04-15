<?php
/* @var $this VisitscheduleController */
/* @var $data Visitschedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('propertyName')); ?>:</b>
	<?php echo CHtml::encode($data->propertyName); ?>
	<br />

<?php if(Yii::app()->user->role=="Admin"){?>	
	<b><?php echo CHtml::encode($data->getAttributeLabel('clientName')); ?>:</b>
	<?php echo CHtml::encode($data->clientName); ?>
	<br />
<?php }?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />
	
<?php /**
	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentcode')); ?>:</b>
	<?php echo CHtml::encode($data->paymentcode); ?>
	<br />
**/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
	
	<b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode("view"), array('view', 'id'=>$data->id)); ?>
	<br />

</div>