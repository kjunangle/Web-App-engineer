<?php
/* @var $this MoviesNewsController */
/* @var $model MoviesNews */

$this->breadcrumbs=array(
	'Movies News'=>array('index'),
	$model->newsID,
);

$this->menu=array(
	array('label'=>'List MoviesNews', 'url'=>array('index')),
	array('label'=>'Create MoviesNews', 'url'=>array('create')),
	array('label'=>'Update MoviesNews', 'url'=>array('update', 'id'=>$model->newsID)),
	array('label'=>'Delete MoviesNews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->newsID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MoviesNews', 'url'=>array('admin')),
);
?>

<h1>View MoviesNews #<?php echo $model->newsID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'newsID',
		'topic',
		'content',
		'image_path',
	),
)); ?>
