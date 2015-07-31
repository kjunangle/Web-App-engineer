<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News',
);

// $this->menu=array(
// 	array('label'=>'Create News', 'url'=>array('create')),
// 	array('label'=>'Manage News', 'url'=>array('admin')),
// );
?>
<div class="container">


<div class="panel panel-default">
  <div class="panel-heading"><h1>News <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h1></div>
  <div class="container col-md-12 bgblack">
  <div class="panel-body  ">
    <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
  </div>
</div>
</div>




</div>