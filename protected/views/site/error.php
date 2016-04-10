<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>

<p class="note"><i>
You can copy the error message and 
<?php echo CHtml::link('send', array('site/contact')); ?> 
it to us for more information.
</i></p>