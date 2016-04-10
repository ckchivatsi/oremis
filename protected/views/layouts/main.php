<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo">ONLINE REAL ESTATE MANAGEMENT SYSTEM</div>
	</div><!-- header -->
	
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				
				//<-- user specific menu items -->
				//show these menus when user is client
				array('label'=>'Search Property', 'url'=>array('/propdetail/admin'), 'visible'=>Yii::app()->user->checkAccess('FindProperty') && Yii::app()->user->role!="Admin"),
				//array('label'=>'Buy Property', 'url'=>array('#'), 'visible'=>Yii::app()->user->checkAccess('')),
				//array('label'=>'Rent Property', 'url'=>array('#'), 'visible'=>Yii::app()->user->checkAccess('')),
				array('label'=>'My Schedule', 'url'=>array('visitschedule/index'), 'visible'=>Yii::app()->user->checkAccess('MySchedule') && Yii::app()->user->role!="Admin"),
				array('label'=>'Post Requirement', 'url'=>array('proprequirement/create'), 'visible'=>Yii::app()->user->checkAccess('CreateRequirement') && Yii::app()->user->role!="Admin"),
				array('label'=>'My Requirements', 'url'=>array('proprequirement/index'), 'visible'=>Yii::app()->user->checkAccess('MyRequirements') && Yii::app()->user->role!="Admin"),	
				
				//show these menus when user is property owner
				array('label'=>'Post Property', 'url'=>array('propdetail/create'), 'visible'=>Yii::app()->user->checkAccess('CreateProperty') && Yii::app()->user->role!="Admin"),
				array('label'=>'My Property', 'url'=>array('propdetail/index'), 'visible'=>Yii::app()->user->checkAccess('MyProperty') && Yii::app()->user->role!="Admin"),
				array('label'=>'Search Requirements', 'url'=>array('proprequirement/admin'), 'visible'=>Yii::app()->user->checkAccess('FindRequirements') && Yii::app()->user->role!="Admin"),
				
				//show these menus when user is admin
				array('label'=>'Users', 'url'=>array('user/index'), 'visible'=>Yii::app()->user->checkAccess('ManageUsers')),
				array('label'=>'Property', 'url'=>array('propdetail/index'), 'visible'=>Yii::app()->user->checkAccess('ManageProperty')),
				array('label'=>'Requirements', 'url'=>array('proprequirement/index'), 'visible'=>Yii::app()->user->checkAccess('ManageRequirements')),
				array('label'=>'Visit Schedules', 'url'=>array('visitschedule/index'), 'visible'=>Yii::app()->user->checkAccess('ManageSchedules')),
				array('label'=>'Property Types', 'url'=>array('proptype/index'), 'visible'=>Yii::app()->user->checkAccess('ManagePropertyTypes')),				
				//<!- user specific menu items -!>
				
				array('label'=>'Contact Us', 'url'=>array('/site/contact')),
				array('label'=>'My Profile', 'url'=>array('/user/viewprofile', 'username'=>Yii::app()->user->name), 'visible'=>Yii::app()->user->checkAccess('MyProfile')),
				array('label'=>'Register', 'url'=>array('/user/register'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				
			),
		)); ?>
	</div><!-- mainmenu -->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by OREMIS.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
