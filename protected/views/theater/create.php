<?php
/* @var $this TheaterController */
/* @var $model Theater */

$this->breadcrumbs=array(
	'Cines'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Cines', 'url'=>array('index')),
	array('label'=>'Administrar Cines', 'url'=>array('admin')),
);
?>

<h1>Crear Cine</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>