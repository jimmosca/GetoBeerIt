
<?php
include "arriba.php";
inicioPag("Actividad de login","wew.css");
  if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["email"]) && isset($_POST["direccion"]) && isset($_POST["usr"]) && isset($_POST["pwd"])){
    include "queryRegistroInsert.php";

  }

 ?>
</body>
</html>
