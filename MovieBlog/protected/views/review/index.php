<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
);

// $this->menu=array(
// 	array('label'=>'Create Review', 'url'=>array('create')),
// 	array('label'=>'Manage Review', 'url'=>array('admin')),
// );
?>
<div class="container">

<div class="panel panel-default">
  <div class="panel-heading"><h1>Review <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1></div>
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