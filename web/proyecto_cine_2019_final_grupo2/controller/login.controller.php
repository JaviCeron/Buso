<?php
/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Usuario.php';

class LoginController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Usuario
        $this->model = new Usuario();
    }
        
    public function Index(){
        //llama todas las partes de la vista principal
        require_once 'view/include/cabecera_login.php';
        require_once 'view/login.php';
        require_once 'view/include/pie.php';
    }

    public function Entrar(){
        $usuario = new Usuario();
        
        //captura todos los datos
        $email = $_REQUEST['txtEmail'];
        $clave = $_REQUEST['txtContrasena'];

        //consultar los datos
        $usuario = $this->model->entrar($email, $clave);

        //condicionar el inicio de sesión
        if ($usuario != null) {
            #tomar los valores es variables de sesión
            session_start();
            $_SESSION["id"] = $usuario->idusuario;
            $_SESSION["nombre"] = $usuario->nombre;
            $_SESSION["apellido"] = $usuario->apellido;
            $_SESSION["email"] = $usuario->email;
            # entrar
            header('Location: index.php?c=Principal&a=Index');
        } else {
            # enviar al login
            header('Location: index.php?c=Login&a=Index');
        }   
        
    }
    
}