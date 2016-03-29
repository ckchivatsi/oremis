<?php
/* @var $this ProprecommendationController */
/* @var $data Proprecommendation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_proprequirement')); ?>:</b>
	<?php echo CHtml::encode($data->fk_proprequirement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_propdetail')); ?>:</b>
	<?php echo CHtml::encode($data->fk_propdetail); ?>
	<br />


</div>