<?php
/* @var $this MovieController */
/* @var $model Movie */



$this->breadcrumbs=array(
	'Peliculas'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Peliculas', 'url'=>array('index')),
	array('label'=>'Crear Pelicula', 'url'=>array('create')),
	array('label'=>'Actualizar Pelicula', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Pelicula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Peliculas', 'url'=>array('admin')),
);
?>

<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  //$cs->registerScriptFile($baseUrl.'/js/yourscript.js');
  $cs->registerCssFile($baseUrl.'/css/movie/styles.css');
?>

<div id="title_background">
    <?php echo $model->name; ?>
</div>

<div class="line-separator"></div>

<p></p>

<table border="1">
    <tbody>
        <tr>
            <td width="60%">
                <div id="movie_detail_container">
                    <table border="0" cellspacing="0" cellpadding="0" >            
                        <tbody>
                            <tr>
                                <td width="200px">
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/movies/the_dark_knight.jpg" alt="the_dark_knight"/>
                                </td>
                                <td>
                                    <p>
                                        When Batman, Gordon and Harvey Dent launch an assault on the mob, they let the clown out of the box, the Joker, bent on turning Gotham on itself and bringing any heroes down to his level.	
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="stars">
                                        <img class="my-item-block"src="<?php echo Yii::app()->baseUrl; ?>/images/stars4.png" width="170" height="30"/>
                                    </div>
                                </td>
                                <td>
                                    <a id="timeOpener" href="javascript:;" class="blue smallButton">Ver Trailer</a>
                                    <a id="timeOpener" href="javascript:;" class="blue smallButton">Comprar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </td>
            <td width="40%">
                <div id="time_detail_container" >
                    <table border="0" cellspacing="0" cellpadding="0" >            
                        <tbody>
                            <tr>
                                <td width="200px">
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/movies/the_dark_knight.jpg" alt="the_dark_knight"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div id="stars">
                                        <img class="my-item-block"src="<?php echo Yii::app()->baseUrl; ?>/images/stars4.png" width="170" height="30"/>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                </div>
                
                
                
            </td>
        </tr>
    </tbody>
</table>


<div id="movie_container">
    
    
    
    
</div>

<?php /*$this->widget('zii.widgets.CDetailView', array(
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
)); */?>
