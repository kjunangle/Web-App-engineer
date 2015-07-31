<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List News', 'url'=>array('index')),
// 	array('label'=>'Create News', 'url'=>array('create')),
// 	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage News', 'url'=>array('admin')),
// );
?>
<div class="container">
<h1>View News :<?php echo $model->topic; ?></h1>

<div class='container'><div class='col-md-offset-2'><div class='col-md-8'>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">


<?php
foreach($photo as $pic){

    echo '<div class="item active">
      <img src="'.$pic->path.'" alt="...">
    </div>';
}


?>

    
    





    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




</div></div></div>

<br>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'topic',
		'content',
	),
)); ?>




</div>