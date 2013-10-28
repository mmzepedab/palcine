<?php
/* @var $this RoomTimeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Room Times',
);

$this->menu=array(
	array('label'=>'Create RoomTime', 'url'=>array('create')),
	array('label'=>'Manage RoomTime', 'url'=>array('admin')),
);
?>

<h1>Room Times</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
