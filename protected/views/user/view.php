<?php
/* @var $this UserController */
/* @var $model User */

if(Yii::app()->user->role!="Admin")
	$this->pageTitle=Yii::app()->name . ' - My Profile';
else
	$this->pageTitle=Yii::app()->name . ' - ' . $model->username. ' Profile';

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index'), 'visible'=>Yii::app()->user->checkAccess('ListUsers')),
	array('label'=>'Create User', 'url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('CreateUser')),
	array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateUser')),
	array('label'=>'Change Password', 'url'=>array('chnpwd', 'id'=>$model->id), 'visible'=>Yii::app()->user->checkAccess('UpdateUser')),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->checkAccess('DeleteUser')),
	array('label'=>'Search User', 'url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('SearchUser')),
);
?>

<h1> 
<?php 
if(Yii::app()->user->role!="Admin")
	echo "My Profile";
else
	echo $model->username." Profile";
?> 
</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',		
		'fullname',
		'username',
		'usrtype',
		'address',
		'phone',
		'email',
		//'password',
		'regdate',
	),
)); ?>

<br/><br/><br/><br/><br/>

<?php
if(Yii::app()->user->role=="Admin"){
	if($model->usrtype=="PropertyOwner"){
		echo "<h3><u>Property</u></h3>";
		$query=Propdetail::model()->findAllByAttributes(array('fk_owner'=>$model->id));
		$dataProvider = new CArrayDataProvider($rawData=$query);
		$this->widget('zii.widgets.grid.CGridView',array(
			'dataProvider'=>$dataProvider,
			'selectionChanged'=>"function(id){window.location='"
				.Yii::app()->urlManager->createUrl('propdetail/view',array('id'=>''))."' + 
				$.fn.yiiGridView.getSelection(id);}",
			'columns'=>array(
				array('name'=>'name',
					'header'=>'Property Name'),
				array('name'=>'category',
					'header'=>'Category'),				
				array('name'=>'location',
					'header'=>'Location'),
				array('name'=>'description',
					'header'=>'Description'),
				array('name'=>'value',
					'header'=>'Value'),
				array('name'=>'dateposted',
					'header'=>'Date Posted'),
				array('name'=>'status',
					'header'=>'Status'),
			)
		));
	}
	
	if($model->usrtype=="Client"){
		echo "<h3><u>Requirements</u></h3>";
		$query=Proprequirement::model()->findAllByAttributes(array('fk_client'=>$model->id));
		$dataProvider = new CArrayDataProvider($rawData=$query);
		$this->widget('zii.widgets.grid.CGridView',array(
			'dataProvider'=>$dataProvider,
			'selectionChanged'=>"function(id){window.location='"
				.Yii::app()->urlManager->createUrl('proprequirement/view',array('id'=>''))."' + 
				$.fn.yiiGridView.getSelection(id);}",			
			'columns'=>array(
				array('name'=>'category',
					'header'=>'Category'),				
				array('name'=>'location',
					'header'=>'Location'),
				array('name'=>'description',
					'header'=>'Description'),
				array('name'=>'budget',
					'header'=>'Budget'),
				array('name'=>'dateposted',
					'header'=>'Date Posted'),
				array('name'=>'status',
					'header'=>'Status'),					
			)
		));
?>		
		<br/><br/><br/><br/><br/>
<?php
		echo "<h3><u>Visit Schedules</u></h3>";
		$query=Visitschedule::model()->findAllByAttributes(array('fk_client'=>$model->id));
		$dataProvider = new CArrayDataProvider($rawData=$query);
		$this->widget('zii.widgets.grid.CGridView',array(
			'dataProvider'=>$dataProvider,
			'selectionChanged'=>"function(id){window.location='"
				.Yii::app()->urlManager->createUrl('visitschedule/view',array('id'=>''))."' + 
				$.fn.yiiGridView.getSelection(id);}",			
			'columns'=>array(
				array('header'=>'Property Name',
					'value'=>'$data->fkPropdetail->name'),				
				array('name'=>'datetime',
					'header'=>'Date-Time'),
				array('name'=>'paymentcode',
					'header'=>'Payment Code'),
				array('name'=>'status',
					'header'=>'Status'),					
			)
		));
	}
}
 ?>