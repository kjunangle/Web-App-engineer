<?php

class MovieBlogController extends Controller
{
	public function actionIndex()
	{
                $baseUrl = Yii::app()->baseUrl; 
                $cs = Yii::app()->getClientScript();
                    $cs->registerScriptFile($baseUrl.'/js/tmdb.js');
                    $cs->registerScriptFile($baseUrl.'/js/jquery.paginate.js');
                    $cs->registerCssFile($baseUrl . '/css/stylepagination.css');
		$this->render('index');
	}
 	public function actionNowShowing()
	{
                $baseUrl = Yii::app()->baseUrl; 
                $cs = Yii::app()->getClientScript();
                   $cs->registerScriptFile($baseUrl.'/js/tmdb_nowshowing.js');
                    $cs->registerScriptFile($baseUrl.'/js/jquery.paginate.js');
                   $cs->registerCssFile($baseUrl . '/css/stylepagination.css');
		$this->render('NowShowing');
	}
  	public function actionUpcoming()
	{
                $baseUrl = Yii::app()->baseUrl; 
                $cs = Yii::app()->getClientScript();
                   $cs->registerScriptFile($baseUrl.'/js/tmdb_upcoming.js');
                    $cs->registerScriptFile($baseUrl.'/js/jquery.paginate.js');
                   $cs->registerCssFile($baseUrl . '/css/stylepagination.css');
<<<<<<< HEAD
        
        
        
        
		$this->render('NowShowing');
=======
		$this->render('Upcoming');
>>>>>>> origin/master
	}
        
        public function actionMovieDetails()
	{
                
                 $baseUrl = Yii::app()->baseUrl; 
                $cs = Yii::app()->getClientScript();
                $cs->registerScriptFile($baseUrl.'/js/tmdb_details.js');
                  $cs->registerScriptFile($baseUrl.'/js/Diggjson.js');
		$this->render('MovieDetails');
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}