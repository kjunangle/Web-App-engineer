<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">
	
	<div class="row">
	<div class="thumbnail">
	<div class="caption">
	<h2><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:
	<?php echo CHtml::encode($data->topic); ?></h2>
	<br />
</div>

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />
	 
	</div>
	
</div>

</div>