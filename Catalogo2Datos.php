<?php
//********Conexión con la base de datos***********
require "conexionBBDD.php";
//Guardar en variable los datos recibidos de script /Catalogo
$parametres = file_get_contents("php://input");
//$parametres = '{"pais":"España","precio":"1-5","botella":"330"}';


$where="";
if (isset($parametres)) {
    $mensajeRecibido = json_decode($parametres,true);
    $count = 0;

    foreach ($mensajeRecibido as $key => $value) {
        if (  $count == 0) {
            if ($value == "Selecciona") {
                $value = ""; 
            }else{
            $where ="where ".$key." = '".$value."'" ;
            }
        }
        else {
            if($key == "precio") {
               
                $pricevalue =   explode( '-', $value );

                $where.= " and ".$key." between ".$pricevalue[0]." and ".$pricevalue[1] ;
            } else {
                $where.=" and ".$key." = '".$value."'" ;
            }      
        }
        
        $count ++;
    }
}
  
    $arrMensaje = array (); // Este array es el codificaremos como JSON tanto si hay resultado como si hay error
    
    $query = "select id_producto as id , tipo_cerveza.nombre as tipo , productos.nombre, productos.precio, 
    productos.imagen, productos.pais, productos.botella from productos 
    JOIN tipo_cerveza on productos.id_tipo = tipo_cerveza.id_cerveza ".$where;
    
    $result = $conn->query ( $query );
    
    if (isset ( $result ) && $result) { // Si pasa por este if, la query está está bien y se obtiene resultado
        
        if ($result->num_rows > 0) { // Aunque la query esté bien puede no obtenerse resultado (tabla vacía). Comprobamos antes de recorrer
            
            $arrPrincipal = array ();
            
            while ( $row = $result->fetch_assoc () ) {
                $arrPrincipal [] = $row;
            }
            
            // Añadimos al $arrMensaje el array de jugadores y añadimos un campo para indicar que todo ha ido OK
            $arrMensaje ["estado"] = "ok";
            $arrMensaje ["productos"] = $arrPrincipal;
        } else {

            $arrMensaje ["estado"] = "ok";
            $arrMensaje ["productos"] = [ ]; // Array vacío si no hay resultados
        }
    } else {
        
        $arrMensaje ["estado"] = "error";
        $arrMensaje ["mensaje"] = "SE HA PRODUCIDO UN ERROR AL ACCEDER A LA BASE DE DATOS";
        $arrMensaje ["error"] = $conn->error;
        $arrMensaje ["query"] = $query;
    }
    
    $mensajeJSON = json_encode ( $arrMensaje, JSON_PRETTY_PRINT );
    
    // echo "<pre>"; // Descomentar si se quiere ver resultado "bonito" en navegador. Solo para pruebas
    echo $mensajeJSON;
    // echo "</pre>"; // Descomentar si se quiere ver resultado "bonito" en navegador
    
    $conn->close ();

?>  

