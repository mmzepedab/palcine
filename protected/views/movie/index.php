<?php
/* @var $this MovieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peliculas',
);

$this->menu=array(
	array('label'=>'Crear Pelicula', 'url'=>array('create')),
	array('label'=>'Administrar Peliculas', 'url'=>array('admin')),
);
?>

<h1>Peliculas</h1>


<?php 
$dataProvider->sort->defaultOrder='ID DESC';
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
