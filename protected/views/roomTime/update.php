<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */

$this->breadcrumbs=array(
	'Room Times'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RoomTime', 'url'=>array('index')),
	array('label'=>'Create RoomTime', 'url'=>array('create')),
	array('label'=>'View RoomTime', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RoomTime', 'url'=>array('admin')),
);
?>

<h1>Update RoomTime <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>