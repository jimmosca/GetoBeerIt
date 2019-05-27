<?php
include "arriba.php";
inicioPag("GetoBeerlt", "inicio.css");
include "navBar.php";
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
