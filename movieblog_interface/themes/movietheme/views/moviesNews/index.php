<?php
/* @var $this MoviesNewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movies News',
);

$this->menu=array(
	array('label'=>'Create MoviesNews', 'url'=>array('create')),
	array('label'=>'Manage MoviesNews', 'url'=>array('admin')),
);
?>

<h1>Movies News</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
