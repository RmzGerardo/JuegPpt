<?php

class Update3{
    function setUpdate3(){
        // $id = $_GET["id"];
        $datos1 = file_get_contents('php://input');
        $datos = json_decode($datos1);

        	$sql = "UPDATE jugadores SET TIRO1='$datos->piedraBtn', ESTATUS='CON TIRO 1' WHERE ESTATUS = 'CON JUGADOR2' LIMIT 1";
        	echo "update 1";
        
        
        processData("Datos Actualizados",$sql);
        //updateData($id, $objetoPHP);
    
    }

}



?>