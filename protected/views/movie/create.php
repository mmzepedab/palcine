<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Peliculas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Pelicuals', 'url'=>array('index')),
	array('label'=>'Administrar Peliculas', 'url'=>array('admin')),
);
?>

<h1>Crear Pelicula</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>