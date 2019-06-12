<?php
require "arriba.php";
inicioPag("Producto", "producto.css");
require "navBar.php";
?>
<?php
echo '<script>console.log("'.$_GET["idCerve"].'")</script>';

if (isset($_GET["idCerve"])) {

  $arrAux = explode( '_', $_GET["idCerve"] );
  $selected = (int) $arrAux[1];

  $query = "SELECT productos.nombre AS 'producto', productos.precio AS 'precio', productos.imagen AS 'imagen', productos.stock AS 'stock', productos.pais AS 'pais', productos.graduacion AS 'graduacion', marcas.nombre AS 'marca', tipo_cerveza.nombre AS 'tipo'
            FROM productos
            JOIN marcas ON marcas.id_marca = productos.id_marca
            JOIN tipo_cerveza ON tipo_cerveza.id_cerveza = productos.id_tipo
            WHERE productos.id_producto=".$selected;

  $queryOp = "SELECT opiniones.texto AS 'opinion', opiniones.estrellas AS 'estrellas', usuarios.id_usuario AS 'usuario'
              FROM opiniones
              JOIN usuarios ON usuarios.id_usuario = opiniones.id_usuario
              where opiniones.id_producto=".$selected;


  echo "<br>
        <div class='container mt-5 p-5' id='algo'>
          <div class='col-12'>
            <div class='row'>

              <div class='col-5' id='imagen'>";


  $result = $conn->query($query);

  if (isset($result) && $result) {

    if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      echo "<img src='imagenes/" . $row["imagen"], "'" . " id='cerve'>";
    } else {
      echo "0 results";
    }
  } else {
    echo "Algo va mal";
  }
  echo "</div>
  <div class='col-7' id='descripcion'>
  <div class='row'>
  <div class='col-12 mt-4' id='nombre'>
  <div class='row'>
  <div class='col-2 d-flex justify-content-end' id='nombre1'>
  <h6> Nombre:</h6>
  </div>
  <div class='col-9' id='nombre2'>";


  $result = $conn->query($query);

  if (isset($result) && $result) {

    if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();

      echo "<h5>" . $row["producto"], "</h5>";
    } else {
      echo "0 results";
    }
  } else {
    echo "Algo va mal";
  }
  echo "</div>
  </div>
  </div>
  <div class='col-12 mt-4' id='desc'>
  <div class='col-12' id='desc1'>
  <h6>Descripción:</h6>
  </div>
  <div class='col-12' id='desc2'>";





  $result = $conn->query($query);

  if (isset($result) && $result) { // Si pasa por este if, la query está está bien y se obtiene resultado

    if ($result->num_rows > 0) { // Aunque la query esté bien puede no obtenerse resultado (tabla vacía). Comprobamos antes de recorrer


      $row = $result->fetch_assoc();

      echo "<table align=start border=1>";
      echo "<tr>";
      echo "<td> Precio </td>";
      echo "<td>" . $row["precio"], "€</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
      echo "<td> Stock </td>";
      echo "<td>" . $row["stock"], "</td>";
      echo "</tr>";
      echo "<td> Marca </td>";
      echo "<td>" . $row["marca"], "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Tipo </td>";
      echo "<td>" . $row["tipo"], "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> País </td>";
      echo "<td>" . $row["pais"], "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Graduación </td>";
      echo "<td>" . $row["graduacion"], "</td>";
      echo "</tr>";
      echo "</table>";
    } else {
      echo "0 results";
    }
  } else {
    echo "Algo va mal";
  }


  echo "</div>
  </div>
  <div class='col-12 mt-4 d-flex justify-content-center' id='desc1'>
  <input type='number' name='cantidad' min='1' value='1' id='cantidad' class='mr-2' required>
  <button type='button' class='btn btn-primary' onclick='addCarrito($selected)'>Añadir al carrito</button>
  </div>
  </div>
  </div>

  </div>
  </div>
  <div class='col-12' id='comentario'>
  <div class='col-12' id='comentario1'>
  <h6>Comentarios</h6>
  </div>
  <div class='col-12' id='comentario2'>";




  echo "<table align=start border=1>";
  echo "<tr>";
  echo "  <th> Usuario </th>";
  echo "  <th> Opinión </th>";
  echo "  <th> Estrellas </th>";
  echo "</tr>";

  $result = $conn->query($queryOp);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["usuario"], "</td>";
      echo "<td>" . $row["opinion"], "</td>";
      if($row["estrellas"] == 1){
        echo "<td><img src='imagenes/1estrella.png' id='1' height='40'></td>";
      }else if($row["estrellas"] == 2){
        echo "<td><img src='imagenes/2estrella.png' id='2' height='40'></td>";
      }else if($row["estrellas"] == 3){
        echo "<td><img src='imagenes/3estrella.png' id='3' height='40'></td>";
      }else if($row["estrellas"] == 4){
        echo "<td><img src='imagenes/4estrella.png' id='4' height='40'></td>";
      }else {
        echo "<td><img src='imagenes/5estrella.png' id='5' height='40'></td>";
      }
      echo "</tr>";
    }
  } else {
    echo "0 results";
  }
  echo "</table>";

  $conn->close(); // cierre de conexión con la BBDD

  echo "</div>

  </div>

  </div>";
}else{
  echo "NOPEEE";
}
?>
<?php
require "abajo.php";
?>
