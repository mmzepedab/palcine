<?php
/* @var $this FranchiseController */
/* @var $model Franchise */

$this->breadcrumbs=array(
	'Franchises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Franchise', 'url'=>array('index')),
	array('label'=>'Manage Franchise', 'url'=>array('admin')),
);
?>

<h1>Create Franchise</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>