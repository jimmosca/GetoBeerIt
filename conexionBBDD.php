<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cervezas_bd";
$conn  =  new  mysqli($servername,$user,$password, $dbname);


if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}
 ?>
