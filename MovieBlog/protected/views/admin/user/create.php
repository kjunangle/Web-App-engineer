<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List User', 'url'=>array('index')),
// 	array('label'=>'Manage User', 'url'=>array('admin')),
// );
?>




<div class="container">
	<br>

<a class="btn btn-default" href="/admin/user/index" role="button">List User</a>
<a class="btn btn-default" href="/admin/user/admin" role="button">Manage User</a>
<div class="jumbotron">
<center><h1>Create User</h1></center>
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>