<?php
/* @var $this TheaterController */
/* @var $model Theater */

$this->breadcrumbs=array(
	'Theaters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Theater', 'url'=>array('index')),
	array('label'=>'Create Theater', 'url'=>array('create')),
	array('label'=>'Update Theater', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Theater', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Theater', 'url'=>array('admin')),
);
?>

<h1>View Theater #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'franchise_id',
		'name',
		'address',
		'latitude',
		'longitude',
		'price',
		'price_3d',
		'is_tuesday_half_price',
		'country_id',
		'city_id',
		'create_time',
		'create_user',
		'update_time',
		'update_user',
	),
)); ?>
