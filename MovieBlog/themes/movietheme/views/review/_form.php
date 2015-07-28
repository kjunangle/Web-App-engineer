<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'review-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tmvdb_id'); ?>
		<?php echo $form->textField($model,'tmvdb_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tmvdb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tmvdb_title'); ?>
		<?php echo $form->textArea($model,'tmvdb_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tmvdb_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'review'); ?>
		<?php echo $form->textArea($model,'review',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->