<?php

require_once 'model/Horario.php';

class PrincipalclienteController{
    
    private $modelHorario;


    public function __CONSTRUCT(){
        $this->modelHorario = new Horario();
    }
    
       
    public function Index(){
        //llama todas las partes de la vista principal
        require_once 'view/include/cabecera_cliente.php';
        require_once 'view/mostrar_cartelera_afuera.php';
        require_once 'view/include/pie.php';
    }

       
    public function Entrar(){
        //llama todas las partes de la vista principal
        require_once 'view/include/cabecera_clientee.php';
        require_once 'view/mostrar_cartelera.php';
        require_once 'view/include/pie.php';
    }
    
}