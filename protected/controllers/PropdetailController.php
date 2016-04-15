<?php

class PropdetailController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('view'),
				'roles'=>array('ViewProperty'),
			),
			array('allow',
				'actions'=>array('create'),
				'roles'=>array('CreateProperty'),
			),
			array('allow',
				'actions'=>array('update'),
				'roles'=>array('UpdateProperty'),
			),
			array('allow',
				'actions'=>array('delete'),
				'roles'=>array('DeleteProperty'),
			),
			array('allow',
				'actions'=>array('index'),
				'roles'=>array('ListProperty'),
			),
			array('allow',
				'actions'=>array('admin'),
				'roles'=>array('SearchProperty'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Propdetail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propdetail']))
		{
			$powner=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
			$model->attributes=$_POST['Propdetail'];
			$model->fk_owner=$powner->id;
			$model->dateposted=date_create()->format('Y-m-d H-i-s');
			//upload photo with random name
			$rnd = rand(0,9999);  // generate random number between 0-9999 
            $uploadedFile=CUploadedFile::getInstance($model,'photos');
            $fileName = "{$rnd}-{$model->name}";  // random number + file name
            $model->photos = $fileName;
			if($model->save()){
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);  // image will upload to oremis/images/
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Propdetail']))
		{
			
			$model->attributes=$_POST['Propdetail'];
            $rnd = rand(0,9999);  // generate random number between 0-9999 
            $uploadedFile=CUploadedFile::getInstance($model,'photos');
            $fileName = "{$rnd}-{$model->name}";// random number + file name
            $model->photos = $fileName;
			if($model->save()){
				if($uploadedFile!=null){
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);
				$this->redirect(array('view','id'=>$model->id));
				}
				throw new CHttpException(": Make sure that you select a photo before clicking 'save'");
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$powner=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if(Yii::app()->user->role!="Admin"){
			$dataProvider=new CActiveDataProvider('Propdetail', array(
				'criteria'=>array(
					'condition'=>'fk_owner='.$powner->id,
				),
			));
		}
		else{
			$dataProvider=new CActiveDataProvider('Propdetail');
		}
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Propdetail('search');
		$model->unsetAttributes();  // clear any default values
		$model->status="Available";
		if(isset($_GET['Propdetail']))
			$model->attributes=$_GET['Propdetail'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Propdetail the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Propdetail::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Propdetail $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='propdetail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}