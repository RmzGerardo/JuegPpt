<?php

class Update{
    function setUpdate(){
        // $id = $_GET["id"];
        $datos1 = file_get_contents('php://input');
        $datos = json_decode($datos1);

        if ("ESTATUS' == 'NUEVO'") {
        	$sql = "UPDATE jugadores SET JUGADOR1='$datos->nombreJ', ESTATUS='CON JUGADOR1' WHERE ESTATUS = 'NUEVO' LIMIT 1";
        	echo "update 1";

        }else{
        	$sql = "UPDATE jugadores SET JUGADOR2='$datos->nombreJ', ESTATUS='JUGANDO' WHERE ESTATUS = 'CON JUGADOR1' LIMIT 1";
        	echo " update 2";
        
        }

        	
        
        
        processData("Datos Actualizados",$sql);
        //updateData($id, $objetoPHP);
    
    }

}



?>
	
