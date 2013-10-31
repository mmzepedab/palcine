<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Peliculas'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Peliculas', 'url'=>array('index')),
	array('label'=>'Crear Pelicula', 'url'=>array('create')),
	array('label'=>'Ver Pelicula', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Peliculas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Pelicula <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>