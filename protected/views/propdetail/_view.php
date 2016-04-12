<?php
/* @var $this PropdetailController */
/* @var $data Propdetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

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
	<?php echo CHtml::link(CHtml::encode("more..."), array('view', 'id'=>$data->id)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_proptype')); ?>:</b>
	<?php echo CHtml::encode($data->fk_proptype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_owner')); ?>:</b>
	<?php echo CHtml::encode($data->fk_owner); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateposted')); ?>:</b>
	<?php echo CHtml::encode($data->dateposted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photos')); ?>:</b>
	<?php echo CHtml::encode($data->photos); ?>
	<br />

	*/ ?>

</div>