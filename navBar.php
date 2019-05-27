

<nav class="navbar navbar-expand-sm navbar-dark navbar-center fixed-top mx-background-top-linear" id ="navbar">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">GetoBeerlt</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="">Inicio Sesion</a></li>
        <li class="nav-item"><a class="nav-link" href="">Regristro</a></li>
        <li class="nav-item"><a class="nav-link" href="">Mi Cuenta</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php 	if(isset($_POST["nombre"]) && isset($_POST["contra"]) ){
  /* Me han enviado el formulario */

  $nomUsu = $_POST["nombre"];
  $contra = $_POST["contra"];
  // Realizar una consulta MySQL
  $query = "SELECT * FROM usuarios WHERE usuarios.Usuario ='". mysqli_real_escape_string($conn, $nomUsu)."' AND usuarios.Contrasena = '". mysqli_real_escape_string($conn, $contra)."'";


  $result = $conn->query($query);


  if($result->num_rows > 0) {

    // echo "Correctamente logeado";

    session_start();

    $_SESSION["nombre"] = $nomUsu;

    header("Location: bienvenido.php");

  }else{

    header("Location: inicio.php?error=notOk");

  }


}else{



} ?>
