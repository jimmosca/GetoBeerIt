
<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
 ?>


<h1 class = " mt-5 pt-5 text-center"><img src="imagenes/carritocompra.png">   CARRITO DE LA COMPRA   <img src="imagenes/carritocompra.png"></h1>
<?php

$carrito = array ( "Cerveza1"  => array ( "Precio" => 11.3, "Cantidad" => 1),
                   "sza2"  => array ( "Precio" => 12.3, "Cantidad" => 1),
                   "Cdveza3"  => array ( "Precio" => 13.3, "Cantidad" => 4),
                   "Cfza4"  => array ( "Precio" => 10.3, "Cantidad" => 1),
                   "Cerga5"  => array ( "Precio" => 19.3, "Cantidad" => 1));
$cont=0;
foreach ($carrito as $clave => $valor) {
$cont++;
$nombre=$clave;
echo"
  <hr width='80%' />
  <div class='d-flex justify-content-around' id=$cont>

        <div class='ml-4 col-4' >
          {$clave}
        </div>
        <div class='col-4'> Cantidad: {$valor['Cantidad']} </div>
        <div class='col-4 Precio_$cont'>";
        $precio = $valor['Cantidad']*$valor['Precio'];
        echo "Precio: $precio
        </div>
        <div class = 'text-danger' onclick = 'quitar($cont)'> x </div>
   </div>
  <hr width='80%' />";

}
?>



<br><br><br>
<form action="login.php" method="post" class = "col-4 offset-9" >
	<input type="submit" value="Ok!" name="Comprar">
  <img src="imagenes/tarjeta.png">
</form>

<form action="login.php" method="post" class = "col-4 offset-9">
	<input type="submit" value="Cancelar"  name="Volver">
</form>
<?php require 'abajo.php'; ?>
