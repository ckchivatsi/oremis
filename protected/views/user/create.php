<?php
/* @var $this UserController */
/* @var $model User */

$this->pageTitle=Yii::app()->name . ' - Create User';

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListUsers')),
	array('label'=>'Search Users', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchUser')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>