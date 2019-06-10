<?php
require "arriba.php";
inicioPag("Producto","wewe.css");
require "navBar.php";
?>

<div class="container mt-5">
  <div class="col-12 mt-5">
    <div class="row">
      <?php
      if (isset($_GET["product"])) {

        $sql = "SELECT productos.nombre, precio , stock , botella , imagen , pais , graduacion , marcas.nombre, tipo_cerveza.nombre
      FROM productos
      JOIN marcas on productos.id_marca = marcas.id_marca
      JOIN tipo_cerveza on productos.id_tipo = tipo_cerveza.id_cerveza
      WHERE productos.id_producto = $_GET['product']";

      }

      $result = $conn->query($sql);

      if(isset($result) && $result){
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            echo "<p>" . $row["desc"]. "</p>";

          }
        } else {
          echo "0 results";
        }
      }else{
        echo $conn->error;
        echo "<br/>".$sql;
      }


      ?>

      <div class="col-5">
        <img class="w-100" src="imagenes/cerve1.jpg">
      </div>
      <div class="col-7">
        <div class="row">
          <div class="col-12 mt-4">
            <div class="row">
              <div class="col-2 d-flex justify-content-end">
                <h6> Nombre:</h6>
              </div>
              <div class="col-9">
                <h5>THATS A PADDLIN</h5>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <div class="col-12">
              <h6>Descripción:</h6>
            </div>
            <div class="col-12">
              <p> . $row["desc"]. </p>

            </div>
          </div>
          <div class="col-12 mt-4 d-flex justify-content-center">
            <button type="button" class="btn btn-primary">Añadir al carrito</button>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="col-12">
    <div class="col-12">
      <h6>Comentarios</h6>
    </div>
    <div class="col-12">
      <?php

      echo "<table align=start border=1>";
      echo "<tr>";
      echo "  <th> Usuario </th>";
      echo "  <th> Opinión </th>";
      echo "  <th> Estrellas </th>";
      echo "</tr>";

      $sql = "SELECT usuarios.nombre as 'usuario', opiniones.texto as 'opinion', opiniones.estrellas as 'estrellas' FROM opiniones
      JOIN usuarios ON usuarios.id_usuario=opiniones.id_usuario
      WHERE opiniones.id_producto=1";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["usuario"], "</td>";
          echo "<td>" . $row["opinion"], "</td>";
          echo "<td>" . $row["estrellas"], "</td>" . PHP_EOL;
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      echo "</table>";


      ?>

    </div>

  </div>

</div>

<?php
require "abajo.php";
?>
