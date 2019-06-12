
<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
require "conexionBBDD.php";


$nombre=$_SESSION["nombre"];
echo "<br><br><br>";
var_dump($nombre);
$query = "INSERT INTO compras(Nombre) VALUES ('$nombre')";
$result = $conn->query($query);
?>
