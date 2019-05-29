<?php
//********Conexión con la base de datos***********

function conexionBD(){
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cervezas_bd";
$conn = new mysqli($servername, $user,$password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}else
echo "Conexión con BBDD correcta <br>" ;

if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}
if (isset ($_POST["formulario"])) {
  
    $where="";
    switch($_POST["formulario"]){
        case 'formulario1':
            if(isset($_POST['submit'])){
                echo $_POST['paises'];
            $where= "where pais = '".$_POST['paises']."'";
            }
            break;
        case 'formulario2':
            if(isset($_POST['submit'])){
                echo $_POST['tipo'];

                if ($_POST['tipo'] == "Ale" ) {
                    $where= "where tipo_cerveza.nombre = 'Ale'";
                }
                if ($_POST['tipo'] == "Pale" ) {
                    $where= "where tipo_cerveza.nombre = 'Pale'";
                }
                if ($_POST['tipo'] == "Lambic" ) {
                    $where= "where tipo_cerveza.nombre = 'Lambic'";
                }
                if ($_POST['tipo'] == "Lager" ) {
                    $where= "where tipo_cerveza.nombre = 'Lager'";
                }
          
            }
            break;
         case 'formulario3':
            if(isset($_POST['submit'])){
                echo $_POST['radio'];
                if ($_POST['radio'] >= 1 && $_POST['radio'] <= 5 ) {
                    $where= "where precio BETWEEN 1 AND 5";
                }
                if ($_POST['radio'] >= 5 && $_POST['radio'] <= 10 ) {
                    $where= "where precio BETWEEN 5 AND 10";
                }
                if ($_POST['radio'] >= 10 && $_POST['radio'] <= 15 ) {
                    $where= "where precio BETWEEN 10 AND 15";
                }
            
            }
                break;

        case 'formulario4':
            if(isset($_POST['submit'])){
                echo $_POST['botle'];

                if ($_POST['botle'] == 330 ) {
                    $where= "where botella = 330";
                }
                if ($_POST['botle'] == 500 ) {
                    $where= "where botella = 500";
                }
                if ($_POST['botle'] == 660 ) {
                    $where= "where botella = 660";
                }
          
            }
                break;
    }
    if(isset($_POST['submit'])){
    $sql = "select tipo_cerveza.nombre as Tipo, productos.nombre, productos.precio, 
    productos.imagen, productos.pais, productos.botella from productos 
    JOIN tipo_cerveza on productos.id_tipo = tipo_cerveza.id_cerveza ".$where;
         $arraySql = array ();
     $result = $conn->query($sql);
                // ¿He tenido datos en mi consulta? este es el if 
                if ($result->num_rows > 0) {
                //Con el while hacemos el recorrido el fetch_assoc es para crear un asociativo
                while($row = $result->fetch_assoc()) {
                echo " Nombre: ".$row["nombre"]."<br>";
                echo " Imagen: ".$row["imagen"]."<br>";
                echo " Tipo: ".$row["Tipo"]."<br>";
                echo " Pais: ".$row["pais"]."<br>";
                echo " Botella: ".$row["botella"]."<br>";
                echo " Precio: ".$row["precio"]."<br>"."<br>"."<br>";
                // Por cada columna, escribimos el row["lacolumnaquesea"]
                }
                } else {
                echo "0 results";
                } 
            }
        }
}

