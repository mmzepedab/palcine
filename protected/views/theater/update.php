<?php
/* @var $this TheaterController */
/* @var $model Theater */

$this->breadcrumbs=array(
	'Theaters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Theater', 'url'=>array('index')),
	array('label'=>'Create Theater', 'url'=>array('create')),
	array('label'=>'View Theater', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Theater', 'url'=>array('admin')),
);
?>

<h1>Update Theater <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>