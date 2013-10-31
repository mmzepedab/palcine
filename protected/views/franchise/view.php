<?php
/* @var $this FranchiseController */
/* @var $model Franchise */

$this->breadcrumbs=array(
	'Franquicias'=>array('index'),
	$model->name,
);

$this->menu=array(
        array('label'=>'Crear Cine', 'url'=>array('theater/create','f_id'=>$model->id)),
	array('label'=>'Listar Franquicias', 'url'=>array('index')),
	array('label'=>'Crear Franquicia', 'url'=>array('create')),
	array('label'=>'Actualizar Franquicia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Franquicia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Franquicia', 'url'=>array('admin')),
);


?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'id',*/
		'name',
		'description',
	),
)); ?>

<h2>Salas</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'theaters-grid',
	'dataProvider'=> Theater::model()->view_franchise_theaters($model->id) ,
//	'filter'=>Respuestas::model(),
	'columns'=>array(
		'id',
		'name',
		/*
		'adjuntos',
		*/
		array
                    (
                        'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'buttons'=>array
                        (
                            'view' => array
                            (
                                'label'=>'Ver Cine',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                'url'=>'Yii::app()->request->baseUrl.\'/index.php/theater/view/\'.$data->id',
                            ),
                        ),
                    ),
	),
)); ?>