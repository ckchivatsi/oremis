<?php
/* @var $this VisitscheduleController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Manage Schedules', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
	array('label'=>'Schedules Calender', 'url'=>array('calender','Visitschedule_sort'=>'datetime'), 'visible'=>Yii::app()->user->checkAccess('SearchSchedule')),
);
?>

<h1> 
<?php 
if(Yii::app()->user->role!="Admin")
	echo "My";
?> 
Visit Schedules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
