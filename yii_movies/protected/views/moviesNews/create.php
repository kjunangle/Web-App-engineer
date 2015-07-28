<?php
/* @var $this MoviesNewsController */
/* @var $model MoviesNews */

$this->breadcrumbs=array(
	'Movies News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MoviesNews', 'url'=>array('index')),
	array('label'=>'Manage MoviesNews', 'url'=>array('admin')),
);
?>

<h1>Create MoviesNews</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>