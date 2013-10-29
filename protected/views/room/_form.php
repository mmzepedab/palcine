<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theater_id'); ?>
                <?php echo $form->dropDownList($model,'theater_id', 
                        CHtml::listData(Theater::model()->findAll(), 'id', 'name'),                        
                        array('options' => array($_GET['t_id']=>array('selected'=>true))),
                        array('empty'=>'Seleccionar...')
                        ); ?>
		<?php //echo $form->textField($model,'theater_id'); ?>
		<?php echo $form->error($model,'theater_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_3d'); ?>
                <?php echo $form->dropDownList($model,'is_3d',array(1=>'Si',0=>'No')); ?>
		<?php //echo $form->textField($model,'is_3d'); ?>
		<?php echo $form->error($model,'is_3d'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->