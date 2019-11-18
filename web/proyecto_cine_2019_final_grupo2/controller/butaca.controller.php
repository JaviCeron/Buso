<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Butaca.php';

class ButacaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Alumno
        $this->model = new Butaca();
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
        require_once 'view/mostrar_butaca.php';
        require_once 'view/include/pie.php';
    }

    public function Crud(){
        $butaca = new Butaca();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $butaca = $this->model->ObtenerButaca($_REQUEST['id']);
        }
        
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/registrar_butaca.php';
        require_once 'view/include/pie.php';
    }
    
    public function Guardar(){
        $butaca = new Butaca();
        
        //captura todos los datos
        $butaca->idbutaca = $_REQUEST['txtIdbutaca'];
        $butaca->nombre = $_REQUEST['txtNombre'];
        $butaca->idsala = $_REQUEST['selSala'];

        //si el id es mayor que cero Actualiza si no registra
        $butaca->idbutaca > 0 
            ? $this->model->ActualizarButaca($butaca)
            : $this->model->RegistrarButaca($butaca);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Butaca&a=Consultar');
    }
    
    public function CambiarEstado(){
        $this->model->CambiarEstadoButaca($_REQUEST['nuevo_estado'],$_REQUEST['id']);
        header('Location: index.php?c=Butaca&a=Consultar');
    }
}