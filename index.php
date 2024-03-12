<?php

(isset($_GET['a'])) ? $getaccion=$_GET['a'] :$getaccion='';

require_once "controllers/cliente.php";
$cliente = new ClienteControllers;

// Guardar
if ($getaccion=="guardar"){
	$cliente->Guardar();	   
}else{
	$cliente->Index();    	
}

?>