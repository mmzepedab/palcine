<?php
$con = mysql_connect("palcineweb.db.9416022.hostedresource.com","palcineweb","Q1w2e3r4t5");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("palcineweb", $con);



if (!empty($_POST["first_name"]) && 
        !empty($_POST["last_name"]) && 
        !empty($_POST["email"]) &&
        !empty($_POST["phone"]) &&
        !empty($_POST["identity"]) &&
        !empty($_POST["facebook_id"])) {

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $identity = $_POST["identity"];
        $facebook_id = $_POST["facebook_id"];    
        $sql_validation = "SELECT * FROM pal_sorteo WHERE  (facebook_id = '$facebook_id' OR identity = '$identity') AND DATE(`create_time`) = DATE('".date("Y-m-d H:i:s", strtotime('+1 hour'))."')";
        $results = mysql_query($sql_validation,$con);
        $row = mysql_num_rows($results);
        if ($row > 0){
            print_r( "Tu ya participaste hoy, puedes regresar mañana a participar de nuevo. MUCHA SUERTE SORTEO 21 DE FEBRERO.");
        }else{      
            $sql="INSERT INTO `pal_sorteo` (`first_name`, `last_name`, `email`, `phone_number`, `identity`, `facebook_id`, `create_time`) 
                                        VALUES ('$first_name', '$last_name', '$email', '$phone', '$identity', '$facebook_id', '".date("Y-m-d H:i:s", strtotime('+1 hour'))."')";
            if (!mysql_query($sql,$con)){
                //die('Could not connect: ' . mysql_error());
                //die('Solo podes participar una vez. Suerte para el sorteo.' );
                print_r("No se han podido ingresar tus datos, intenta despues.");
            }
                print_r( "Felicidades estas participandos con el numero ".mysql_insert_id()." recuerda que puedes participar una vez al dia, regresa mañana para anotarte de nuevo. MUCHA SUERTE, SORTEO 21 DE FEBRERO");
        }
}else{
    print_r("No se han podido ingresar tus datos, intenta despues o prueba desde otro navegador.");
}


mysql_close($con);


?>