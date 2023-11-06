<?php
session_start();
// $conexion = $_SESSION['conexion'];


$resultado=mysqli_query($_SESSION['conexion'],"Show tables;");


if ($resultado) {
    echo "Lista de tablas en la base de datos:<br>";

    while ($fila = mysqli_fetch_array($resultado)) {
        echo $fila[0] . "<br>"; // Imprime el nombre de cada tabla
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
mysqli_free_result($resultado);

