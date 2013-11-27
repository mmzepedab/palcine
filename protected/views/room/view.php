<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
        'Franquicias'=>array('franchise/index'),
        $model->theater->franchise->name=>array('franchise/view','id'=>$model->theater->franchise_id),
	$model->theater->name=>array('theater/view','id'=>$model->theater_id),
	$model->name,
);

$this->menu=array(
	/*array('label'=>'Listar Room', 'url'=>array('index')),*/
	/*array('label'=>'Create Room', 'url'=>array('create')),*/
        array('label'=>'Crear Tanda', 'url'=>array('roomTime/create', 'r_id'=>$model->id)),
	array('label'=>'Actualizar Sala', 'url'=>array('update', 'id'=>$model->id,'t_id'=>$model->theater_id)),
	array('label'=>'Eliminar Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Eliminar Tandas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('deleteRoomTimes','id'=>$model->id),'confirm'=>'Esta seguro que desea eliminar todas las tandas de esta sala?')),	
        array('label'=>'Administrar Salas', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->theater->name; ?> - <?php echo $model->name; ?> </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'id',*/
                array(
                   'label'=>'Cine',
                   'value'=>$model->theater->name,
                 ),
		/*'theater.name',*/
		'name',
		'is_3d',
	),
)); ?>

</br>
</br>
    <h2>Tandas</h2>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'theaters-grid',
	'dataProvider'=> RoomTime::model()->view_room_times($model->id),
        'ajaxUpdate'=>false, 
//	'filter'=>Respuestas::model(),
	'columns'=>array(
		'time',
		'movie.name',
                array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}{edit}{delete}',
                        'buttons'=>array
                        (
                            'view' => array
                            (
                                'label'=>'Ver Tanda',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                //'url'=>'Yii::app()->request->baseUrl.\'/index.php/roomTime/view/\'.$data->id',
                                'url'=>'Yii::app()->createAbsoluteUrl("roomTime/view", array("id"=>$data->id))',
                            ),
                            'edit' => array
                            (
                                'label'=>'Editar Tanda',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                //'url'=>'Yii::app()->request->baseUrl.\'/index.php/roomTime/view/\'.$data->id',
                                'url'=>'Yii::app()->createAbsoluteUrl("roomTime/update", array("id"=>$data->id,"r_id"=>'.$model->id.'))',
                            ),
                            'delete' => array
                            (
                                'label'=>'Eliminar tanda',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                //'url'=>'Yii::app()->request->baseUrl.\'/index.php/roomTime/view/\'.$data->id',
                                'url'=>'Yii::app()->createAbsoluteUrl("roomTime/delete", array("id"=>$data->id,"r_id"=>'.$model->id.'))',
                            ),
                        ),
		),
		/*
		'adjuntos',
		*/
                /*
		array
                    (
                        'class'=>'CButtonColumn',
                        'template'=>'{view}',
                        'buttons'=>array
                        (
                            'view' => array
                            (
                                'label'=>'Ver Tanda',  
                                'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
                                //'url'=>'Yii::app()->createUrl("respuestas/view", array("id"=>$data->id))',
                                //'url'=>'Yii::app()->request->baseUrl.\'/index.php/roomTime/view/\'.$data->id',
                                'url'=>'Yii::app()->createAbsoluteUrl("roomTime/view", array("id"=>$data->id))',
                            ),
                        ),
                    ),*/
	),
)); ?>