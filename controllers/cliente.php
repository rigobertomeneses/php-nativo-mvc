<?php
require_once 'models/cliente.php';

class ClienteControllers
{
	
	public function Index(){
		
        require_once 'views/cliente.php';       
       
    }

    public function Guardar(){

        $cliente = new ClienteModelo();
        $cliente->nombre = $_REQUEST['nombre'];
        $cliente->apellido = $_REQUEST['apellido'];
        $cliente->email = $_REQUEST['email'];


        $resultado = $cliente->Guardar($cliente);

        if ($resultado){
            header('Location: index.php?i=1');    
        }        

    }

}

?>