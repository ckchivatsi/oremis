<?php
/* @var $this ProprequirementController */
/* @var $data Proprequirement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	
	<b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode("view"), array('view', 'id'=>$data->id)); ?>
	<br />
	
<?php /**
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_proptype')); ?>:</b>
	<?php echo CHtml::encode($data->fk_proptype); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_client')); ?>:</b>
	<?php echo CHtml::encode($data->fk_client); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('budget')); ?>:</b>
	<?php echo CHtml::encode($data->budget); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateposted')); ?>:</b>
	<?php echo CHtml::encode($data->dateposted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />
**/ ?>

</div>