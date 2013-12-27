<?php

class MovieController extends Controller
{
        
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','viewTimes','times'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionViewTimes($m_id,$loc)
	{
		$this->render('viewTimes',array(
			'model'=>$this->loadModel($m_id),
                        'loc'=>$loc
		));
	}
        
        /**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionTimes($m_id,$loc)
	{
		$this->renderPartial('times',array(
			'model'=>$this->loadModel($m_id),
                        'loc'=>$loc
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Movie;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
		if(isset($_POST['Movie']))
		{
			$model->attributes=$_POST['Movie'];
                        $uploadedImage=CUploadedFile::getInstance($model,'image');
                        $model->image = $uploadedImage->getName();
                        $uploadedThumbnail=CUploadedFile::getInstance($model,'image_thumbnail');
                        $model->image_thumbnail = $uploadedThumbnail->getName();
                        $uploadedThumbnail2x=CUploadedFile::getInstance($model,'image_thumbnail2x');
                        $model->image_thumbnail2x = $uploadedThumbnail2x->getName();
                        
                        if($model->save()){
                            //Upload Images and Resize
                            $nameImage = dirname(Yii::app()->request->scriptFile).'/images/movies/'.$model->image;
                            $uploadedImage->saveAs($nameImage, true);
                            $nameImage = Yii::app()->image->load($nameImage);
                            $nameImage->resize(255, 345);
                            $nameImage->save();
                            
                            $nameThumbnail = dirname(Yii::app()->request->scriptFile).'/images/movies/thumbnails/'.$model->image_thumbnail;
                            $uploadedThumbnail->saveAs($nameThumbnail, true);
                            $nameThumbnail = Yii::app()->image->load($nameThumbnail);
                            $nameThumbnail->resize(100, 100);
                            $nameThumbnail->save();
                            
                            $nameThumbnail2x = dirname(Yii::app()->request->scriptFile).'/images/movies/thumbnails/2x/'.$model->image_thumbnail2x;
                            $uploadedThumbnail2x->saveAs($nameThumbnail2x, true);
                            $nameThumbnail2x = Yii::app()->image->load($nameThumbnail2x);
                            $nameThumbnail2x->resize(200, 200);
                            $nameThumbnail2x->save();
    
                            //$model->image->saveAs('../images');
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

		if(isset($_POST['Movie']))
		{
                        $myImage = $model->image;
                        $myImageThumbnail = $model->image_thumbnail;
                        $myImageThumbnail2x = $model->image_thumbnail2x;
			$model->attributes=$_POST['Movie'];
                        $model->image = $myImage;
                        $model->image_thumbnail = $myImageThumbnail;
                        $model->image_thumbnail2x = $myImageThumbnail2x;
                                
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Movie');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Movie('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Movie']))
			$model->attributes=$_GET['Movie'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Movie the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Movie::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Movie $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='movie-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionMovieRoomTimes(){
            $data=  RoomTime::model()->findAll('movie_id=:movie_id', 
                          array(':movie_id'=>(int) $_POST['country_id']));

            $data=CHtml::listData($data,'id','name');
            foreach($data as $value=>$name)
            {
                echo CHtml::tag('option',
                           array('value'=>$value),CHtml::encode($name),true);
            }
        }
}
