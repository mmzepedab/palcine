<?php
/* @var $this MovieController */
/* @var $model Movie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movie-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Los campos con <span class="required">*</span>son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_english'); ?>
		<?php echo $form->textField($model,'name_english',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name_english'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>5, 'cols'=>50,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'release_date'); ?>
            <?php    
            $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                'model'=>$model,
                                'attribute'=>'release_date',
                                'value'=>$model->release_date,
                                'options'=>array(
                                'showAnim'=>'fold',
                                'dateFormat'=>'yy-mm-dd',
                                ),
                                'htmlOptions'=>array(
                                'style'=>'height:20px;'
                                ),
                        )); 
            ?>
		<?php /*echo $form->textField($model,'release_date'); */?>
		<?php echo $form->error($model,'release_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length',array('size'=>10,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genre_id'); ?>
		<?php echo $form->dropDownList($model,'genre_id', CHtml::listData(Genre::model()->findAll(), 'id', 'name'), array('empty'=>'Seleccionar...')); ?>
		<?php echo $form->error($model,'genre_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_premiere'); ?>
                <?php echo $form->dropDownList($model,'is_premiere',array(1=>'Si',0=>'No')); ?>
		<?php /*echo $form->textField($model,'is_premiere'); */?>
		<?php echo $form->error($model,'is_premiere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
                <?php /*echo $form->textField($model,'image',array('size'=>60,'maxlength'=>500)); */?>
                <?php /*echo CHtml::activeFileField($model, 'image'); */?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_thumbnail'); ?>
                <?php echo $form->fileField($model,'image_thumbnail'); ?>
		<?php /*echo $form->textField($model,'image_thumbnail',array('size'=>60,'maxlength'=>500)); */?>
		<?php echo $form->error($model,'image_thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_thumbnail2x'); ?>
                <?php echo $form->fileField($model,'image_thumbnail2x'); ?>
		<?php /*echo $form->textField($model,'image_thumbnail2x',array('size'=>60,'maxlength'=>500)); */?>
		<?php echo $form->error($model,'image_thumbnail2x'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trailer_link'); ?>
		<?php echo $form->textField($model,'trailer_link',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'trailer_link'); ?>
	</div>

	<div class="row">
                <?php /*if(!$model->isNewRecord ){*/echo $form->labelEx($model,'raiting');/*}*/ ?>
		<?php echo $form->dropDownList($model,'raiting',
                        array(
                                '0'=>'0',
                                '1'=>'1',
                                '2'=>'2',
                                '3'=>'3',
                                '4'=>'4',
                                '5'=>'5',
                            )); ?>
                    <?php /*
                if(!$model->isNewRecord ){
                    echo $form->textField($model,'raiting'); 
                }else{
                    echo $form->textField($model,'raiting',array(
                        'hidden' => $model->isNewRecord,
                        'value' => 0
                        ));
                }    
                    */ ?>
		<?php echo $form->error($model,'raiting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'restriction'); ?>
		<?php echo $form->dropDownList($model,'restriction',
                        array('Todo publico'=>'Todo publico',
                                'Mayores de 13'=>'Mayores de 13',
                                'Mayores de 15'=>'Mayores de 15',
                                'Mayores de 18'=>'Mayores de 18',
                                'Mayores de 21'=>'Mayores de 21',
                            )); ?>
		<?php echo $form->error($model,'restriction'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'create_time'); ?>
		<?php // echo $form->textField($model,'create_time'); ?>
		<?php // echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'create_user'); ?>
		<?php // echo $form->textField($model,'create_user'); ?>
		<?php // echo $form->error($model,'create_user'); ?>
	</div>

	<div class="row">
		<?php // echo $form->labelEx($model,'update_time'); ?>
		<?php // echo $form->textField($model,'update_time'); ?>
		<?php // echo $form->error($model,'update_time'); ?>
	</div>
        
	<div class="row">
		<?php // echo $form->labelEx($model,'update_user'); ?>
		<?php // echo $form->textField($model,'update_user'); ?>
		<?php // echo $form->error($model,'update_user'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->