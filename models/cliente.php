<?php
require_once 'models/bd.php';

class Cliente
{

    public $nombre;
    public $apellido;  
    public $email;


    public function Guardar(ClienteModelo $data){

    	$bd = new BD();

    	$GETnombre = $data->nombre;
    	$GETapellido = $data->apellido;
    	$GETemail = $data->email;

    	$consulta = "INSERT INTO cliente (nombre, apellido, email) VALUES ('$GETnombre', '$GETapellido', '$GETemail')";

    	$resultadoguardar = $bd->consulta($consulta);

    	return 9;

	}

}