

<div class='nav-container'>
  <div class='nav-img'>Commeme</div>
  <div class='nav-search'>Los</div>

  <div class='nav-login'>
    <form action="index.php" method="post">
      Nombre: <input type="text" name="nombre" required><br/>
      Password: <input type="password" name="contra" required><br/>
      <input type="submit">
    </form>
  </div>
  <div class='nav-cart'>Adrian</div>
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
</div>
