<?php
 
class NewsController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			) ,
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{       $photo = Image::model()->findAllByAttributes(array('imageid'=>$id));
       
		$this->render('view',array(
			'model'=>$this->loadModel($id),'photo'=>$photo
		));
	}

 
	public function actionCreate()
	{
		$model=new News; 
		if(isset($_POST['News']))
		{
                     $photos = CUploadedFile::getInstancesByName('images');
                     $url = array();
                     foreach($photos as $files){
                     $fn = $files->getTempName();
                     $client_id="c633cc927c486e6";
                     $handle = fopen($fn, "r");
                     $data = fread($handle, filesize($fn));
                     $pvars   = array('image' => base64_encode($data));
                 $timeout = 30;
                              $curl = curl_init();
                     curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
                 curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
                     curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
                        curl_setopt($curl, CURLOPT_POST, 1);
                         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                        $out = curl_exec($curl);
                        curl_close ($curl);
                        $pms = json_decode($out,true);
                        array_push($url, $pms['data']['link']);
                     }
			$model->attributes=$_POST['News'];
			if($model->save()){
                            foreach($url as $path){
                              
                                     $model_image = new Image;
                                    $model_image->imageid = $model->id;
                                    $model_image->path =$path;
                                    $model_image->save();
                            }
                            $this->redirect(array('view','id'=>$model->id));
			}	
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

 
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                $photo = Image::model()->findAllByAttributes(array('imageid'=>$id));
 

		if(isset($_POST['News']))
		{
		 $photos = CUploadedFile::getInstancesByName('images');
                     $url = array();
                     foreach($photos as $files){
                     $fn = $files->getTempName();
                      $client_id="c633cc927c486e6";
                     $handle = fopen($fn, "r");
                     $data = fread($handle, filesize($fn));
                     $pvars   = array('image' => base64_encode($data));
                 $timeout = 30;
                              $curl = curl_init();
                     curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
                 curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
                     curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
                        curl_setopt($curl, CURLOPT_POST, 1);
                         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
                        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                        $out = curl_exec($curl);
                        curl_close ($curl);
                        $pms = json_decode($out,true);
                        array_push($url, $pms['data']['link']);
                     }
                       $model->attributes=$_POST['News'];
			if($model->save()){
                            foreach($url as $path){
                                     $model_image = new Image;
                                    $model_image->imageid = $model->id;
                                    $model_image->path =$path;
                                    $model_image->save();
                            }
                            $this->redirect(array('view','id'=>$model->id));
			}	 
		}

		$this->render('update',array(
			'model'=>$model,'photo'=>$photo
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
             
		$dataProvider=new CActiveDataProvider('News',array(
                    
                     'criteria' => array(
                'order'=>'id DESC',
                                  ),
            'pagination' => array( 
                'pageSize' => 20 ,
            ),
                ));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
