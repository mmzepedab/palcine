<?php
/* @var $this RoomTimeController */
/* @var $model RoomTime */

$this->breadcrumbs=array(
	'Tandas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Tandas', 'url'=>array('index')),
	array('label'=>'Crear Tanda', 'url'=>array('create')),
	array('label'=>'Actualizar Tanda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tanda', 'url'=>array('admin')),
);
?>

<h1>Ver Tanda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'room_id',
		'time',
		'movie.name',
	),
)); ?>
