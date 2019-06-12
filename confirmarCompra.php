
<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
require "conexionBBDD.php";


$nombre=$_SESSION["nombre"];

var_dump($nombre);
$query = "INSERT INTO compras(Nombre) VALUES ('$nombre')";
$result = $conn->query($query);

echo "<br><br><br> ¡Se ha realizado satisfactoriamente la compra, esperamos que disfrutes con tus productos, vuelve pronto!";
?>
