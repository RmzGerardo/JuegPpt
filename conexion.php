<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "juego";

    $conexion = new mysqli($servername, $username, $password, $dbname);

    if($conexion->connect_error){
        die("Error de conexion a la BD: " . $conexion->connect_error);
    }
?>