<?php
/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Cliente.php';

class LoginclienController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Usuario
        $this->model = new Cliente();
    }
        
    public function Index(){
        //llama todas las partes de la vista login
        require_once 'view/include/cabecera_cliente.php';
        require_once 'view/login.1.php';
        require_once 'view/include/pie.php';
    }

    public function Crud(){
        $cliente = new Cliente();
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_cliente.php';
        require_once 'view/registrar_cliente.php';
        require_once 'view/include/pie.php';
    }
    ////////
    public function Crudd(){
        $cliente = new Cliente();
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_cliente.php';
        require_once 'view/registrar_cliente_afuera.php';
        require_once 'view/include/pie.php';
    }
////////////////////////
    public function Entrar(){
        $cliente = new Cliente();
        
        //captura todos los datos
        $email = $_REQUEST['txtEmail'];
        $clave = $_REQUEST['txtContrasena'];

        //consultar los datos
        $cliente = $this->model->entrar($email, $clave);

        //condicionar el inicio de sesión
        if ($cliente != null) {
            #tomar los valores es variables de sesión
            session_start();
            $_SESSION["id"] = $cliente->idcliente;
            $_SESSION["nombre"] = $cliente->nombre;
            $_SESSION["apellido"] = $cliente->apellido;
            $_SESSION["email"] = $cliente->email;
            # entrar
            header('Location: index.php?c=Principalcliente&a=Entrar');
        } else {
            # enviar al login
            header('Location: index.php?c=Loginclien&a=Index');
        }   
        
    }
    
}