<?php
//********Conexión con la base de datos***********

function conexionBD2(){
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cervezas_bd";
$conn = new mysqli($servername, $user,$password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Error: " . $conn->connect_error);
}

if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}

$where="";
if (isset ($_POST["formulario"])) {
    
    switch($_POST["formulario"]){
        case 'formulario1':
            if(isset($_POST['submit'])){
            $where= "where pais = '".$_POST['paises']."'";
            }
            break;
        case 'formulario2':
            if(isset($_POST['submit'])){
                if(!empty($_POST['check_list'])){
                foreach($_POST['check_list'] as $selected){
                    $tipos= $tipos." and ".$selected;
                echo $selected."</br>";
                }
                }
                }
            break;
         case 'formulario3':
            if(isset($_POST['submit'])){
                echo $_POST['radio'];
            $where= "where precio = '".$_POST['radio']."'";
            }
                break;
        case 'formulario4':
            if(isset($_POST['submit'])){
                echo $_POST['botle'];
            $where= "where precio = '".$_POST['botle']."'";
            }
                break;
    }
}

    $sql = "select tipo_cerveza.nombre as Tipo, productos.nombre, productos.precio, 
    productos.imagen, productos.pais, productos.botella from productos 
    JOIN tipo_cerveza on productos.id_tipo = tipo_cerveza.id_cerveza ".$where;
   
    $arraySql = array ();
    $result = $conn->query($sql);
                // ¿He tenido datos en mi consulta? este es el if 
                if ($result->num_rows > 0) {
                //Con el while hacemos el recorrido el fetch_assoc es para crear un asociativo
                while($row = $result->fetch_assoc()) {
                    array_push($arraySql, $row);
                
                // Por cada columna, escribimos el row["lacolumnaquesea"]
                }
                } else {
                echo "0 results";
                } 
                
                $dibuja = json_encode($arraySql, JSON_PRETTY_PRINT);

                //echo "<pre>"
                echo $dibuja;
               // echo "</pre>";
            
        
}
conexionBD2();

