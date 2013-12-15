<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Sorteo';
$this->breadcrumbs=array(
	'Sorteo',
);

Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/jquery.jcountdown1.3.js'
);

?>

<div id="fb-root"></div>
<script type="text/javascript">// <![CDATA[
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
				//alert(me.id);
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
		
		// respond to clicks on the participate button
        document.getElementById('postButton').addEventListener('click', function(){
            if(!$('#myCheck').is(':checked')){
                alert('Debes aceptar los terminos y condiciones del concurso para participar.');
                return false;
            }
            //return false;
            $("#time_loading_image").show();  
          //FB.login();
          //alert(2);
		  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    // the user is logged in and has authenticated your
    // app, and response.authResponse supplies
    // the user's ID, a valid access token, a signed
    // request, and the time the access token 
    // and signed request each expire
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
	 FB.api('/me', function(me){
             if(me.email==undefined){                
                FB.logout();
                alert('Debes autorizar a palCine en Facebook para poder participar.');
                $("#time_loading_image").hide(); 
             }else if($('#identity').val()=="" || $('#phone').val() == ""){
                alert('Debes completar todos los datos para participar');
                $("#time_loading_image").hide(); 
             }else{	
                 //alert('Si');
                 var singleValues = 
                 $.ajax({
                    type: "POST",
                     url: "http://www.palcine.me/insert.php",
                     data: {    first_name: me.first_name, 
                                last_name: me.last_name,
                                email: me.email,
                                identity: $('#identity').val(), 
                                phone: $('#phone').val(), 
                                facebook_id: me.id },
                     success: function(output) {                                    
                                  alert(output);
                                  $("#time_loading_image").hide(); 
                                  window.location.href += "#participantes";
                                  location.reload();
                                  
                              }
                     }/*
                 }).done(function (msg) {				 
                    alert(msg);	
                    window.location.href += "#participantes";
                    location.reload();
                 }*/);
             
             }//END IF not email authorized	 
	});
	
  } else if (response.status === 'not_authorized') {
    // the user is logged in to Facebook, 
    // but has not authenticated your app
	alert('Debes autorizar a palCine con tu facebook para poder participar');
        $("#time_loading_image").hide(); 
        FB.login(function(response) {
    if (response.authResponse) {
      FB.api('/me', function(me){
          //alert(me.email);
          $("#time_loading_image").hide(); 
      });    
    }
  },
  {
    scope: 'email' // I need this for publishing to Timeline
  });
  } else {
    // the user isn't logged in to Facebook.
	alert('Debes iniciar sesion con facebook para participar');
	FB.login(function(response) {
    if (response.authResponse) {
      FB.api('/me', function(me){
          //alert(me.email);
          $("#time_loading_image").hide(); 
      });    
    }
  },
  {
    scope: 'email' // I need this for publishing to Timeline
  });
  }
 });
		  
		  
		  
		  
        });
		
		 
      }
// ]]></script>

<div align="center" >
<h1 style="font-size: 30pt;"><span style="color: #555;">Sorteo de un</span> <b style="color: #04467e;">iPhone 5C</b> </h1>

<img src="<?php echo Yii::app()->baseUrl; ?>/images/iPhone5C.jpg" width="230" height="200" alt="iPhone5C"/>

</div>
<div class="line-separator"></div>
<p></p>
<p></p>
<div align="center" >
<b style="color: #555;">Tiempo restante para participar</b>
</div>
<h1>    
    <div id="time" align="center"></div>
</h1>
<div class="line-separator"></div>
<p></p>
</br>
</br>
<div align="center" >
    <h3 style="color: #999; font-size: 20pt;">3 simples pasos para participar</h3>
<table border="1" style="background-color: whitesmoke;">
    <tbody>
        <tr>
            <td width="30%" >
                <div align="center" style="color: #04467e; font-size: 50pt; font-weight: bold;">1</div> 
                <h3 style="color: #04467e; text-align: center;">Darle like a nuestras paginas</h3>
                </br>
                <table border="1" style="background-color: white;">
                    <tbody>
                        <tr>
                            <td>
                                <div align="center" style="color: #04467e; font-size: 12pt; font-weight: bold;">
                                    
                                <div style="color: grey;" class="fb-like" data-href="http://palcine.me" data-width="100" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false" data-colorscheme="light"></div> 
                                </br></br>
                                www.palcine.me
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table border="1" style="background-color: white;">
                    <tbody>
                        <tr>
                            <td>
                                <div align="center" style="color: #04467e; font-size: 12pt; font-weight: bold;">
                                    
                                <div style="color: grey;" class="fb-like" data-href="https://www.facebook.com/palcineme" data-width="100" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false" data-colorscheme="light"></div> 
                                </br></br>
                                www.facebook.com/palcineme
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </td>
            <td style="vertical-align:middle">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/arrow_right.png" />
                
            </td>
            <td width="30%">
                <div align="center" style="color: #04467e; font-size: 50pt; font-weight: bold;">2</div> 
                
                <h3 style="color: #04467e; text-align: center;">Compartir y darle like a esta imagen </h3>
                <table border="1" style="background-color: white;">
                    <tbody>
                        <tr>
                            <td>
                                <div align="center" style="color: #04467e; font-size: 12pt; font-weight: bold;">
                                <br/>
                                    <a id="shareOpener" href="https://www.facebook.com/photo.php?fbid=486446331473324&set=a.222655054519121.47830.222201907897769&type=1&relevant_count=1&ref=nf" target="_blank" class="yellow smallButton">Compartir</a><p></p>    
                                
                                
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                <div align="center" >                
                <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-frc3/q71/1469817_486446331473324_823678471_n.jpg" width="148" height="197"/>
                </div>
                <br/>
            </td>
            <td style="vertical-align:middle">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/arrow_right.png" />
                
            </td>
            <td width="30%">
                <div align="center" style="color: #04467e; font-size: 50pt; font-weight: bold;">3</div> 
                <h3 style="color: #04467e; text-align: center;">Llenar tus datos y participar</h3>
                <div align="center">

                <div id="form"><form id="formulario" action="insert.php" method="POST">
                <table width="200" border="0" cellspacing="10" cellpadding="10" style="background-color: white;">
                <tbody>
                <tr>
                <td>
                    <div align="center">
                    <b>Identidad</b> (sin guiones)<br/>
                    <input id="identity" type="text" name="identity" maxlength="13" />
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div align="center">
                    <b>Telefono</b> (sin guiones)<br/>
                    <input id="phone" type="text" name="phone" maxlength="8" />
                    </div>
                </td>
                </tr>
                </tbody>
                </table>
                        <input type="checkbox" id="myCheck"> Acepto los terminos y condiciones del concurso<p></p>
                        <a id="postButton" href="javascript:;" class="yellow smallButton">Participar</a><p></p>
                        
                        
                        <div id="time_loading_image" align="center"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                        </div>
                        <p></p>
                        <p style="color: #999;">Para participar debes aceptar los <a>terminos del concurso</a></p>

                        <!-- <input id="postButton" type="button" value="PARTICIPAR" /></form></div> -->
                </div>
                
            </td>
        </tr>
    </tbody>
</table>
</div>
    





<br/>
<br/>   
<div align="center">
<h3 id="participantes" style="color: #999; font-size: 20pt;">Lista de participantes</h3>
</div>
<table border="1" width="100">
    <tbody>
        <tr>
            
            <td>
            
            <table border="1" width="100" >
                
                <tbody>
                    <?php
                    $mysqli = new mysqli("palcineweb.db.9416022.hostedresource.com", "palcineweb", "Q1w2e3r4t5", "palcineweb");
                    //$mysqli = new mysqli("localhost", "root", "root", "palcineweb");
                    /* check connection */
                    if (mysqli_connect_errno()) {
                        printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                    }
                    
                    $query = "SELECT * FROM  `pal_sorteo` ORDER BY id DESC";
                    $result = $mysqli->query($query);
                    $row_cnt = $result->num_rows;
                    
                    $participantes = array();
                    while($participante = $result->fetch_assoc()){
                       //$participantes[$participante['id']] = $participante;
                       $participantes[] = $participante;
                    }
                    
                    foreach ($participantes as $participante) {
                        //echo $participante['last_name'];
                    }
                    
                    //echo print_r($participantes);
                    $count = 0;
                    for ($i = 0; $i < $row_cnt; $i++) {
                        if($count > 4){
                            echo "<tr>";
                        }
                        echo "<td style='border: 1px solid #e5e5e5;'><b>".$participantes[$i]["id"].".</b> ".$participantes[$i]["first_name"]." ".$participantes[$i]["last_name"]."</td>";
                        
                         
                        if($count > 3){
                            echo "</tr>";                            
                            $count = 0;
                        }else{
                            
                            $count++;
                        }
                        
                    }
                            //print_r("%s. %s %s\n", $row["id"], $row["first_name"], $row["last_name"]);
                        
                    
                    ?>
                    
                </tbody>
            </table>

            
                
            </td>
        </tr>
    </tbody>
</table>


<script>
timer();    
$("#time_loading_image").hide();    
    
function timer() {
			$("#time").countdown({
		date: "january 30, 2014 23:59:59", //Counting TO a date
		//htmlTemplate: "%{h} <span class=\"cd-time\">hours</span> %{m} <span class=\"cd-time\">mins</span> %{s} <span class=\"cd-time\">sec</span>",
		//date: "july 1, 2011 19:24", //Counting TO a date
		onChange: function( event, timer ){
		


		},
		onComplete: function( event ){
		
			$(this).html("Participacion finalizada");
		},
		leadingZero: true,
		direction: "down"
	});
	  }
</script>