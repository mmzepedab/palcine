<?php
/* @var $this MovieController */
/* @var $data Movie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_english')); ?>:</b>
	<?php echo CHtml::encode($data->name_english); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('release_date')); ?>:</b>
	<?php echo CHtml::encode($data->release_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genre_id')); ?>:</b>
	<?php echo CHtml::encode($data->genre->name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_premiere')); ?>:</b>
	<?php echo CHtml::encode($data->is_premiere); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->image_thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_thumbnail2x')); ?>:</b>
	<?php echo CHtml::encode($data->image_thumbnail2x); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trailer_link')); ?>:</b>
	<?php echo CHtml::encode($data->trailer_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raiting')); ?>:</b>
	<?php echo CHtml::encode($data->raiting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction')); ?>:</b>
	<?php echo CHtml::encode($data->restriction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
	<?php echo CHtml::encode($data->update_user); ?>
	<br />

	*/ ?>

</div>