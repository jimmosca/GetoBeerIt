<?php
require "conexionBBDD.php";
session_start();
$arrMensaje = array();
if (isset($_GET['id']) && isset($_GET['cantidad'])) {
  $query = "SELECT nombre, precio
            FROM productos
            WHERE id_producto = ".$_GET['id'];
  $result = $conn->query($query);
  if (isset($result) && $result) {
    $row = $result->fetch_assoc();
    $_SESSION["carrito"][$row['nombre']] = array("Precio" => $row['precio'],
                                                 "Cantidad" => $_GET['cantidad']);
    $arrMensaje['estado'] = "OK";
  }else{
    $arrMensaje['estado'] = 'NO';
  }
}else {
  $arrMensaje['estado'] = "NO";
}
$JSON = json_encode($arrMensaje, JSON_PRETTY_PRINT);

echo $JSON;

 ?>
