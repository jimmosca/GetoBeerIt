

<nav class="navbar navbar-expand-sm navbar-dark navbar-center fixed-top mx-background-top-linear" id ="navbar">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">GetoBeerlt</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ml-auto">

        <?php
        if (isset($_GET["sesion"]) && $_GET["sesion"]=="cerrada") {
          session_unset();
        }
         if (isset($_SESSION["nombre"])) {
          echo "<li class='nav-item'><a class='nav-link' href='cerrarSesion.php'>Cerrar sesion</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='CarritoCompra.php'>Carrito de la Compra</a></li>";
        }else{
          echo "<li class='nav-item'><a class='nav-link' href='Catalogo.php'>Productos</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='login.php'>Inicio Sesion</a></li>";
          echo "<li class='nav-item'><a class='nav-link' href='reg_index.php'>Registro</a></li>";
          
        } ?>


      </ul>
    </div>
  </div>
</nav>
