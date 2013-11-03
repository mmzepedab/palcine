<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'List Room', 'url'=>array('index')),
	array('label'=>'Manage Room', 'url'=>array('admin')),
);*/
?>

<h1>Crear Sala</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>