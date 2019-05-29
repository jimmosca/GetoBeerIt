
<form action="Catalogo.php" method="post">
<?php 
include  'catalogobaseDatos.php';
//include  'catalogo2Datos.php';
//******Formulario de elige el pais******* */
$arrayPaises = [ "Alemania", "Bélgica", "España"];
  ?>
Pais
    <select name="paises">
    <?php   
for ($i=0; $i <3 ; $i++) { 
    echo "<option>".$arrayPaises[$i]."</option>";
}
    ?>
    </select>
<input type="submit" name="submit" value="send">
<input type="hidden" name="formulario" value="formulario1">
</form>

Tipo/Familia:
<form action="Catalogo.php" method="post">
<input type="radio" name="tipo" value="Ale"><label>Ale</label><br/>
<input type="radio" name="tipo" value="Lager"><label>Lager</label><br/>
<input type="radio" name="tipo" value="Pale"><label>Pale</label><br/>
<input type="radio" name="tipo" value="Lambic"><label>Lambic</label><br/>
<input type="submit" name="submit" value="send"/>
<input type="hidden" name="formulario" value="formulario2">
</form>
Precios: 
<form action="Catalogo.php" method="post">
    <input type='radio' name='radio' value='1-5€'><label>1-5€</label><br/>
    <input type='radio' name='radio' value='5-10€'><label>5-10€</label><br/>
    <input type='radio' name='radio' value='10-15€'><label>10-15€</label><br/>
    <input type="submit" name="submit" value="send"/>
    <input type="hidden" name="formulario" value="formulario3"> 

</form>
Botellas:
<form action="Catalogo.php" method="post">
    <input type='radio' name='botle' value='660'><label>660 ml</label><br/>
    <input type='radio' name='botle' value='500'><label>500 ml </label><br/>
    <input type='radio' name='botle' value='330'><label>330ml</label><br/>
    <input type="submit" name="submit" value="send"/>
    <input type="hidden" name="formulario" value="formulario4"> 

</form>

SOLUCIÓN <br><br>
<?php
conexionBD();
?>




