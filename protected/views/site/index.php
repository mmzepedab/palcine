<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

Yii::app()->clientScript->registerMetaTag(Yii::app()->getBaseUrl(true).'/images/logo.png', '', null, array('id'=>'meta_og_image', 'property' => 'og:image'), 'meta_og_image');
Yii::app()->clientScript->registerMetaTag($this->pageTitle=Yii::app()->name, '', null, array('id'=>'meta_og_title', 'property' => 'og:title'), 'meta_og_title');
Yii::app()->clientScript->registerMetaTag('website', '', null, array('id'=>'meta_og_type', 'property' => 'og:type'), 'meta_og_type');
Yii::app()->clientScript->registerMetaTag(Yii::app()->getBaseUrl(true), '', null, array('id'=>'meta_og_url', 'property' => 'og:url'), 'meta_og_url');
Yii::app()->clientScript->registerMetaTag('226266080832489', '', null, array('id'=>'meta_fb_app_id', 'property' => 'fb:app_id'), 'meta_fb_app_id');


?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=226266080832489";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id='contact_us' style=" width: 422px; display: block; height: 89px; float: left; margin-left: 60px; background-image: url(images/iPhoneBanner.png)">
    
</div>
<div style="float: left; margin-top: 25px; margin-left: 30px;">
    <a id="shareOpener" href="<?php echo Yii::app()->createAbsoluteUrl('site/sorteo'); ?>" class="yellow button">Participar</a><p></p>    
                                
    
</div>
<div id="facebook_like" style=" width: 100%; display: block; height: 50px;">           
    <div style="float: right; color: grey;" class="fb-like" data-href="http://palcine.me" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="false" data-colorscheme="light"></div> 
            
</div>
</br>
</br>
</br>
</br>

<div class="line-separator"></div>
</br>
</br>
<table border="0" width="100%" style="margin: 0; border: 0;">
    
    <tbody>
        <tr>
            <td width="70%">
<div id="title_background">
    Voy palCine
    
</div>
<div class="line-separator"></div>
</br>
<div align="center" style="font-weight: bold; ">
    Donde estas?
</div>

<div class="styled-select">
<span id="location" align="center">
                <select id="city_location">                    
                    <option value="sps">San Pedro Sula</option>
                    <option value="pro">El Progreso</option>
                    <option value="tgu">Tegucigalpa</option>
                </select>
            </span>
    
    
</div>
<div align='center' style="font-size: smaller; ">Recordar mi selección<input type="checkbox" checked='checked' id='remember_location'></input></div>
</br>
</br>
<div align="center" style="font-weight: bold; margin-bottom: 3px;">
    Como queres buscar tu pelicula?
</div>

<div align="center">
    <a href="#" class="blue button" onclick="palCineAction();">Por Hora</a>
    <a href="#" class="blue button" onclick="palCineActionTheater();">Por Cine</a>
</div>

<div id="palcine_time">
    </br>
    <div id="title_background">
    Busca tu pelicula por hora
    </div>
    <div class="line-separator"></div>
    </br>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'issue-form',
            'enableAjaxValidation'=>false,
    )); ?>  
    <table border="1"  width="50">
        <thead>
            <tr>
                <th>Que queres ver?</th>
                <th>A que hora?</th>
                <th>Donde la queres ver?</th>
                <th>palCine</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td valign="top">
                    <?php /*$list=CHtml::listData(Movie::model()->findAll(), 'id', 'name'); */ ?>
                    <?php /*echo $form->DropdownList(Movie::model(),
                            'id', 
                            $list,
                            array('id'=>'movieList','empty'=>'Seleccionar...')                            
                            ); */ ?>                    
                    <select name="movieList" id="movieList">
                    </select>
                    </br>
                    </br>
                    <div id="movieTitle"></div>
                    <div id="movie_loading_image" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                    </div>
                </td>
                <td>
                    <?php /* $list=CHtml::listData(RoomTime::model()->findAll(), 'id', 'time'); */?>
                    <?php /*echo $form->DropdownList(RoomTime::model(),
                            'id', 
                            $list,
                            array('id'=>'timeList','empty'=>'Seleccionar...')
                            ); */?> 
                    <select name="timeList" id="timeList">
                    </select>
                    </br>
                    </br>
                    <div id="timeTitle"></div>
                    <div id="time_loading_image" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                    </div>
                </td>
                <td>
                    <?php /*$list=CHtml::listData(Room::model()->findAll(), 'id', 'concatenedRoom'); */?>
                    <?php /*echo $form->DropdownList(Room::model(),
                            'id', 
                            $list,
                            array('id'=>'roomList','empty'=>'Seleccionar...')
                            ); */?> 
                    <select name="roomList" id="roomList">
                    </select>
                    </br>
                    </br>
                    <div id="roomTitle"></div>
                    <div id="room_loading_image" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                </td>
                <td>                                           
                    <div align="center">
                        <a id="opener" href="javascript:;" class="yellow smallButton">Ver detalle</a>
                    </div>                    
                </td>
            </tr>
        </tbody>
    </table>
<?php $this->endWidget(); ?>
</div>
                    
                    <div id="palcine_theater">
    </br>
    <div id="title_background">
    Busca tu pelicula por cine
    </div>
    <div class="line-separator"></div>
    </br>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'issue-form',
            'enableAjaxValidation'=>false,
    )); ?>  
    <table border="1"  width="50">
        <thead>
            <tr>
                <th>Que queres ver?</th>
                <th>En que cine?</th>
                <th>A que hora?</th>
                <th>palCine</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td valign="top">
                    <?php /*$list=CHtml::listData(Movie::model()->findAll(), 'id', 'name'); */ ?>
                    <?php /*echo $form->DropdownList(Movie::model(),
                            'id', 
                            $list,
                            array('id'=>'movieList','empty'=>'Seleccionar...')                            
                            ); */ ?>                    
                    <select name="movieListTheater" id="movieListTheater">
                    </select>
                    </br>
                    </br>
                    <div id="movieTitleTheater"></div>
                    <div id="movie_loading_image_theater" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                    </div>
                </td>
                <td>
                    <?php /*$list=CHtml::listData(Room::model()->findAll(), 'id', 'concatenedRoom'); */?>
                    <?php /*echo $form->DropdownList(Room::model(),
                            'id', 
                            $list,
                            array('id'=>'roomList','empty'=>'Seleccionar...')
                            ); */?> 
                    <select name="theaterList" id="theaterList">
                    </select>
                    </br>
                    </br>
                    <div id="theaterTitle"></div>
                    <div id="theater_loading_image" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                </td>
                <td>
                    <?php /* $list=CHtml::listData(RoomTime::model()->findAll(), 'id', 'time'); */?>
                    <?php /*echo $form->DropdownList(RoomTime::model(),
                            'id', 
                            $list,
                            array('id'=>'timeList','empty'=>'Seleccionar...')
                            ); */?> 
                    <select name="timeListTheater" id="timeListTheater">
                    </select>
                    </br>
                    </br>
                    <div id="timeTitleTheater"></div>
                    <div id="time_loading_image_theater" align="center"><img src="images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                    </div>
                </td>
                
                <td>                                           
                    <div align="center">
                        <a id="openerTheater" href="javascript:;" class="yellow smallButton">Ver detalle</a>
                    </div>                    
                </td>
            </tr>
        </tbody>
    </table>
<?php $this->endWidget(); ?>
</div>         
                    
                    </td>
            <td>
               <div id="publicidad" >
            
            </div> 
                <div id="title_background_dark" >
            
            Publicidad
             </div>
        <div class="line-separator"></div>
            <br/>
            <ul class="publicidad" >
             
              <li>
                  <a href="https://itunes.apple.com/us/app/palcine/id791104005?ls=1&mt=8"><img src="<?php echo Yii::app()->baseUrl; ?>/images/smallBanner1.jpg" /></a>
                </li>
            </ul>
            
            
            </td>
        </tr>
    </tbody>
</table>
                    
                    
                    
           




<div id="title_background">
    Cartelera para hoy: <span style='font-style: italic ; color: #777;'> 
        <?php
setlocale(LC_ALL,"es_ES");
echo strftime("%A %d de %B del %Y");
 
//Salida: viernes 24 de febrero del 2012
?></span>
</div>

<div class="line-separator"></div>

</br>




<div id="carousel-image-and-text" class="touchcarousel grey-blue">       
			<ul class="touchcarousel-container">
                            <?php 
                            if(isset($_GET['loc'])){
                                $criteria = new CDbCriteria();
                                $criteria->condition = "(city_id = :location ) ";
                                $criteria->params = array(':location'=>$_GET['loc']);
                                $theaters = Theater::model()->findAll($criteria); 
                                $theater_ids = array();    
                                foreach ($theaters as $theater) {
                                        $theater_ids[] = $theater['id'];

                                }

                                $criteria = new CDbCriteria();
                                $criteria->addInCondition("theater_id", $theater_ids);
                                $rooms = Room::model()->findAll($criteria); 
                                $room_ids = array();    
                                foreach ($rooms as $room) {
                                        $room_ids[] = $room['id'];

                                }

                                //print_r($theater_ids);

                                $criteria = new CDbCriteria();
                                $criteria->distinct = true;  
                                $criteria->select = ('movie_id, room_id');
                                $criteria->addInCondition("room_id", $room_ids);
                                //$criteria->addInCondition("movie_id", array($_GET["m_id"]));
                                $models = RoomTime::model()->findAll($criteria);

                                $movie_ids = array();    
                                    foreach ($models as $model) {
                                            $movie_ids[] = $model['movie_id'];

                                    }
                                $criteria = new CDbCriteria();
                                $criteria->addInCondition("id", $movie_ids);
                                //$criteria->order= 'id DESC';
                                $criteria->order = ("create_time DESC");
                                $criteria->addInCondition("is_in_theaters", array(1));
                                //$models = Movie::model()->findAll(array('order'=>'name ASC'));
                                $models = Movie::model()->findAll($criteria);
                            }else{
                                $criteria = new CDbCriteria();
                                //$criteria->order = ("id DESC");
                                $criteria->order = ("create_time DESC");
                                $criteria->addInCondition("is_in_theaters", array(1));
                                $models = Movie::model()->findAll($criteria);
                            }

                            $rows = array();
                            foreach($models as $model)
                                   $rows[] = $model->attributes;

                            foreach($rows as $row){
                            
                            $movieName = $row['name'];
                            /*if(strlen($movieName)>18){
                                $movieName = substr($movieName, 0, 21);
                                $movieName.=  "...";
                            }*/
                            $loc = '';
                            if(isset($_GET['loc'])){
                                $loc = $_GET['loc'];
                                //unset(Yii::app()->request->cookies['loc']);
                                //Yii::app()->request->cookies['loc'] = new CHttpCookie('loc', 'tgu');
                            }
                            print_r('<li class="touchcarousel-item">
					<a class="item-block" title="'.$row['name'].'" href="'.Yii::app()->createAbsoluteUrl('movie/viewTimes',array('id'=>$row['id'],'loc'=>$loc,'m_id'=>$row['id'])) .'">
                                            
					    <div style="width:160px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap; "><h4>'.$movieName.'</h4></div>
                                            
                                            <div class="fb-like" data-href="'.$row['name'].'" href="'.Yii::app()->createAbsoluteUrl('movie/view',array('id'=>$row['id'])) .'" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="false"></div>
                                                </br></br>
                                            <img id="myImage" src="images/movies/'.$row['image'].'" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars'.intval($row['raiting']).'.png" width="170" height="30"/>
                                            </div>
					       
                                            </a>
                                    <div align="center">
                                        <a id="timeOpener" href="'.Yii::app()->createAbsoluteUrl('movie/viewTimes',array('m_id'=>$row['id'],'loc'=>$loc)) .'" class="blue smallButton">Horarios</a>
                                    </div>
                                    
                                    
                                </li>'
                                    
                                    );
                            }
                            ?>
                            
				
							
								
			</ul> 
		</div>



</br>
</br>
</br>

<div id="bottom_container">
    <div id="left_bottom_content">
        <div id="title_background">
            Destacado
        </div>
        <div class="line-separator"></div>
        <br/>
        
        
            <ul class="slider8">
                <li>
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/banner1.jpg" />
                </li>
                <li>
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/palCine_App_Banner.jpg" />
                </li>
                <li>
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/banner3.jpg" />
                </li>
            </ul>
        
        
    </div>
    <div id="right_bottom_content">
        <div id="title_background" >
            Proximamente
            
             </div>
        <div class="line-separator"></div>
            <br/>
            <ul class="slider1" >
              <?php $criteria = new CDbCriteria();
                    $criteria->condition = "(is_coming_soon = :is_coming_soon ) ";
                    $criteria->params = array(':is_coming_soon'=>1);
                    $movies = Movie::model()->findAll($criteria); 
                    //$theater_ids = array();    
                    foreach ($movies as $movie) {
                         print_r('<li><a href="'.$movie['trailer_link'].'"><img width="170px" height="230px" src="images/movies/'.$movie['image'].'"></a></li>');

                    }  
               ?> 
              
            </ul>
            
       
        
        
    </div>
</div>





<div id="dialog" title="Selecciona tu ubicación">
  </br>
<div align="center">
    Donde estas?
</div>

<div class="styled-select">
<span id="location" align="center">
                <select id="city_location">                    
                    <option value="sps">San Pedro Sula</option>
                    <option value="pro">El Progreso</option>
                    <option value="tgu">Tegucigalpa</option>
                </select>
            </span>
    </div>
</br>
</br>

</div>

<ol id="chooseID" style="display: none" data-joyride>
  
    <li data-id="publicidad" data-options="tipLocation:top;tipAnimation:fade" data-button="Entiendo"><p>Si viste este espacio, es porque funciona. Anunciate con nosotros.</p></li>

  
</ol> 



<script>




var myWidth = 170 * $( ".touchcarousel-item" ).size();
    if(myWidth  < 900){
        myWidth = 170 * $( ".touchcarousel-item" ).size();        
    }else{
        myWidth = 855;
    }
     $("#carousel-image-and-text").css({
        "width": myWidth+"px"   
    });

    
    
    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });
        return vars;
    }




 
 
  

//hiding elements
$('#movieList').hide();
$("#movie_loading_image").hide();
$("#time_loading_image").hide();
$("#room_loading_image").hide();
$('#timeList').hide();
$('#roomList').hide();
$('#opener').hide();

//hide palCine by theater
$('#movieListTheater').hide();
$('#theaterList').hide();
$("#theater_loading_image").hide();
$('#timeListTheater').hide();
$("#time_loading_image_theater").hide();
$('#openerTheater').hide();



var loc = getUrlVars()["loc"];
    //$.cookie('loc', null);
    
    if($.cookie('loc') != 'null' && typeof $.cookie('loc') != 'undefined'){
    
    $('#city_location option[value="'+$.cookie('loc')+'"]').prop('selected',true);    
        if(typeof loc == 'undefined'){  
            window.location.replace("./?loc="+$.cookie('loc'));
        }
    }else{
        $.cookie('loc', 'tgu');
        //location.reload();
        window.location.replace("./?loc="+$.cookie('loc'));
        //window.location.replace("./?loc=tgu");
        //$('#city_location option[value="'+loc+'"]').prop('selected',true);
    }
$('#city_location').change(function() {
    //$("#palcine_time").hide();
    //$("#palcine_theater").hide();
    if($('#remember_location').is(":checked")){        
        $.cookie('loc', null);
        //$.cookie('loc', $('#city_location option:selected' ).val());        
        $.cookie('loc', $('#city_location option:selected' ).val(),{path: '/', expires:365});
        window.location.replace("./?loc="+$('#city_location option:selected' ).val());
    }else{        
        window.location.replace("./?loc="+$('#city_location option:selected' ).val());
    }
});

//Select Movie and Change MovieListTimes
$('#movieList').change(function() {
    $("#time_loading_image").show();
    $('#timeList').hide();
    $('#timeList').empty();
    $('#timeTitle').hide();
    $('#timeTitle').empty();
    $('#roomList').hide();
    $('#roomList').empty();
    $('#roomTitle').hide();
    $('#roomTitle').empty();
    $('#opener').hide();
    //alert($(this).text());
     var movieTitleText = '<h1>'+$('#movieList option:selected' ).text()+'</h1>';
     
    $('#movieTitle').html(movieTitleText);
    //alert($('#movieList option:selected' ).val());
    
    $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movieRoomTimes"); ?>',
            dataType: "xml",
            //data: 'm_id='+$('#movieList option:selected' ).val(),
            data: {loc: $('#city_location option:selected' ).val(), m_id: $('#movieList option:selected' ).val()}, 
            success: function(data) {
                //alert(data);
                var select = $('#timeList');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('movieRoomTime').each(function(){            
                    var id = $(this).find('id').text();
                    //var value = tConvert($(this).find('time').text());
                    var value = $(this).find('time').text();
                    select.append("<option value='"+$(this).find('time').text()+"'>"+value+"</option>");
                    $('#timeList').show();
                    $('#timeTitle').show();
                    $("#time_loading_image").hide();
                    //alert($(this).text());
                });
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.responseText);
                //alert(textStatus);
            }

        });
});
$('#timeList').change(function() {
    $("#room_loading_image").show();
    $('#roomList').hide();
    $('#roomList').empty();
    $('#roomTitle').hide();
    $('#roomTitle').empty();
    //alert($(this).text());
     var timeTitleText = '<h1>'+$('#timeList option:selected' ).text()+'</h1>';
    $('#timeTitle').html(timeTitleText);
    
    $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movieRooms"); ?>',
            dataType: "xml",
            //data: 'time='+$('#timeList option:selected' ).val(),
            
            data: {time: $('#timeList option:selected' ).val(), m_id: $('#movieList option:selected' ).val(),loc: $('#city_location option:selected' ).val()},
            success: function(data) {
                //alert(data);
                var select = $('#roomList');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('movieRoom').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    $('#roomList').show();
                    $('#roomTitle').show();
                    $("#room_loading_image").hide();
                    //alert($(this).text());
                });
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
$('#roomList').change(function() {
    //alert($(this).text());
     var roomTitleText = '<h1>'+$('#roomList option:selected' ).text()+'</h1>';
     $('#opener').show();
    $('#roomTitle').html(roomTitleText);
});


$("#palcine_time").hide();
$("#palcine_theater").hide();
function palCineAction(){
        $("#movie_loading_image").show();
    if ($("#palcine_time").is(":visible")){
        $("#palcine_time").hide();
        $('#movieList').empty();
        $('#movieTitle').empty();
        $('#timeList').hide();
        $('#timeTitle').hide();
        $('#roomList').hide();
        $('#roomTitle').hide();
        $('#opener').hide();
    }else{
        $("#palcine_theater").hide();
        $("#palcine_time").show();
        $('#movieList').empty();
        $('#movieTitle').empty();
        $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movies"); ?>',
            dataType: "xml",
            data: 'loc='+$('#city_location option:selected' ).val(),
            success: function(data) {
                //alert(data);
                $("#movieList").show();
                $("#movie_loading_image").hide();
                var select = $('#movieList');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('movie').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    //alert($(this).text());
                });
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.responseText);
                //alert(textStatus);
            }

        });
    }
    
}

function palCineActionTheater(){
        $("#movie_loading_image_theater").show();
    if ($("#palcine_theater").is(":visible")){
        $("#palcine_theater").hide();
        $('#movieListTheater').empty();
        $('#movieTitleTheater').empty();
    }else{
        $("#palcine_time").hide();
        $("#palcine_theater").show();
        $('#movieListTheater').empty();
        $('#movieTitleTheater').empty();
        $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movies"); ?>',
            dataType: "xml",
            data: 'loc='+$('#city_location option:selected' ).val(),
            success: function(data) {
                //alert(data);
                $("#movieListTheater").show();
                $("#movie_loading_image_theater").hide();
                var select = $('#movieListTheater');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('movie').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    //alert($(this).text());
                });
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.responseText);
                //alert(textStatus);
            }

        });
    }
    
}

//Select Movie and Change MovieListTimes
$('#movieListTheater').change(function() {
    $("#theater_loading_image").show();
    $('#theaterList').hide();
    $('#theaterList').empty();
    $('#theaterTitle').hide();
    $('#theaterTitle').empty();
    $('#roomList').hide();
    $('#roomList').empty();
    $('#roomTitle').hide();
    $('#roomTitle').empty();
    $('#opener').hide();
    //alert($(this).text());
     var movieTitleText = '<h1>'+$('#movieListTheater option:selected' ).text()+'</h1>';
     
    $('#movieTitleTheater').html(movieTitleText);
    //alert($('#movieList option:selected' ).val());
    
    $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/theaters"); ?>',
            dataType: "xml",
            //data: 'm_id='+$('#movieList option:selected' ).val(),
            data: {loc: $('#city_location option:selected' ).val(), m_id: $('#movieListTheater option:selected' ).val()}, 
            success: function(data) {
                //alert(data);
                var select = $('#theaterList');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('theater').each(function(){            
                    var id = $(this).find('id').text();
                    var value = $(this).find('name').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    $('#theaterList').show();
                    $('#theaterTitle').show();
                    $("#theater_loading_image").hide();
                    //alert($(this).text());
                });
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.responseText);
                //alert(textStatus);
            }

        });
});

$('#theaterList').change(function() {
    $("#time_loading_image_theater").show();
    $('#timeListTheater').hide();
    $('#timeListTheater').empty();
    $('#timeTitleTheater').hide();
    $('#timeTitleTheater').empty();
    //alert($(this).text());
     var timeTitleText = '<h1>'+$('#theaterList option:selected' ).text()+'</h1>';
    $('#theaterTitle').html(timeTitleText);
    
    $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movieRoomTimes"); ?>',
            dataType: "xml",
            //data: 'm_id='+$('#movieList option:selected' ).val(),
            data: {loc: $('#city_location option:selected' ).val(), m_id: $('#movieListTheater option:selected' ).val(), t_id: $('#theaterList option:selected' ).val()}, 
            success: function(data) {
                //alert(data);
                var select = $('#timeListTheater');
                select.append("<option value=''>Seleccionar...</option>");
                $(data).find('movieRoomTime').each(function(){            
                    var id = $(this).find('id').text();
                    //var value = tConvert($(this).find('time').text());
                    var value = $(this).find('time').text();
                    select.append("<option value='"+id+"'>"+value+"</option>");
                    $('#timeListTheater').show();
                    $('#timeTitleTheater').show();
                    $("#time_loading_image_theater").hide();
                    //alert($(this).text());
                });
                //var success = $(data).find('name').text();
                //alert(success);

                        //NEED TO ITERATE data.msg AND FILL A DROP DOWN
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //alert(XMLHttpRequest.responseText);
                //alert(textStatus);
            }

        });
    
});

$('#timeListTheater').change(function() {
    //alert($(this).text());
     var roomTitleText = '<h1>'+$('#timeListTheater option:selected' ).text()+'</h1>';
     $('#openerTheater').show();
    $('#timeTitleTheater').html(roomTitleText);
});

$(function() {
  if($('#remember_location').is(":checked")){
      //alert('si');
  }else{
      //alert('no');
  }
  
  $('#remember_location').change(function() {
        if($(this).is(":checked")) {
            //var returnVal = confirm("Are you sure?");
            //$(this).attr("checked", returnVal);
        }
        //$('#textbox1').val($(this).is(':checked'));        
    });
    
  /*
  $("#chooseID").joyride({
  });
  */
 
    $( "#dialog" ).dialog({
      autoOpen: false,
      width: 500,
      modal: true,
      show: {
      },
      hide: {
      }
    });
    
    
    
 
    $( ".smallButton" ).click(function() {
        //alert(1);
    });
 
    $( "#opener" ).click(function() {
        window.location.replace("<?php echo Yii::app()->createUrl("movie/viewTimes"); ?>/"+$('#movieList option:selected' ).val()+"?loc="+$('#city_location option:selected' ).val()+"&m_id="+$('#movieList option:selected' ).val());
      /*
      $( "#dialog" ).dialog( "open" );
      
      //$('#movieList option:selected' ).val()
      $.ajax({
            type: 'GET',
            //url: 'http://www.oncae.gob.hn/palcine/index.php/api/movies',
            url: '<?php echo Yii::app()->createUrl("api/movies"); ?>/'+$('#movieList option:selected' ).val(),
            dataType: "xml",
            //data: 'time='+$('#timeList option:selected' ).val(),
            
            //data: {time: $('#timeList option:selected' ).text(), m_id: $('#movieList option:selected' ).val()},
            success: function(data) {
                
                
                var dialog_content = '<a class="item-block" href="#"> \
                      <h4>  </h4> \
                            <img id="myImage" src="images/movies/'+ $(data).find('image').text() +'" width="170" height="230" />\
                            <div id="stars"> \
                                <img class="my-item-block"src="images/stars'+parseInt($(data).find('raiting').text())+'.png" width="170" height="30"/> \
                            </div> \
                            </a> \
                    <div align="center"> \
                        <a href="<?php echo Yii::app()->createUrl("movie/view"); ?>/'+$('#movieList option:selected' ).val()+'" class="blue smallButton">Horarios</a> \
                    </div> \
                    </br> \
                    <div class="fb-like" data-href="<?php echo Yii::app()->createUrl("movie/view"); ?>/'+$('#movieList option:selected' ).val()+'" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="true"></div>';
                       
                $('#dialog').dialog('option', 'title', $(data).find('name').text());            
                $("#dialog").html(dialog_content);             
                
                
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert(XMLHttpRequest.responseText);
                alert(textStatus);
            }

        });
      
      */
                       
      
    });
    
    $( "#openerTheater" ).click(function() {
        window.location.replace("<?php echo Yii::app()->createUrl("movie/viewTimes"); ?>/"+$('#movieListTheater option:selected' ).val()+"?loc="+$('#city_location option:selected' ).val()+"&m_id="+$('#movieListTheater option:selected' ).val());
      
                       
      
    });

});
  
$(function() {

    $("#carousel-image-and-text").touchCarousel({
        /* carousel options go here see Javascript Options section for more info */
        				
				pagingNav: true,
				snapToItems: false,
				itemsPerMove: 1,				
				scrollToLast: true,
                                keyboardNav: true, 
				loopItems: true,
				scrollbar: true,
                                autoplay:true,               // Autoplay enabled.
                                autoplayDelay:8000,	          // Delay between transitions.
                                autoplayStopAtAction:true,

    });
    
    $('.publicidad').bxSlider({
    slideWidth: 300,
    minSlides: 1,
    maxSlides: 1,
    controls: false,
    auto: false
  });
    
    $('.slider1').bxSlider({
    slideWidth: 200,
    minSlides: 2,
    maxSlides: 2,
    slideMargin: 10,
    auto: true
  });
  
$('.slider8').bxSlider({
    slideWidth: 500,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 10,
    auto: true,
    speed: 2000
  });
  
  
   
});


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


</script>