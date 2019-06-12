<?php
require "arriba.php";
inicioPag("GetoBeerlt", "inicio.css");
require "navBar.php";
?>

<div class="d-flex align-items-center justify-content-center">
  <h3 class="text-center titulo">NUEVOS PRODUCTOS</h3>
</div>

<figure class="icon-cards mt-5 ">
  <div class="icon-cards__content">
    <?php
    $query = "SELECT id_producto, nombre, imagen
              FROM productos
              WHERE novedad = true
              LIMIT 3";
    $result = $conn->query($query);
    if (isset($result) && $result) {
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='icon-cards__item d-flex align-items-center justify-content-center'><span class='h1'>
            <a href='./producto.php?idCerve=producto_".$row['id_producto']."'><img class='d-block w-50' src='imagenes/".$row['imagen']."'><h2 class='textito'>".$row['nombre']."</h2></a>
          </span>
        </div>";
        }
      }
    }else{
      echo "<p class='text-center'>Actualmente no hay productos novedosos</p>";
    }
     ?>
  </div>
</figure>

<div class="d-flex align-items-center justify-content-center">
  <h3 class="text-center titulo mt-5">EN OFERTA</h3>
</div>

<figure class="icon-cards mt-5 ">
  <div class="icon-cards__content">
    <?php
    $query = "SELECT id_producto, nombre, imagen
              FROM productos
              WHERE descuento = true
              LIMIT 3";
    $result = $conn->query($query);
    if (isset($result) && $result) {
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='icon-cards__item d-flex align-items-center justify-content-center'><span class='h1'>
            <a href='./producto.php?idCerve=producto_".$row['id_producto']."'><img class='d-block w-50' src='imagenes/".$row['imagen']."'><h2 class='textito'>".$row['nombre']."</h2></a>
          </span>
        </div>";
        }
      }
    }else{
      echo "<p class='text-center'>Actualmente no hay productos con descuento</p>";
    }
     ?>
</div>
</figure>

<script>

function classToggle() {
  var el = document.querySelector('.icon-cards__content');
  el.classList.toggle('step-animation');
}

document.querySelector('#toggle-animation').addEventListener('click', classToggle);

</script>

<?php require 'abajo.php'; ?>
