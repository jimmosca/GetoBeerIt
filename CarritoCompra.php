
<?php
require "arriba.php";
inicioPag("GetoBeerlt", "carrito.css");
require "navBar.php";
?>


<h1 class = " mt-5 pt-5 text-center"><img src="imagenes/carritocompra.png">   CARRITO DE LA COMPRA   <img src="imagenes/carritocompra.png"></h1>
<?php
if (isset($_SESSION['carrito']) && count($_SESSION['carrito'])>0) {
  $carrito = $_SESSION['carrito'];
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
    <div class = 'text-danger' onclick = 'quitar($cont)'> X </div>
    </div>
    <hr width='80%' />";

  }
}else {
  echo "<h2 class='mt-5'>AUN NO SE HAN AÑADIDO PRODUCTOS AL CARRITO</h2>";
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
