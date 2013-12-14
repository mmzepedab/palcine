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
    <h3 style="color: #999; font-size: 15pt;">Pasos para participar</h3>
<table border="1" style="background-color: whitesmoke;">
    <tbody>
        <tr>
            <td width="30%" >
                <h3 style="color: #04467e; text-align: center;">1.Darle like a nuestras paginas</h3>
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
            <td width="30%"><h3 style="color: #04467e; text-align: center;">2. Comparte y dale like a esta imagen</h3></td>
            <td style="vertical-align:middle">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/arrow_right.png" />
                
            </td>
            <td width="30%">
                <h3 style="color: #04467e; text-align: center;">3. Llena tus datos</h3>
                <div align="center">

                <div id="form"><form id="formulario" action="insert.php" method="POST">
                <table width="200" border="0" cellspacing="10" cellpadding="10" style="background-color: white;">
                <tbody>
                <tr>
                <td>
                    <div align="center">
                    Identidad<br/>
                    <input id="identity" type="text" name="identity" maxlength="13" />
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                    <div align="center">
                    Telefono<br/>
                    <input id="phone" type="text" name="phone" maxlength="8" />
                    </div>
                </td>
                </tr>
                </tbody>
                </table>

                        <a id="timeOpener" href="" class="yellow smallButton">Participar</a><p></p>
                        <p style="color: #999;">Para participar llena tus datos, recuerda puedes participar una vez al dia.</p>

                        <!-- <input id="postButton" type="button" value="PARTICIPAR" /></form></div> -->
                </div>
                
            </td>
        </tr>
    </tbody>
</table>
</div>
    






<div align="center">
<h1>Lista de participantes</h1>
</div>
<table border="1" width="100">
    <tbody>
        <tr>
            
            <td>
            
            <table border="1" width="100" >
                
                <tbody>
                    <tr>
                        <td style="border: 1px solid #e5e5e5;"><b>1.</b> Mario Zepeda</td>
                        <td style="border: 1px solid #e5e5e5;"><b>2.</b> Erick Zepeda</td>
                        <td style="border: 1px solid #e5e5e5;"><b>3.</b> Pamela Calderon</td>
                        <td style="border: 1px solid #e5e5e5;"><b>4.</b> Martha Lidia</td>
                        <td style="border: 1px solid #e5e5e5;"><b>5.</b> Jose Nieto</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #e5e5e5;"><b>6.</b> Francisco Alejandro</td>
                        <td style="border: 1px solid #e5e5e5;"><b>7.</b> Peña Nieto Zepeda</td>
                        <td style="border: 1px solid #e5e5e5;"><b>8.</b> Jose Aleman Calderon</td>
                        <td style="border: 1px solid #e5e5e5;"><b>9.</b> Canales Lidia</td>
                        <td style="border: 1px solid #e5e5e5;"><b>10.</b> Alejandro Nieto</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #e5e5e5;"><b>11.</b> Mario Zepeda</td>
                        <td style="border: 1px solid #e5e5e5;"><b>12.</b> Glenda Martinez</td>
                        <td style="border: 1px solid #e5e5e5;"><b>13.</b> Zepeda Calderon</td>
                        <td style="border: 1px solid #e5e5e5;"><b>14.</b> Mario Zepeda</td>
                        <td style="border: 1px solid #e5e5e5;"><b>15.</b> Nieto Bacca</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            
                
            </td>
        </tr>
    </tbody>
</table>


<script>
timer();    
    
    
function timer() {
			$("#time").countdown({
		date: "december 23, 2013 21:00:00", //Counting TO a date
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