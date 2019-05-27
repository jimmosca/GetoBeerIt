<?php
require "arriba.php";
inicioPag("Login", "login.css");
require "navBar.php";
?>
<?php if (isset($_POST["nombre"]) && isset($_POST["contra"])) {
  $nomUsu = $_POST["nombre"];
  $contra = $_POST["contra"];
  // Realizar una consulta MySQL
  $query = "SELECT * FROM usuarios WHERE usuarios.id_usuario ='". mysqli_real_escape_string($conn, $nomUsu)."' AND usuarios.contrasena = '". mysqli_real_escape_string($conn, $contra)."'";


  $result = $conn->query($query);


  if($result->num_rows > 0) {

    // echo "Correctamente logeado";

    $_SESSION["nombre"] = $nomUsu;

    header("Location: index.php");

  }else{

    header("Location: login.php?error=notOk");

  }
}else{
  ?><div class="container-fluid">
    <div class="d-flex flex-column align-items-center w-100 justify-content-center logCont">
      <form class="d-flex flex-column" action="login.php" method="post">
        <h3>Usuario</h3>
        <input type="text" name="nombre">
        <h3 class="mt-2">Contraseña</h3>
        <input type="password" name="contra">
        <input class="mt-3" type="submit" value="Aceptar">
      </form>
      <?php
      if (isset($_GET["error"]) && $_GET["error"] == "notOK"){
        echo " <div class='alert'>
        <p>Usuario o contraseña incorrectos</p>
        </div>";
      }?>

      <p>¿Aun no te has registrado?<a href='reg_index.php'>Resgitrate YA!!!</a></p>
    <?php } ?>
  </div>
</div>
