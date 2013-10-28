<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */

$this->breadcrumbs=array(
	'Room Times'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RoomTime', 'url'=>array('index')),
	array('label'=>'Manage RoomTime', 'url'=>array('admin')),
);
?>

<h1>Create RoomTime</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>