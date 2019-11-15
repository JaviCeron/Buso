<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Terminal.php';

class TerminalController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Alumno
        $this->model = new Terminal();
    }
    
    public function Index(){
        //llama todas las partes de la vista principal
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/principal_usuario.php';
        require_once 'view/include/pie.php';
    }
    
    public function Consultar(){
        //llama todas las partes de la vista principal
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/mostrar_terminal.php';
        require_once 'view/include/pie.php';
    }

    public function Crud(){
        $terminal = new Terminal();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $terminal = $this->model->ObtenerTerminal($_REQUEST['id']);
        }
        
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/registrar_terminal.php';
        require_once 'view/include/pie.php';
    }
    
    public function Guardar(){
        $terminal = new Terminal();
        
        //captura todos los datos
        $terminal->idterminal = $_REQUEST['txtIdterminal'];
        $terminal->nombre_terminal = $_REQUEST['txtNombreterminal'];
       
        //si el id es mayor que cero Actualiza si no registra
        $terminal->idterminal > 0 
            ? $this->model->ActualizarTerminal($terminal)
            : $this->model->RegistrarTerminal($terminal);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Terminal&a=Consultar');
    }
    
   
    
    public function Update(){
        $terminal = new Terminal();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $terminal = $this->model->ObtenerTerminal($_REQUEST['id']);
        }
        
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/actualizar_usuario.php';
        require_once 'view/include/pie.php';
    }

    
    
    public function ActualizarTerminal(){
        $terminal = new Terminal();
        
        
        //captura todos los datos
        $terminal->idterminal = $_REQUEST['txtIdterminal'];
        $terminal->nombre_terminal = $_REQUEST['txtNombreterminal'];
    
        //Actualizar
        $this->model->ActualizarTerminal($terminal);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Terminal&a=Consultar');
    }
}