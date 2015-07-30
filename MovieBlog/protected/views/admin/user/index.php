<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

// $this->menu=array(
// 	array('label'=>'Create User', 'url'=>array('create')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );

?>
<div class="container">

<div class="panel panel-default">
  <div class="panel-heading"><h1>User <span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1></div>
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