<?php
 //validar la sesión
 session_start();
  if(!isset($_SESSION["id"])){
    header('Location: index.php?c=Loginclien&a=Entrar');
  } 
?>
<!DOCTYPE html>
<html lang="es">
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Bienvenid@</title>

  <!-- CSS  -->
  <link href="materializecss/css/icon.css" rel="stylesheet">
  <link href="materializecss/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materializecss/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <!-- opciones del menú registrar-->
  

  <nav class="pink darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="?c=Principalcliente&a=Entrar" class="brand-logo" title="Cine para todos...">
        <i class="large material-icons">movie_filter ondemand_video</i></a>
      <ul class="right hide-on-med-and-down">
      
        <!-- para el menú registro -->
       
        <li><a href="?c=Boletousuario&a=MostrarPeliculas" title="Hacer boleto" class="white-text"><i class="material-icons white-text">insert_drive_file</i></a></li>
        <li><a href="index.php" title="">Salir</a></li>
        
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
