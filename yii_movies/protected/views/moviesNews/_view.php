<?php
/* @var $this MoviesNewsController */
/* @var $data MoviesNews */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('newsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->newsID), array('view', 'id'=>$data->newsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:</b>
	<?php echo CHtml::encode($data->topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_path')); ?>:</b>
	<?php echo CHtml::encode($data->image_path); ?>
	<br />


</div>