<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Movies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Movie', 'url'=>array('index')),
	array('label'=>'Create Movie', 'url'=>array('create')),
	array('label'=>'Update Movie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Movie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Movie', 'url'=>array('admin')),
);
?>

<h1>View Movie #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'name_english',
		'description',
		'release_date',
		'length',
		'genre.name',
		'is_premiere',
		'image',
		'image_thumbnail',
		'image_thumbnail2x',
		'trailer_link',
		'raiting',
		'restriction',
		'create_time',
		'create_user',
		'update_time',
		'update_user',
	),
)); ?>
