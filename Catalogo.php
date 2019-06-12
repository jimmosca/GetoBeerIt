

<?php

require "arriba.php";
inicioPag("Catalogo", "Catalogo.css");
require "navBar.php";
$arrayPaises = [ "Selecciona","Alemania", "Bélgica", "España"];
?>
<script src="script.js" charset="utf-8"></script>

<div class= "row">
  <div class= "col-2 "id= "formulario">
    <form >
      Pais
      <select name="paises" id = "pais" >
        <?php
        for ($i=0; $i <3 ; $i++) {
          echo "<option>".$arrayPaises[$i]."</option>";
        }
        ?>
      </select>

      <br>
      Tipo/Familia:<br>
      <input type="radio" name="tipo_cerveza.nombre" value="Ale"><label>Ale</label><br/>
      <input type="radio" name="tipo_cerveza.nombre" value="Lager"><label>Lager</label><br/>
      <input type="radio" name="tipo_cerveza.nombre" value="Pale"><label>Pale</label><br/>
      <input type="radio" name="tipo_cerveza.nombre" value="Lambic"><label>Lambic</label><br/>

      Precios: <br>

      <input type='radio' name='price' value='1-5'><label>1-5€</label><br/>
      <input type='radio' name='price' value='5-10'><label>5-10€</label><br/>
      <input type='radio' name='price' value='10-15'><label>10-15€</label><br/>

      Botellas:<br>

      <input type='radio' name='botle' value='660'><label>660 ml</label><br/>
      <input type='radio' name='botle' value='500'><label>500 ml </label><br/>
      <input type='radio' name='botle' value='330'><label>330ml</label><br/>


      <input type="button" Value= "Enviar" onclick= "catalogo()">

    </form>
  </div>

  <div class= "col-7 "id= "catalogo" >
    <div class= "row" id="solucion">
      <script> catalogo();</script>
      <div>
      </div>
    </div>
  </div>
</div>

<?php require 'abajo.php'; ?>
