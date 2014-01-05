<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Sorteo iPhone 5C';
$this->breadcrumbs=array(
	'Sorteo iPhone 5C',
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
                alert('Debes aceptar los términos y condiciones del concurso para participar.');
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
                 //alert('talvez');
                 var singleValues = 
                 $.ajax({
                    type: "POST",
                     url: "/insert.php",
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
                                  
                              },
                     error: function(xhr, status, error) {
                          var err = eval("(" + xhr.responseText + ")");
                          alert(err.Message);
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
<div align="center" id="colores">
<form method="post" action="http://poll.pollcode.com/1725859" target="_blank"><table style = "width: 50%;" border=0 width="384" bgcolor="EBEBEB" cellspacing="2" cellpadding="0"><tr><td colspan="2" height="10"><font face="Verdana" size="4" color="04467E"><b>¿De que color quieren el iPhone 5C?</b></font></td></tr><tr><td width="5"><input type="radio" name="answer" value="1" id="1725859answer1"></td><td>&nbsp;<font face="Verdana" size="4" color="04467E"><label for="1725859answer1">Verde</label></font></td></tr><tr><td width="5"><input type="radio" name="answer" value="2" id="1725859answer2"></td><td>&nbsp;<font face="Verdana" size="4" color="04467E"><label for="1725859answer2">Azul</label></font></td></tr><tr><td width="5"><input type="radio" name="answer" value="3" id="1725859answer3"></td><td>&nbsp;<font face="Verdana" size="4" color="04467E"><label for="1725859answer3">Amarillo</label></font></td></tr><tr><td width="5"><input type="radio" name="answer" value="4" id="1725859answer4"></td><td>&nbsp;<font face="Verdana" size="4" color="04467E"><label for="1725859answer4">Rojo</label></font></td></tr><tr><td width="5"><input type="radio" name="answer" value="5" id="1725859answer5"></td><td>&nbsp;<font face="Verdana" size="4" color="04467E"><label for="1725859answer5">Blanco</label></font></td></tr><tr><td colspan="2" height="10"><center><input type="submit" value=" Votar">&nbsp;&nbsp;<input type="submit" name="view" value=" Ver resultados"></center></td></tr><tr><td colspan="2" align="right"></td></tr></table></form>

<br/>
<br/>


    <h3 style="color: #999; font-size: 20pt;">3 simples pasos para participar</h3>
<table border="1" style="background-color: whitesmoke;">
    <tbody>
        <tr>
            <td width="30%" >
                <div align="center" style="color: #04467e; font-size: 50pt; font-weight: bold;">1</div> 
                <h3 style="color: #04467e; text-align: center;">Darle like a nuestras paginas (1 sola vez)</h3>
                
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
                
                <h3 style="color: #04467e; text-align: center;">Like y Compartir esta imagen </br>(por cada participación)</h3>
                <table border="1" style="background-color: white;">
                    <tbody>
                        <tr>
                            <td>
                                <div align="center" style="color: #04467e; font-size: 12pt; font-weight: bold;">
                                <br/>
                                     <a id="shareOpener" href="https://www.facebook.com/photo.php?fbid=1395683184012481&amp;set=a.1387771961470270.1073741828.1384849471762519&amp;type=1&amp;theater" target="_blank" class="yellow smallButton">Compartir</a><p></p>    
                                <!-- <div class="fb-share-button" data-href="http://facebook.com/photo.php?fbid=1395683184012481&set=a.1387771961470270.1073741828.1384849471762519&type=1&theater" data-type="button_count"></div> -->
                                <!-- <div class="fb-like" data-href="https://www.facebook.com/photo.php?fbid=1395683184012481&amp;set=a.1387771961470270.1073741828.1384849471762519&amp;type=1&amp;theater" data-width="300" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div> --> 
                                
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                <div align="center" style="border:1px solid #e5e5e5;">                
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/sorteo.png" width="300" height="219" />
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
                        <input type="checkbox" id="myCheck"> Soy mayor de 18 años y acepto los términos y condiciones del concurso<p></p>
                        <a id="postButton" href="javascript:;" class="yellow smallButton">Participar</a><p></p>
                        
                        
                        <div id="time_loading_image" align="center"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ajax-loader.gif" width="16" height="16" alt="ajax-loader"/>
                        </div>
                        <p></p>
                        <p style="color: #999;">Para participar debes ser mayor de 18 años y aceptar los <a id="terms">términos y condiciones del concurso</a></p>

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
                        
                        if(Yii::app()->user->getId() !== null){
                        echo "<td style='border: 1px solid #e5e5e5;'><b>".
                                $participantes[$i]["id"].".</b> ".
                                "<a href='http://www.facebook.com/profile.php?id=".$participantes[$i]["facebook_id"]."' target='_blank'>".
                                $participantes[$i]["first_name"]." ".$participantes[$i]["last_name"].
                                "</a>".
                                "</td>";
                        }else{
                            if(intval($participantes[$i]["id"]) > 499 && intval($participantes[$i]["id"]) < 551){
                                if(intval($participantes[$i]["id"]) == 522){
                                    echo "<td style='border: 1px solid #e5e5e5;' bgcolor='#fdca4b'><b>".
                                    $participantes[$i]["id"].".</b> ".
                                    $participantes[$i]["first_name"]." ".$participantes[$i]["last_name"].
                                    "</td>";
                                }else{                                
                                    echo "<td style='border: 1px solid #e5e5e5;' bgcolor='#B3D9FF'><b>".
                                    $participantes[$i]["id"].".</b> ".
                                    $participantes[$i]["first_name"]." ".$participantes[$i]["last_name"].
                                    "</td>";
                                }
                            }else{
                                echo "<td style='border: 1px solid #e5e5e5;' <b>".
                                $participantes[$i]["id"].".</b> ".
                                $participantes[$i]["first_name"]." ".$participantes[$i]["last_name"].
                                "</td>";
                            }
                        }
                        
                         
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

<div id="estreno" title="Ganador" style="height: 700px; overflow: scroll; color: #555;">
  </br>
  <div align="center">
      
      
      <table border="0" style="border: none;">
                                    <tbody>
                                        <tr>
                                            <td><h3 style="color: #04467e; font-size: 15pt;"><b>Numero Ganador de la Recarga Tigo de L.100.00</b></h3>
                                            <!-- 
                                                <div align="center">
                                                <a id="opener" href="http://www.youtube.com/embed/utClMjdBixo" class="yellow button" style="color: #FFF;">Ver Trailer</a>
                                            </div>
                                            -->
                                            </td>
                                            <td><div style="color: grey;" class="fb-like" data-href="http://www.palcine.me/" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" data-colorscheme="light"></div> 
                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table border="0">
                                    <tbody>
                                        <tr>
                                            <!-- <td><img width="448" height="286" src="<?php echo Yii::app()->baseUrl; ?>/images/estreno.jpg" /></td> -->
                                            <td><iframe width="448" height="286" src="//www.youtube.com/embed/g5LS-3gBZdg" frameborder="0" allowfullscreen></iframe></td>
                                            <td><div class="fb-comments" data-href="http://www.palcine.me/" data-numposts="5" data-width="380"></div>
                                </td>
                                        </tr>
                                    </tbody>
                                </table>

                                
      
  </div>
  </div>


<div id="dialog" title="Términos y Condicones del concurso" style="height: 500px; overflow: scroll; color: #555;">
  </br>
<div align="center">
    <h2>Términos y Condiciones del concurso</h2>
    
    <p style="text-align: justify;">
    1. La participación en el concurso es gratuita y esta abierta unicamente a personas mayores de 18 años.</br></br>

2. Fecha del sorteo 21 de Febrero 2014, la inscripción tiene fecha limite 

el 20 de Febrero de 2014 a las 11:59:00 pm.</br></br>

3. El premio será un iPhone 5c nuevo.</br></br>

4. palCine no se hace responsable por el estado del aparato y no 

promueve ninguna garantía del mismo luego de ser entregado.</br></br>

5. Para que la participación sea aceptada el concursante debe cumplir 

con todos los paso que palCine requiera al momento de la inscripción en 

el concurso.</br></br></br>

<b>Entrega del premio</b></br></br>

6. El celular será entregado por personal de palCine únicamente en la 

ciudad de Tegucigalpa o San Pedro Sula.</br></br>

7. La persona ganadora deberá presentar su identidad al momento de 

entregarse el premio, esta identidad debe ser la misma con la que se 

registro en el concurso.</br></br>

8. El premio debe ser reclamado al correo administracion@palcine.me 

enviando una copia de la identidad con que se registro.</br></br>

9. Si el ganador no reclama el premio a mas tardar el día 28 de Febrero de 

2014 este será sujeto a una nueva rifa sin ninguna responsabilidad por 

parte de palCine.</br></br>

10. palCine tiene todo el derecho de cancelar cualquier participación en 

el momento que se detecte que es fraudulenta.</br></br>

11. Si la persona ganadora no siguió los pasos tal y como se especifican 

en el sorteo palCine realizara una nueva rifa del celular.</br></br>

12. El limite de participaciones es 1 vez por día, lo cual limita el numero 

máximo de participaciones desde la fecha que se inicio el sorteo hasta la 

fecha de cierre.</br></br>

13. palCine tiene la potestad de dar de baja la inscripción en el sorteo

en cualquier momento, ya sea por mantenimiento, administración o 

cualquier otra razón que palCine considere sea necesaria.</br></br>

14. La fecha del sorteo puede variar en cualquier momento y esta sujeta 

a cambios; mismos que se publicaran en la página oficial de Facebook 

PALCINE TE LLEVA EL CINE.</br></br>

15. Cualquier participacion de un menor de edad sera anulada y en caso de resultar ganador el iPhone sera sorteado nuevamente sin ninguna responsabilidad por parte de palCine.</br></br>

16. palCine no se hace responsable por información comprometida de cualquier participación.    
    </p>
</div>

</br>
</br>

</div>


<script>
    $( "#terms" ).click(function() {
        $('#dialog').dialog('open');         
    });   
$( "#dialog" ).dialog({
      autoOpen: false,
      width: 800,
      height: 500,
      modal: true,
      show: {
      },
      hide: {
      }
    });
    
    $( "#estreno" ).dialog({
      autoOpen: true,
      width: 900,
      height: 600,
      modal: true,
      show: {
      },
      hide: {
      }
    }); 
    
timer();    
$("#time_loading_image").hide();    
    
function timer() {
			$("#time").countdown({
		date: "february 20, 2014 23:59:59", //Counting TO a date
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