<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-time-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'room_id'); ?>
                <?php echo $form->dropDownList($model,'room_id', 
                        CHtml::listData(Room::model()->findAll(), 'id', 'name'),                        
                        array('options' => array($_GET['r_id']=>array('selected'=>true))),
                        array('empty'=>'Seleccionar...')
                        ); ?>
		<?php /*echo $form->textField($model,'room_id'); */?>
		<?php echo $form->error($model,'room_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'movie_id'); ?>
                <?php echo $form->dropDownList($model,'movie_id', 
                        CHtml::listData(Movie::model()->findAll(), 'id', 'name'),
                        array('empty'=>'Seleccionar...')
                        ); ?>
		<?php //echo $form->textField($model,'movie_id'); ?>
		<?php echo $form->error($model,'movie_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->