<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<h1>En cartelera</h1>


<div id="carousel-image-and-text" class="touchcarousel grey-blue">       
			<ul class="touchcarousel-container">
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/2.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Congratulations! You have successfully created your Yii application. </p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/3.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/4.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/5.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/6.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>				
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/3.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/4.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/5.jpg" width="170" height="230" />
					    <h4>Lorem Ipsum</h4>    
						<p>Dolor sit amet</p>
					</a>
				</li>
				<li class="touchcarousel-item">
					<a class="item-block" href="#">
					    <img src="images/170x230/6.jpg" width="170" height="230" />
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
        				
				pagingNav: false,
				snapToItems: false,
				itemsPerMove: 4,				
				scrollToLast: false,
				loopItems: false,
				scrollbar: true
		    

    });
});
</script>