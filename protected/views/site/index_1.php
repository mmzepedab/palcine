<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=164203760401068";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div id="title_background">
    Voy palCine
</div>
<div class="line-separator"></div>
</br>
<div align="center">
    Como queres buscar tu pelicula?
</div>
</br>
<div align="center">
    <a href="#" class="blue button" onclick="palCineAction();">Por Hora</a>
    <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue button">Por Cine</a>
</div>

<div id="palcine_time">
    </br>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'issue-form',
            'enableAjaxValidation'=>false,
    )); ?>  
    <table border="1"  width="100">
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
                    <?php $list=CHtml::listData(Movie::model()->findAll(), 'id', 'name'); ?>
                    <?php echo $form->DropdownList(Movie::model(),
                            'id', 
                            $list,
                            array('id'=>'movieList','empty'=>'Seleccionar...')                            
                            ); ?>                    
                    
                    </br>
                    </br>
                    <div id="movieTitle"></div>
                </td>
                <td>
                    <?php $list=CHtml::listData(RoomTime::model()->findAll(), 'id', 'time'); ?>
                    <?php echo $form->DropdownList(RoomTime::model(),
                            'id', 
                            $list,
                            array('id'=>'timeList','empty'=>'Seleccionar...')
                            ); ?> 
                    </br>
                    </br>
                    <div id="timeTitle"></div>
                </td>
                <td>
                    <?php $list=CHtml::listData(Room::model()->findAll(), 'id', 'concatenedRoom'); ?>
                    <?php echo $form->DropdownList(Room::model(),
                            'id', 
                            $list,
                            array('id'=>'roomList','empty'=>'Seleccionar...')
                            ); ?> 
                    
                    </br>
                    </br>
                    <div id="roomTitle"></div>
                    
                </td>
                <td>
                                           
                                    <div align="center">
                                        <a id="opener" href="#" class="yellow smallButton">Ver detalle</a>
                                    </div>
                    
                </td>
            </tr>
        </tbody>
    </table>
<?php $this->endWidget(); ?>
</div>

</br>
</br>




<div id="title_background">
    En cartelera
</div>

<div class="line-separator"></div>

</br>




<div id="carousel-image-and-text" class="touchcarousel grey-blue">       
			<ul class="touchcarousel-container">
                            <?php 
                            $models = Movie::model()->findAll();

                            $rows = array();
                            foreach($models as $model)
                                   $rows[] = $model->attributes;

                            foreach($rows as $row){
                            
                            $movieName = $row['name'];
                            if(strlen($movieName)>25){
                                $movieName = substr($movieName, 0, 23);
                                $movieName.=  "...";
                            }
                            print_r('<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <h4>'.$movieName.'</h4>
                                            
                                            <img id="myImage" src="images/170x230/'.$row['image'].'" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars'.intval($row['raiting']).'.png" width="170" height="30"/>
                                            </div>
					       
                                            </a>
                                    <div align="center">
                                        <a href="<?php echo Yii::app()->createAbsoluteUrl(\'Issue/myAdmin\'); ?>" class="blue smallButton">Horarios</a>
                                    </div>
                                    </br>
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="true"></div>
				
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
            Comentarios
        </div>
        <div class="line-separator"></div>
    </div>
    <div id="right_bottom_content">
        <div id="title_background">
            Proximamente
        </div>
        <div class="line-separator"></div>
        
    </div>
</div>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

<div id="dialog" title="El planeta de los simios">
  <a class="item-block" href="#">
					    <h4>  </h4>
                                            
                                            <img id="myImage" src="images/170x230/2.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars4.png" width="170" height="30"/>
                                            </div>
					       
                                            </a>
                                    <div align="center">
                                        <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue smallButton">Horarios</a>
                                    </div>
                                    </br>
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="true"></div>
				</div>
 

<script>

$('#movieList').change(function() {
    //alert($(this).text());
     var movieTitleText = '<h1>'+$('#movieList option:selected' ).text()+'</h1>';
    $('#movieTitle').html(movieTitleText);
});
$('#timeList').change(function() {
    //alert($(this).text());
     var timeTitleText = '<h1>'+$('#timeList option:selected' ).text()+'</h1>';
    $('#timeTitle').html(timeTitleText);
});
$('#roomList').change(function() {
    //alert($(this).text());
     var roomTitleText = '<h1>'+$('#roomList option:selected' ).text()+'</h1>';
    $('#roomTitle').html(roomTitleText);
});


$("#palcine_time").hide();
function palCineAction(){
    if ($("#palcine_time").is(":visible")){
        $("#palcine_time").hide();
    }else{
        $("#palcine_time").show();
    }
    
}

$(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      width: 500,
      modal: true,
      show: {
      },
      hide: {
      }
    });
 
    $( "#opener" ).click(function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
  
$(function() {
    $("#carousel-image-and-text").touchCarousel({
        /* carousel options go here see Javascript Options section for more info */
        				
				pagingNav: true,
				snapToItems: false,
				itemsPerMove: 1,				
				scrollToLast: true,
				loopItems: true,
				scrollbar: true,
                                autoplay:true,               // Autoplay enabled.
                                autoplayDelay:2000,	          // Delay between transitions.
                                autoplayStopAtAction:true,

    });
    
   
});
</script>