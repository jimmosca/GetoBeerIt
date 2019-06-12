
<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
 ?>


<h1 class = " mt-5 pt-5 text-center"><img src="imagenes/carritocompra.png">   CARRITO DE LA COMPRA   <img src="imagenes/carritocompra.png"></h1>
<?php


for ($anadido=0; $anadido < 1; $anadido++) {
  // code...
}
$carrito = array ( "Cerveza1"  => array ( "Precio" => 11.3, "Cantidad" => 1),
                   "sza2"  => array ( "Precio" => 12.3, "Cantidad" => 1),
                   "Cdveza3"  => array ( "Precio" => 13.3, "Cantidad" => 4),
                   "Cfza4"  => array ( "Precio" => 10.3, "Cantidad" => 1),
                   "Cerga5"  => array ( "Precio" => 19.3, "Cantidad" => 1));
$cont=0;
$precioFinal=0;
foreach ($carrito as $clave => $valor) {
$cont++;

var_dump($clave);
echo"
  <hr width='80%' />
  <div class='d-flex justify-content-around' id=$cont>
  <div class='ml-1' >
    $cont
  </div>
        <div class='ml-4' >
          {$clave}
        </div>
        <div col-6> Cantidad: {$valor['Cantidad']} </div>
        <div>";
        $precio = $valor['Cantidad']*$valor['Precio'];
        echo "Precio: $precio
        </div>
        <div class = 'text-danger' onclick = quitar($cont)> x </div>
   </div>
  <hr width='80%' />";
  $precioFinal=$precioFinal+$precio;
}
echo "<div class = 'text-right col-4 offset-6'><b>Precio Final: $precioFinal </b></div>";
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
