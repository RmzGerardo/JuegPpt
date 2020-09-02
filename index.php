<?php
require "read.php";
require "update.php";


$metodo = $_SERVER['REQUEST_METHOD'];




if($metodo == 'GET'){
    $read = new Read();
    $read->getRead();
}
// else if($metodo == 'PUT'){
//     $update = new Update();
//     $update->setUpdate();
// }
	
?>