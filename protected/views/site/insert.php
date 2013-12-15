<?php
$con = mysql_connect("palcineweb.db.9416022.hostedresource.com","palcineweb","Q1w2e3r4t5");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("palcineweb", $con);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$identity = $_POST["identity"];
$facebook_id = $_POST["facebook_id"];

$sql="INSERT INTO `pal_sorteo` (`first_name`, `last_name`, `email`, `phone_number`, `identity`, `facebook_id`) 
                        VALUES ('$first_name', '$last_name', '$email', '$phone', '$identity', '$facebook_id')";

/*
$sql = "INSERT INTO  `palcineweb`.`pal_sorteo` (
`id` ,
`first_name` ,
`last_name` ,
`email` ,
`phone_number` ,
`identity` ,
`facebook_id`
)
VALUES (
NULL ,  'Miguel',  'Zepeda',  '1',  '2',  '3',  '4'
);";
*/
if (!mysql_query($sql,$con))
  {
    die('Could not connect: ' . mysql_error());
  //die('Solo podes participar una vez. Suerte para el sorteo.' );
  }
echo "Hemos recibido tus datos, gracias por participar. ";

mysql_close($con);
?>