<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>



<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">
	<div class="form-group">
		<div class="col-md-offset-3 col-md-6">
	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	</div>

	<div class="row">
		<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	</div>

	<div class="row">
		<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'email'); ?>
	</dic>
	</div>

	<center><div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
</center>

<?php $this->endWidget(); ?>
</div>
</div>
</div><!-- form -->