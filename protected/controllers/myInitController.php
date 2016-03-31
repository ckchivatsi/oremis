<?php

class myInitController extends Controller
{
	public function actionRun()
	{
		if(Yii::app()->user->isGuest) echo "hello";
		else echo Yii::app()->user->role;
		
	}
	
	public function actionCheckAccess()
	{
		if(Yii::app()->user->checkAccess('DeleteProperty')){
			echo "AUTHORIZED";
		}else{
			echo "DENIED";
		}
	}
}