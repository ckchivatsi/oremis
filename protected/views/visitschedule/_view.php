<?php
/* @var $this VisitscheduleController */
/* @var $data Visitschedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_propdetail')); ?>:</b>
	<?php echo CHtml::encode($data->fk_propdetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_client')); ?>:</b>
	<?php echo CHtml::encode($data->fk_client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime')); ?>:</b>
	<?php echo CHtml::encode($data->datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentcode')); ?>:</b>
	<?php echo CHtml::encode($data->paymentcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>