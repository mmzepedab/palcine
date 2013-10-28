<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */

$this->breadcrumbs=array(
	'Room Times'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RoomTime', 'url'=>array('index')),
	array('label'=>'Create RoomTime', 'url'=>array('create')),
	array('label'=>'Update RoomTime', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RoomTime', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RoomTime', 'url'=>array('admin')),
);
?>

<h1>View RoomTime #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'room_id',
		'time',
		'movie_id',
	),
)); ?>
