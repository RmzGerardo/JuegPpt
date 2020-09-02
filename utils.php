<?php

function getData(){

    require "conexion.php";

    $sql = "SELECT ID, ESTATUS FROM jugadores WHERE ESTATUS = 'NUEVO' LIMIT 1";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        $datosTmp = array();
        while($row = $resultado->fetch_assoc()){
            array_push($datosTmp, $row);
        }

        $respuesta = createService($datosTmp);
        print_r($respuesta);
    }
}
// function getData2(){

//     require "conexion.php";

//     $sql = "SELECT ID, ESTATUS FROM jugadores WHERE ESTATUS = 'CON JUGADOR1' LIMIT 1";
//     $resultado = $conexion->query($sql);

//     if($resultado->num_rows > 0){
//         $datosTmp = array();
//         while($row = $resultado->fetch_assoc()){
//             array_push($datosTmp, $row);
//         }

//         $respuesta = createService($datosTmp);
//         print_r($respuesta);
//     }
// }



function processData($mensaje, $sql){
    require "conexion.php";
    if($conexion->query($sql) === TRUE){
        echo $mensaje;
    }
    else{
        echo "No se pudo procesar su peticion" . $conexion->error;
    }

}



function createService($datos){
    header('Content-type: application/json'); // genera el encabezado mime type para json   
    $ObjetoJson = json_encode($datos);
    return $ObjetoJson;
}
?>