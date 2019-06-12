<?php
require "arriba.php";
inicioPag("GetoBeerlt", "inicio.css");
require "navBar.php";
?>

<div class="d-flex align-items-center justify-content-center">
  <h3 class="text-center titulo">NUEVOS PRODUCTOS</h3>
</div>

<figure class="icon-cards mt-3">
  <div class="icon-cards__content">
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
      <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo1.jpg"><h2 class="textito">Cerveza 1</h2></a>
    </span>
  </div>
  <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
    <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo2.jpg"><h2 class="textito">Cerveza 2</h2></a>
  </span>
</div>
<div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
  <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo3.jpg"><h2 class="textito">Cerveza 3</h2></a>
</span>
</div>
</div>
</figure>

<div class="d-flex align-items-center justify-content-center">
  <h3 class="text-center titulo">EN OFERTA</h3>
</div>

<figure class="icon-cards mt-3">
  <div class="icon-cards__content">
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
      <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo1.jpg"><h2 class="textito">Cerveza 1</h2></a>
    </span>
  </div>
  <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
    <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo2.jpg"><h2 class="textito">Cerveza 2</h2></a>
  </span>
</div>
<div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
  <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo3.jpg"><h2 class="textito">Cerveza 3</h2></a>
</span>
</div>
</div>
</figure>

<div class="d-flex align-items-center justify-content-center">
  <h3 class="text-center titulo">ULTIMOS PRODUCTOS</h3>
</div>

<figure class="icon-cards mt-3">
  <div class="icon-cards__content">
    <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
      <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo1.jpg"><h2 class="textito">Cerveza 1</h2></a>
    </span>
  </div>
  <div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
    <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo2.jpg"><h2 class="textito">Cerveza 2</h2></a>
  </span>
</div>
<div class="icon-cards__item d-flex align-items-center justify-content-center"><span class="h1">
  <a href=""><img class="d-block w-100" src="imagenes/fotoEjemplo3.jpg"><h2 class="textito">Cerveza 3</h2></a>
</span>
</div>
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
