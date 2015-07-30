<?php
/* @var $this MovieBlogController */

$this->breadcrumbs=array(
	'Movie Details',
);

?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<div class="container">
  <div id="tbody">

  </div>
</div>

<div class='container'>
	<div class="col-sm-4 col-md-12">
    <div class="thumbnail">
    	<div class="row">
    		<div class="col-md-11"><H2>Review</h2></div>
    		<div class="col-md-1"><a href="../review/create?id=<?php echo $_GET['id']; ?>&title=<?php echo $_GET['tittle'];?>">Edit</a></div>
    	</div>
    <div class="row"><div class="col-md-11">
	 
	</div></div>
</div>
</div>

</div>

<div class='container'>

  <div class="list-group">
  <a href="#" class="list-group-item disabled">
    Digg
  </a>
  <div id="digg">
         
        
    </div>
</div>
    
</div>