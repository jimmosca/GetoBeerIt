<?php

$sql = "INSERT INTO usuarios (id_usuario, contrasena, direccion, telefono, email, nombre, apellido)
        VALUES ('$_POST[usr]', '$_POST[pwd]', '$_POST[direccion]' , '$_POST[telefono]' , '$_POST[email]' , '$_POST[nombre]' , '$_POST[apellido]')";
$result = $conn->query($sql);

if ($result === TRUE) {
  $_SESSION["nombre"] = $_POST["usr"];
  header("Location: index.php");
} else {
header("Location: reg_index.php?error=usrExists");
}
$conn->close();
 ?>
