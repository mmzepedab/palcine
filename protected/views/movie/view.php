<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->setPageTitle('palCine - '.$model->name);

$this->breadcrumbs=array(
	/*'Peliculas'=>array('index'),*/
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



<div id="fb-root"></div>

<table border="1" style="border-width: 0;">
    <tbody>
        <tr>
            <td colspan="2">
                <div id="title_background">
                    <?php echo $model->name; ?>
                </div>
            </td>
        </tr>
        <tr>
            <td width="60%">
                <div id="movie_detail_container">
                    <table border="0" cellspacing="0" cellpadding="0" >            
                        <tbody>
                            <tr>
                                <td rowspan="3" width="170" style="text-align:center;">
                                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/movies/<?php echo $model->image; ?>" height="230" width="170"/>
                                    <div id="stars">
                                        <img class="my-item-block"src="<?php echo Yii::app()->baseUrl; ?>/images/stars<?php echo intval($model->raiting); ?>.png" width="170" height="30" align="center"/>
                                        <div align="center" class="fb-like" data-href="<?php echo Yii::app()->createAbsoluteUrl('movie/view',array('id'=>$model->id)); ?>" data-width="100" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                    </div> 
                                </td>
                                <td width="200px">
                                    <b>Nombre en Ingles:</b>
                                    <p>
                                        <?php echo $model->name_english; ?>
                                    </p>
                                    <b>Fecha de lanzamiento:</b>
                                    <p>
                                        <?php echo $model->release_date; ?>
                                    </p>
                                    
                                </td>
                                <td>
                                    <b>Duracion:</b>
                                    <p>
                                        <?php echo $model->length; ?>
                                    </p>
                                    <b>Genero:</b>
                                    <p>
                                        <?php echo $model->genre->name; ?>
                                    </p>
                                    
                                </td>
                                
                            </tr>
                            <tr >
                                <td>
                                    <b>Restricciones:</b>
                                    <p>
                                        <?php echo $model->restriction; ?> 
                                    </p>
                                    
                                </td>
                                <td>
                                    
                                    
                                </td>
                                
                                <td>
                                    
                                </td>
                                
                                
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <b>Sinopsis:</b>
                                    <p style="text-align: justify;">
                                        <?php echo $model->description; ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   
                                </td>
                                <td colspan="2">
                                    <a id="trailer_opener" href="javascript:;" class="blue smallButton">Ver Trailer</a>
                                    <?php 
                                    /*echo '<a id="timeOpener" href="'.Yii::app()->createAbsoluteUrl('movie/viewTimes',array('m_id'=>$model->id,'loc'=>$_GET['loc'])) .'" class="blue smallButton">Horarios</a>';*/
                                    
                                    ?>
                                    <!-- <a id="timeOpener" href="javascript:;" class="blue smallButton">Recomendar</a> -->
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                   <div class="fb-comments" data-href="<?php echo Yii::app()->createAbsoluteUrl('movie/view',array('id'=>$model->id)); ?>" data-numposts="5" data-width="550"></div>
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
                                <td >
                                    <div id="title_background">
                                        Horarios
                                    </div>

                                    <div class="line-separator"></div>

                                    <p>
                                        
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="styled-select-theater">
                                        <span id="location" align="center">
                                                        <select id="city_location">
                                                            <option value="">Seleccionar cine...</option>
                                                            <option value="sps">San Pedro Sula</option>
                                                            <option value="pro">El Progreso</option>
                                                            <option value="tgu">Tegucigalpa</option>
                                                        </select>
                                                    </span>
                                    </div>
                                    <p></p>
                                    
                                    <div id="thumbnail-container" align="center">
                                        <img src="<?php echo Yii::app()->baseUrl; ?>/images/movies/thumbnails/2x/<?php echo $model->image_thumbnail2x; ?>" width="200" height="200"  alt="ajax-loader"/>
                                    </div>
                                    <div id="loading-container" align="center">
                                        <!-- <img src="<?php echo Yii::app()->baseUrl; ?>/images/ajax-loader.gif" width="16" height="16"  alt="ajax-loader"/> -->
                                    </div>
                                    <div id="select-theater-container" align="center">
                                        <div class="styled-select-theater" id="theaters_select_div">
                                        <span id="location" align="center">
                                                        <select id="theaters_select">
                                                        </select>
                                                    </span>
                                        </div>
                                    </div>
                                    
                                    <p></p>
                                    <div align="center">
                                        <a id="opener" href="https://ventas.cinemarkca.com/visInternetTicketing/visSelect.aspx?visSearchBy=cin&visCinID=774&visMovieName=" class="yellow button">Comprar Boletos</a>
                                    </div>
                                    <p>
                                        
                                    </p>
                                    <div id="movieUnavailable" style="color: tomato; font-size: 14; text-align: center;">Esta pelicula no esta disponible en ninguna sala en tu ciudad.</div>
                                    <div id="movieTheaterRoomTimes">
                                         
                                        
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

<div id="trailer_dialog" title="Trailer">
    <iframe width="560" height="315" src="<?php echo $model->trailer_link; ?>" frameborder="0" allowfullscreen></iframe>
  </div>






<script>
$('#opener').popupWindow({ 
height:500, 
width:800, 
top:200, 
left:300 
});    
    
    
    
    var roomTimesArray = new Array();
    //var roomTimesArray = "";
    <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "(movie_id = :m_id ) ";
        $criteria->params = array(':m_id'=>$model->id);
        $roomTimes = RoomTime::model()->findAll($criteria);
        //$roomTimesArray = array();
        foreach ($roomTimes as $roomTime) {            
            echo "roomTimesArray[".$roomTime['room_id']."] = '';";
                      
        }
        foreach ($roomTimes as $roomTime) {            
            echo "roomTimesArray[".$roomTime['room_id']."] += tConvert('".$roomTime['time']."') + ' - ';";
                        
        }
        
        
    ?>


//alert(roomTimesArray[2]);    


function tConvert (time) {
  // Check correct time format and split into components
  time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

  if (time.length > 1) { // If time format correct
    time = time.slice (1);  // Remove full string match value
    time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
    time[0] = +time[0] % 12 || 12; // Adjust hours
  }
  return time.join (''); // return adjusted time or original string
}




(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=226266080832489";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));    
    
$("#thumbnail-container").hide();    
$("#loading-container").hide();
$("#select-theater-container").hide();
$("#movieUnavailable").hide();

$('#city_location').change(function() {
    $("#loading-container").show();
    $('#theaters_select').empty();
    $("#select-theater-container").hide();
    $("#movieTheaterRoomTimes").empty();
    $("#movieUnavailable").hide();
    $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/theaters"); ?>',
            dataType: "xml",
            //data: 'time='+$('#timeList option:selected' ).val(),
            data: {loc: $('#city_location option:selected' ).val(), m_id: <?php echo $model->id; ?>},
            //data: {loc: $('#city_location option:selected' ).val()},
            success: function(data) {
                //alert(data);
                
                if($(data).find('theater').text() !== "" ) {
                    
                
                var select = $('#theaters_select');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('theater').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    //$('#roomList').show();
                    $('#select-theater-container').show();
                    $("#loading-container").hide();
                    //alert($(this).text());
                });
                
                $("#movieTheaterRoomTimes").html();
                
                }else{
                    $("#movieUnavailable").show();
                    $("#loading-container").hide();
                }
                //alert(select);
                //$("#select-theater-container").html('<p>Bien</p>');
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(XMLHttpRequest.responseText);
                alert(textStatus);
            }

        });
});



$('#theaters_select').change(function() {
    $('#movieTheaterRoomTimes').empty();
    $.ajax({
            type: 'GET',
            url: '<?php echo Yii::app()->createUrl("api/rooms"); ?>',
            dataType: "xml",            
            data: {t_id: $('#theaters_select option:selected' ).val(), m_id: <?php echo $model->id; ?>},
            success: function(data) {
                var select = $('#theaters_select');
                //select.append("<option value=''>Seleccionar...</option>");
                var rooms_content = "";
                $(data).find('room').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    roomTimes = roomTimesArray[id].substring(0, roomTimesArray[id].length - 2);
                    rooms_content += "<p><b>"+value+"</b><br/>"+roomTimes+"</p>";
                    
                });
                
                $("#movieTheaterRoomTimes").html(rooms_content);
                

                        
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(XMLHttpRequest.responseText);
                alert(textStatus);
            }

        });
});




$(function() {
    $( "#trailer_dialog" ).dialog({
      autoOpen: false,
      width: 600,
      modal: true,
      show: {
      },
      hide: {
      }
    });
$( "#trailer_opener" ).click(function() {
      $( "#trailer_dialog" ).dialog( "open" );
      //alert(1);

});


});
</script>

