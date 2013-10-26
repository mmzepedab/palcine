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
    <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue button">Por Hora</a>
    <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue button">Por Cine</a>
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
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <h4>El planta de los simios la rendicion del simio </h4>
                                            
                                            <img id="myImage" src="images/170x230/2.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars4.png" width="170" height="30"/>
                                            </div>
					       
                                            </a>
                                    <div align="center">
                                        <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue smallButton">Horarios</a>
                                    </div>
                                    </br>
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="false"></div>
                                    
                                </li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
                                            <h4>El planta de los simios la rendicion del simio </h4>
					    <img id="myImage" src="images/170x230/3.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars3.png" width="170" height="30"/>
                                            </div>
					    
					</a>
                                    <div align="center">
                                        <a href="<?php echo Yii::app()->createAbsoluteUrl('Issue/myAdmin'); ?>" class="blue smallButton">Horarios</a>
                                    </div>
                                    </br>
                                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="button_count" data-action="like" data-show-faces="true" data-send="false"></div>
                                    
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
                                            <h4>Lorem Ipsum</h4>  
					    <img src="images/170x230/4.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars1.png" width="170" height="30"/>
                                            </div>
					      
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/5.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars3.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/6.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars5.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>				
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/3.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars1.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/4.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars2.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/5.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars4.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/6.jpg" width="170" height="230" />
                                            <div id="stars">
                                                <img class="my-item-block"src="images/stars1.png" width="170" height="30"/>
                                            </div>
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>				
								
			</ul> 
		</div>



</br>
</br>
</br>
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


<script>
jQuery(function($) {
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