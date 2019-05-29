<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<title>Ejercicio 1</title>
 <script src="CarritoCompra.js"></script>
 <link rel="stylesheet" type="text/css" href="Estilos.css">
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<h1 class = "text-center"><img src="imagenes/carritocompra.png">   CARRITO DE LA COMPRA   <img src="imagenes/carritocompra.png"></h1>
<?php


for ($anadido=0; $anadido < 1; $anadido++) {
  // code...
}
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
        <div col-6> Cantidad: <input type='number' class='form-control col-5' onclick='refrescar()' name='menos' value = {$valor['Cantidad']}></div>
        <div>";
$precio = $valor["Precio"] * $valor["Cantidad"];
var_dump($precio);
           echo "Precio: <input type='text' value=$precio class='field left col-4' readonly>
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
</html>
</body>
