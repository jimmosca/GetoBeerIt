<?php
require "arriba.php";
inicioPag("Producto", "producto.css");
require "navBar.php";

$query = "SELECT productos.nombre as 'producto', marcas.nombre AS 'marca', tipo_cerveza.nombre AS 'tipo', pais AS 'pais', graduacion AS 'graduacion', productos.imagen as 'imagen', usuarios.nombre as 'usuario', opiniones.texto as 'opinion', opiniones.estrellas as 'estrellas' FROM productos
JOIN marcas ON marcas.id_marca = productos.id_marca 
JOIN tipo_cerveza ON tipo_cerveza.id_cerveza = productos.id_tipo 
JOIN opiniones ON opiniones.id_producto = productos.id_producto 
JOIN usuarios ON usuarios.id_usuario = opiniones.id_usuario";

?>
<br>
<script src="script.js" charset="utf-8"></script>
<div class="container mt-5 p-5" id="algo">
    <div class="col-12">
        <div class="row">

            <div class="col-5" id="imagen">
                <?php
                $result = $conn->query($query);

                if (isset($result) && $result) {

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();

                        echo "<img src='imagenes/" . $row["imagen"], "'"." id='cerve'>";
                    } else {
                        echo "0 results";
                    }
                } else {
                    echo "Algo va mal";
                }
                ?>
            </div>
            <div class="col-7" id="descripcion">
                <div class="row">
                    <div class="col-12 mt-4" id="nombre">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-end" id="nombre1">
                                <h6> Nombre:</h6>
                            </div>
                            <div class="col-9" id="nombre2">
                                <?php
                                $result = $conn->query($query);

                                if (isset($result) && $result) {

                                    if ($result->num_rows > 0) {

                                        $row = $result->fetch_assoc();

                                        echo "<h5>" . $row["producto"], "</h5>";
                                    } else {
                                        echo "0 results";
                                    }
                                } else {
                                    echo "Algo va mal";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4" id="desc">
                        <div class="col-12" id="desc1">
                            <h6>Descripción:</h6>
                        </div>
                        <div class="col-12" id="desc2">
                            <?php



                            $result = $conn->query($query);

                            if (isset($result) && $result) { // Si pasa por este if, la query está está bien y se obtiene resultado

                                if ($result->num_rows > 0) { // Aunque la query esté bien puede no obtenerse resultado (tabla vacía). Comprobamos antes de recorrer


                                    $row = $result->fetch_assoc();

                                    echo "<table align=start border=1>";
                                    echo "<tr>";
                                    echo "<td> Marca </td>";
                                    echo "<td>" . $row["marca"], "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td> Tipo </td>";
                                    echo "<td>" . $row["tipo"], "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td> País </td>";
                                    echo "<td>" . $row["pais"], "</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td> Graduación </td>";
                                    echo "<td>" . $row["graduacion"], "</td>";
                                    echo "</tr>";
                                    echo "</table>";
                                } else {
                                    echo "0 results";
                                }
                            } else {
                                echo "Algo va mal";
                            }


                            ?>

                        </div>
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-center" id="desc1">
                        <input type="number" name="cantidad" min="1" id="cantidad" class="mr-2">
                        <button type="button" class="btn btn-primary">Añadir al carrito</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12" id="comentario">
        <div class="col-12" id="comentario1">
            <h6>Comentarios</h6>
        </div>
        <div class="col-12" id="comentario2">
            <?php

            echo "<table align=start border=1>";
            echo "<tr>";
            echo "  <th> Usuario </th>";
            echo "  <th> Opinión </th>";
            echo "  <th> Estrellas </th>";
            echo "</tr>";

            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["usuario"], "</td>";
                    echo "<td>" . $row["opinion"], "</td>";
                    echo "<td>" . $row["estrellas"], "</td>" . PHP_EOL;
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            echo "</table>";

            $conn->close(); // cierre de conexión con la BBDD
            ?>

        </div>

    </div>

</div>

<?php
require "abajo.php";
?>