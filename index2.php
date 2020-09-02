<?php
require "read.php";
require "update2.php";


$metodo = $_SERVER['REQUEST_METHOD'];




if($metodo == 'GET2'){
    $read = new Read();
    $read->getRead();
}
else if($metodo == 'PUT2'){
	$update = new Update2();
    $update->setUpdate2();
}
	
?>