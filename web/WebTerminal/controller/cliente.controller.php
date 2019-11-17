<?php

/*
    Lo que el controlador hace es interactuar con el usuario
    - Este manda peticiones al servidor 
    - Manda la información al modelo
    - Carga las vistas como respuesta al usuario
*/
require_once 'model/Cliente.php';

class ClienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa el modelo Alumno
        $this->model = new Cliente();
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
        require_once 'view/mostrar_cliente.php';
        require_once 'view/include/pie.php';
    }

    public function Crud(){
        $cliente = new Cliente();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $cliente = $this->model->Obtenercliente($_REQUEST['id']);
        }
        
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/registrar_cliente.php';
        require_once 'view/include/pie.php';
    }
    
    public function Guardar(){
        $cliente = new Cliente();
        
        //captura todos los datos
        $cliente->idcliente = $_REQUEST['txtIdcliente'];
        $cliente->nombre = $_REQUEST['txtNombre'];
        $cliente->apellido = $_REQUEST['txtApellido'];
        $cliente->email = $_REQUEST['txtEmail'];
        $cliente->clave = $_REQUEST['txtClave'];
       
     
        //si el id es mayor que cero Actualiza si no registra
        $cliente->idcliente > 0 
            ? $this->model->ActualizarCliente($cliente)
            : $this->model->RegistrarCliente($cliente);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Cliente&a=Consultar');
    }

    //////////////////////////////////////////////////////////////////////

    public function Guardarcli(){
        $cliente = new Cliente();
        
        //captura todos los datos
        $cliente->idcliente = $_REQUEST['txtidcliente'];
        $cliente->nombre = $_REQUEST['txtNombre'];
        $cliente->apellido = $_REQUEST['txtApellido'];
        $cliente->email = $_REQUEST['txtEmail'];
        $cliente->clave = $_REQUEST['txtClave'];
        $cliente->identificacion = $_REQUEST['txtidentificacion'];
        $cliente->tarjeta = $_REQUEST['txttarjeta'];
        $cliente->fechavencimientotarjeta = $_REQUEST['txttarjetavencimieto'];
     
        //si el id es mayor que cero Actualiza si no registra
        $cliente->idcliente > 0 
           ? $this->model->ActualizarCliente($cliente)
           : $this->model->RegistrarCliente($cliente);
        
        //redirecciona a la vista index
        header('Location: index.php?c=Loginclien&a=Index');
        
    }



    public function ActualizarCliente(){
    $cliente = new Cliente();
    
    //captura todos los datos
    $cliente->idcliente = $_REQUEST['txtIdcliente'];
    $cliente->nombre = $_REQUEST['txtNombre'];
    $cliente->apellido = $_REQUEST['txtApellido'];
    $cliente->email = $_REQUEST['txtEmail'];

    //Actualizar
    $this->model->ActualizarCliente($cliente);
    
    //redirecciona a la vista index
    header('Location: index.php?c=Cliente&a=Consultar');
}
    public function Update(){
        $cliente = new Cliente();
        
        if(isset($_REQUEST['id'])){
            //si tiene el parámetro asignado ejecutamos el método
            $cliente = $this->model->ObtenerCliente($_REQUEST['id']);
        }
        
        //
        //llama todas las partes de la vista guardar
        require_once 'view/include/cabecera_usuario.php';
        require_once 'view/actualizar_cliente.php';
        require_once 'view/include/pie.php';
    }


  
}