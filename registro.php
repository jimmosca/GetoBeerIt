
<?php
require "conexionBBDD.php";

if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["email"]) && isset($_POST["direccion"]) && isset($_POST["usr"]) && isset($_POST["pwd"])){
  include "queryRegistroInsert.php";

}

?>
