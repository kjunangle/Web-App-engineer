<?php
/* @var $this MoviesNewsController */
/* @var $model MoviesNews */

$this->breadcrumbs=array(
	'Movies News'=>array('index'),
	$model->newsID=>array('view','id'=>$model->newsID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MoviesNews', 'url'=>array('index')),
	array('label'=>'Create MoviesNews', 'url'=>array('create')),
	array('label'=>'View MoviesNews', 'url'=>array('view', 'id'=>$model->newsID)),
	array('label'=>'Manage MoviesNews', 'url'=>array('admin')),
);
?>

<h1>Update MoviesNews <?php echo $model->newsID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>