<?php
/* @var $this RoomController */
/* @var $data Room */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theater_id')); ?>:</b>
	<?php echo CHtml::encode($data->theater_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_3d')); ?>:</b>
	<?php echo CHtml::encode($data->is_3d); ?>
	<br />


</div>