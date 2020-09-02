<?php

class Update2{
    function setUpdate2(){
        // $id = $_GET["id"];
        $datos1 = file_get_contents('php://input');
        $datos = json_decode($datos1);

        if ("ESTATUS' == 'CON JUGADOR1'") {
        	$sql = "UPDATE jugadores SET JUGADOR2='$datos->nombreJ', ESTATUS='CON JUGADOR2' WHERE ESTATUS = 'CON JUGADOR1' LIMIT 1";
        	echo " update 2";
        }else{
        		$sql = "UPDATE jugadores SET JUGADOR1='$datos->nombreJ', ESTATUS='CON JUGADOR1' WHERE ESTATUS = 'NUEVO' LIMIT 1";
        	echo "update 1";
        }

        processData("Datos Actualizados",$sql);
        //updateData($id, $objetoPHP);
    
    }

}

?>