<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<!-- Required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>ACtividad de login</title>
</head>
<body class="text-light display-4 text-center bg-dark">
<?php
include "arriba.php";

  if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["email"]) && isset($_POST["direccion"]) && isset($_POST["usr"]) && isset($_POST["pwd"])){
    include "queryRegistroInsert.php";
  }

 ?>
</body>
</html>
