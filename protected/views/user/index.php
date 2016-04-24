<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Users';

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateUser')),
	array('label'=>'Search User', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchUser')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
