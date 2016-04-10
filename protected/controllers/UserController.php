<?php

class UserController extends Controller
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
				'roles'=>array('ViewUser'),
			),
			array('allow',
				'actions'=>array('viewprofile'),
				'roles'=>array('ViewOwnProfile'),
			),
			array('allow',
				'actions'=>array('create'),
				'roles'=>array('CreateUser'),
			),
			array('allow',
				'actions'=>array('update'),
				'roles'=>array('UpdateUser'),
			),
			array('allow',
				'actions'=>array('chnpwd'),
				'roles'=>array('UpdateUser'),
			),
			array('allow',
				'actions'=>array('delete'),
				'roles'=>array('DeleteUser'),
			),
			array('allow',
				'actions'=>array('index'),
				'roles'=>array('ListUsers'),
			),
			array('allow',
				'actions'=>array('admin'),
				'roles'=>array('SearchUser'),
			),
			array('allow',
				'actions'=>array('register'),
				'users'=>array('?'),
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
		Display user profile.
	**/
	public function actionViewProfile($username)
	{
		$this->render('view',array(
			'model'=>$this->loadProfile($username),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->password=crypt($model->password,'nihisa09');
			$model->regdate=date_create()->format('Y-m-d H-i-s');
			if($model->save()){
				//auto-assign role to the new user
				$auth=new Authassignment;
				$auth->itemname=$model->usrtype;
				$auth->userid=$model->username;
				$auth->data="N;";
				$auth->save();
				// if form inputs are saved
				$this->redirect(array('view','id'=>$model->id));
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	/**
		Registration/SignUp Form
	**/
	public function actionRegister()
	{
		$model=new User('register');

		// uncomment the following code to enable ajax-based validation
		
		/* if(isset($_POST['ajax']) && $_POST['ajax']==='user-register-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		} */
		

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->password=crypt($model->password,'nihisa09');
			$model->regdate=date_create()->format('Y-m-d H-i-s');
			if($model->save())
			{
				//auto-assign role to the new user
				$auth=new Authassignment;
				$auth->itemname=$model->usrtype;
				$auth->userid=$model->username;
				$auth->data="N;";
				$auth->save();
				// if form inputs are saved
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		$this->render('register',array(
			'model'=>$model
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

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	/**
		Change User Password
	**/
	
	public function actionChnPwd($id)
	{	
		$model=$this->loadModel($id);		
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->password=crypt($model->password,'nihisa09');
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('chnpwd',array(
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
		$user=User::model()->findByAttributes(array('username'=>Yii::app()->user->name));
		if(Yii::app()->user->role!="Admin"){
			$dataProvider=new CActiveDataProvider('User', array(
				'criteria'=>array(
					'condition'=>'id='.$user->id,
				),
			));
		}
		else{
			$dataProvider=new CActiveDataProvider('User');
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
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
		Returns the data model based on the username given in the GET variable.
	**/
	public function loadProfile($username)
	{
		$model=User::model()->findByAttributes(array('username'=>$username));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
