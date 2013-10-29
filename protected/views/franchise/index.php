<?php
/* @var $this FranchiseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Franquicias',
);

$this->menu=array(
	array('label'=>'Crear Franquicia', 'url'=>array('create')),
	array('label'=>'Administrar Franquicias', 'url'=>array('admin')),
);
?>

<h1>Franquicias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
