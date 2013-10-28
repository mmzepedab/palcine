<?php
/* @var $this FranchiseController */
/* @var $model Franchise */

$this->breadcrumbs=array(
	'Franchises'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Franchise', 'url'=>array('index')),
	array('label'=>'Create Franchise', 'url'=>array('create')),
	array('label'=>'View Franchise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Franchise', 'url'=>array('admin')),
);
?>

<h1>Update Franchise <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>