<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'View News', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>
<div class="container">
<h1>Update News <?php echo $model->id; ?></h1>

    
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form', 
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'topic'); ?>
		<?php echo $form->textField($model,'topic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'topic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<div class="row">
		<?php echo CHtml::label("photo", false) ?>
            
		<?php $this->widget('CMultiFileUpload', array(
                'name' => 'images',
                'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
                'duplicate' => 'Duplicate file!', // useful, i think
                'denied' => 'Invalid file type', // useful, i think
            ));
                
                ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
 <?php
 foreach($photo as $pic){
    echo "<img src='".$pic->path."'>";
       
            echo "<input type='button' class='delete' name=".$pic->id." value='Delete'/>";
}
 ?>
        
        
</div><!-- form -->
<script type="text/javascript">
	$(document).ready(function()
	{
		$('.delete').click(function()
		{
                      //event.preventDefault(); 
                     
                    
		if (confirm("Are you sure you want to delete this picture?"))
 			{
			var id =$(this).context.name;
                      
 
				$.ajax(
				{
					   type: "GET",
					   url: window.location,
					   data: {picid:id},
					
					   success: function()
					   {
                                               
                                               location.reload();
							//parent.fadeOut('slow', function() {$(this).remove();});
                                                        
					   }
				 });				
 		}
		});
		
		// style the table with alternate colors
		// sets specified color for every odd row
		 
	});
        
        </script>
        
        <?php
        
        
if(isset($_GET['picid'])){
   $pic_model = new Image;
   $pic_model->deleteByPk($_GET['picid']);
   $pic_model->save();
    
}

        ?>