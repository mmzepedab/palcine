<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="no-js" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
 	<meta name="viewport" content="maximum-scale=1,user-scalable=yes,width=1024" >
            
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        
        <!-- Carousel -->
        <!-- CSS files -->
        <link rel="stylesheet" type="text/css" href="touchcarousel/touchcarousel.css" />
        <!-- Skin Stylesheet -->
        <link rel="stylesheet" type="text/css" href="touchcarousel/grey-blue-skin/grey-blue-skin.css" />

        <!-- JS files -->
        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.popupWindow.js"></script>
        <script type="text/javascript" src="touchcarousel/jquery.touchcarousel-1.2.min.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.bxslider.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.cookie.js"></script>
        
        
          <!-- <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->  
          <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-ui.js"></script>
          <link rel="stylesheet" href="/resources/demos/style.css" />
          <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />      
          <!-- <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/js/jquery-ui.css" /> --> 
          <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/js/jquery.bxslider.css" /> 
          
      <!-- GEO taging -->
      <!--<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->
          <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico?v=2" type="image/x-icon" />

            <!-- Joyride -->  
            <link rel=" stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/js/joyride-2.1.css">
            <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.joyride-2.1.js"></script>
        
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32596666-1', 'palcine.me');
  ga('send', 'pageview');

</script>
        
<script>
      // Load the SDK Asynchronously
      (function(d){
         var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         ref.parentNode.insertBefore(js, ref);
       }(document));

      // Init the SDK upon load
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '226266080832489', // App ID
          channelUrl : '//'+window.location.hostname+'/channel', // Path to your Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });

        // listen for and handle auth.statusChange events
        FB.Event.subscribe('auth.statusChange', function(response) {
          if (response.authResponse) {
            // user has auth'd your app and is logged into Facebook
            FB.api('/me', function(me){
              if (me.name) {
                document.getElementById('auth-displayname').innerHTML = me.name;
              }
            })
            document.getElementById('auth-loggedout').style.display = 'none';
            document.getElementById('auth-loggedin').style.display = 'block';
          } else {
            // user has not auth'd your app, or is not logged into Facebook
            document.getElementById('auth-loggedout').style.display = 'block';
            document.getElementById('auth-loggedin').style.display = 'none';
          }
        });

        // respond to clicks on the login and logout links
        document.getElementById('auth-loginlink').addEventListener('click', function(){
          FB.login();
        });
        document.getElementById('auth-logoutlink').addEventListener('click', function(){
          FB.logout();
        }); 
      } 
    </script>            
        
        
        
</head>

<body>
<div id="main_sub">
<div class="container" id="page">

	<div id="header">
            <div id="loginInfo">
                <div id="auth-status">
        <div id="auth-loggedout">
          [ <a href="#" id="auth-loginlink">Inicar Sesión</a> ]
        </div>
        <div id="auth-loggedin" style="display:none">
          Hola, <span id="auth-displayname"></span>  
        [<a href="#" id="auth-logoutlink">Cerrar Sesión</a>]
      </div>
    </div>    
            </div>
            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>">
                <span id="logo"></span>
            </a>
            
            
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>Yii::app()->getBaseUrl(true)),
                                array('label'=>'Contactanos', 'url'=>array('/site/contact')),
                                array('label'=>'Sorteo iPhone 5C', 'url'=>array('/site/sorteo')),
                                /*
                                array('label'=>'Cartelera Rapida', 'url'=>array('/')),
				array('label'=>'Cartelera Rapida', 'url'=>array('/site/index', 'view'=>'about')),
				array('label'=>'Ubicaciones', 'url'=>array('/')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Cerrar Sesion ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                */
                            ),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por palCine.<br/>
		Todos los derechos reservados.<br/>
		palCine te lleva al cine.
	</div><!-- footer -->

</div><!-- page -->
</div>
    

   
    
</body>
</html>
