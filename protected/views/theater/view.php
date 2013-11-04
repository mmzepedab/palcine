<?php
/* @var $this TheaterController */
/* @var $model Theater */

$this->breadcrumbs=array(
        'Franquicias'=>array('franchise/index'),
        $model->franchise->name=>array('franchise/view','id'=>$model->franchise_id),
	/*'Cines'=>array('index'),*/
	$model->name,
);

$this->menu=array(
	/*array('label'=>'Listar Cines', 'url'=>array('index')),*/
	/*array('label'=>'Create Cine', 'url'=>array('create')),*/
        array('label'=>'Crear Sala', 'url'=>array('room/create','t_id'=>$model->id)),
	array('label'=>'Actualizar Cine', 'url'=>array('update', 'id'=>$model->id,'f_id'=>$model->franchise_id)),
	array('label'=>'Eliminar Cine', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	/*array('label'=>'Manage Cine', 'url'=>array('admin')),*/
);
?>

<h1><?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(
                   'label'=>'Franquicia',
                   'value'=>$model->franchise->name,
                 ),
		/*'franchise.name',*/
		'name',
	),
)); ?>

</br>
</br>
<h2>Salas</h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'theaters-grid',
	'dataProvider'=> Room::model()->view_theater_rooms($model->id) ,
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
                                'label'=>'Ver Sala',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                //'url'=>'Yii::app()->request->baseUrl.\'/index.php/room/view/\'.$data->id',
                                'url'=>'Yii::app()->createAbsoluteUrl("room/view", array("id"=>$data->id))',
                            ),
                        ),
                    ),
	),
)); ?>