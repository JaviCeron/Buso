<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Ruta.php';
require_once 'model/Terminal.php';

class RutaController{
    
    private $model;
    private $modelTerminal;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Alumno
        $this->model = new Ruta();
        $this->modelTerminal = new Terminal();
    }
    
    public function VerRutas(){
        $terminal = new Terminal();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $terminal = $this->modelTerminal->ObtenerTerminal($_REQUEST['id']);
        }
        //llama todas las partes de la vista
        require_once 'view/include/cabecera_cliente.php';
        require_once 'view/mostrar_rutas_terminal.php';
        require_once 'view/include/pie.php';
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
        require_once 'view/mostrar_ruta.php';
        require_once 'view/include/pie.php';
    }

    public function EliminarRuta(){
        $this->model->EliminarRuta($_REQUEST['id']);
        header('Location: index.php?c=Ruta&a=Consultar');
    }
    public function Crud(){
        $ruta = new Ruta();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $ruta = $this->model->ObtenerRuta($_REQUEST['id']);
        }
        
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/registrar_ruta.php';
        require_once 'view/include/pie.php';
    }
    
    public function Guardar(){
        $ruta = new Ruta();
        
        //captura todos los datos
        $ruta->idruta = $_REQUEST['txtIdruta'];
        $ruta->numero_ruta = $_REQUEST['txtnumeroRuta'];
        $ruta->nombre_bus = $_REQUEST['txtnombrebus'];
        $ruta->tarifa = $_REQUEST['txttarifa'];
        $ruta->idterminal = $_REQUEST['selidterminalorigen'];
        $ruta->terminal_destino = $_REQUEST['selidterminaldestino'];

        //si el id es mayor que cero Actualiza si no registra
        $ruta->idruta > 0 
            ? $this->model->ActualizarRuta($ruta)
            : $this->model->RegistrarRuta($ruta);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Ruta&a=Consultar');
    }
    
    public function CambiarEstado(){
        $this->model->CambiarEstadoHorario($_REQUEST['nuevo_estado'],$_REQUEST['id']);
        header('Location: index.php?c=Horario&a=Consultar');
    }
}