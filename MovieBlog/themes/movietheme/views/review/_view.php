<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmvdb_id')); ?>:</b>
	<?php echo CHtml::encode($data->tmvdb_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmvdb_title')); ?>:</b>
	<?php echo CHtml::encode($data->tmvdb_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('review')); ?>:</b>
	<?php echo CHtml::encode($data->review); ?>
	<br />


</div>