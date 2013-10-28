<?php
/* @var $this FranchiseController */
/* @var $model Franchise */

$this->breadcrumbs=array(
	'Franchises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Franchise', 'url'=>array('index')),
	array('label'=>'Create Franchise', 'url'=>array('create')),
	array('label'=>'Update Franchise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Franchise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Franchise', 'url'=>array('admin')),
);
?>

<h1>Ver Franquicia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>


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
                                'url'=>'Yii::app()->request->baseUrl.\'/index.php?r=/issueResponse/view&id=\'.$data->id',
                            ),
                        ),
                    ),
	),
)); ?>