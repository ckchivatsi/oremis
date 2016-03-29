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
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),	//always show
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),	//hide for admin user
				
				//<-- user specific menu items -->
				//show these menus when user is client
				/* array('label'=>'Search Property', 'url'=>array('#')),
				//array('label'=>'Buy Property', 'url'=>array('#')),
				//array('label'=>'Rent Property', 'url'=>array('#')),
				array('label'=>'My Schedule', 'url'=>array('#')),
				array('label'=>'Post Requirement', 'url'=>array('#')),
				array('label'=>'Manage Requirements', 'url'=>array('#')), */	
				
				//show these menus when user is property owner
				/* array('label'=>'Post Property', 'url'=>array('#')),
				array('label'=>'My Property', 'url'=>array('#')),
				array('label'=>'Client Requirements', 'url'=>array('#')), */
				
				//show these menus when user is admin
				array('label'=>'Users', 'url'=>array('#')),
				array('label'=>'Property Details', 'url'=>array('#')),
				array('label'=>'Property Requirements', 'url'=>array('#')),
				array('label'=>'Visit Schedules', 'url'=>array('#')),
				//<!- user specific menu items -!>
				
				array('label'=>'Contact Us', 'url'=>array('/site/contact')),	//hide for admin
				array('label'=>'My Profile', 'url'=>array('')),
				array('label'=>'Register', 'url'=>array('/user/register'), 'visible'=>Yii::app()->user->isGuest),	//show for guest user only
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),	//show for guest user only
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),	//show for non-guest user only
				
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
