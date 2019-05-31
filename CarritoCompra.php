<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
 ?>

<h1 class = " mt-5 pt-5 text-center"><img src="imagenes/carritocompra.png">   CARRITO DE LA COMPRA   <img src="imagenes/carritocompra.png"></h1>
<?php
$carrito = array ( "Cerveza1"  => array ( "Precio" => 11.3, "Cantidad" => 1),
                   "Cerveza2"  => array ( "Precio" => 12.3, "Cantidad" => 1),
                   "Cerveza3"  => array ( "Precio" => 13.3, "Cantidad" => 4),
                   "Cerveza4"  => array ( "Precio" => 10.3, "Cantidad" => 1),
                   "Cerveza5"  => array ( "Precio" => 19.3, "Cantidad" => 1));


foreach ($carrito as $clave => $valor) {

echo"
  <hr width='80%' />
  <div class='d-flex justify-content-around'>
        <div class='ml-4'>
          {$clave}
        </div>
        <div> <input type='button' class='boton' name='menos' value = '-' onclick=restar()> Cantidad:{$valor['Cantidad']} <input type='button' class='boton' name='menos' value = '+' onclick=sumar()></div>
        <div>
           Precio: {$valor['Precio']}
        </div>
   </div>
  <hr width='80%' />";


    // $array[3] se actualizará con cada valor de $array...


}


?>


<form action="login.php" method="post" class = "col-4 offset-9" >
	<input type="submit" value="Ok!" name="Comprar">
  <img src="imagenes/tarjeta.png">
</form>

<form action="login.php" method="post" class = "col-4 offset-9">
	<input type="submit" value="Cancelar"  name="Volver">
</form>
<?php require 'abajo.php'; ?>
