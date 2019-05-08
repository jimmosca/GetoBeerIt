<?php
function inicioPag($title){
  echo "<!DOCTYPE html>
  <html>
  <head>
  <title>$title</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

  </head>
  <body>";

}
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cervezas_bd";
$conn  =  new  mysqli($servername,$user,$password, $dbname);


if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}else
echo "Conexión con BBDD correcta" ;

include "navBar.php";
?>
