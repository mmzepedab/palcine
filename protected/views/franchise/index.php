<?php
/* @var $this FranchiseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Franchises',
);

$this->menu=array(
	array('label'=>'Create Franchise', 'url'=>array('create')),
	array('label'=>'Manage Franchise', 'url'=>array('admin')),
);
?>

<h1>Franchises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
