<?php

class myInitController extends Controller
{
	public function actionRun()
	{
		
		$params=array('user'=>Yii::app()->user->name);
		if(Yii::app()->user->checkAccess('ViewOwnProfile',$params)) {
			echo "hello";
		}else 
			echo "rdtdhd";//Yii::app()->user->id;
		
	}
	
	public function actionCheckAccess()
	{
		if(Yii::app()->user->checkAccess('ViewSchedule')){
			echo "AUTHORIZED";
		}else{
			echo "DENIED";
		}
	}
}