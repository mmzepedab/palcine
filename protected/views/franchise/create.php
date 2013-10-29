<?php
/* @var $this FranchiseController */
/* @var $model Franchise */

$this->breadcrumbs=array(
	'Franquicias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Franquicias', 'url'=>array('index')),
	array('label'=>'Administrar Franquicias', 'url'=>array('admin')),
);
?>

<h1>Crear Franquicia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>