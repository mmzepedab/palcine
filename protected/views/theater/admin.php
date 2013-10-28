<?php
/* @var $this TheaterController */
/* @var $model Theater */

$this->breadcrumbs=array(
	'Theaters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Theater', 'url'=>array('index')),
	array('label'=>'Create Theater', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#theater-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Theaters</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'theater-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'franchise_id',
		'name',
		'address',
		'latitude',
		'longitude',
		/*
		'price',
		'price_3d',
		'is_tuesday_half_price',
		'country_id',
		'city_id',
		'create_time',
		'create_user',
		'update_time',
		'update_user',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
