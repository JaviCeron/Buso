<?php
  //validar la sesión
  @session_start();
  if(!isset($_SESSION["id"])){
    header('Location: index.php?c=Login&a=Index');
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Conexiones a BD</title>

  <!-- CSS  -->
  <link href="materializecss/css/icon.css" rel="stylesheet">
  <link href="materializecss/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materializecss/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

<!-- opciones del menú usuario-->
<ul id="usuario" class="dropdown-content">
  <li><a href="?c=Usuario&a=ActualizarClave">Cambiar Clave</a></li>
  <li class="divider"></li>
  <li><a href="index.php" title="<?php echo $_SESSION["email"]; ?>">Salir</a></li>
</ul>

  <!-- opciones del menú registrar-->
  <ul id="registro" class="dropdown-content">
    <li><a href="?c=Sala&a=Crud">Salas</a></li>
    <li><a href="?c=Butaca&a=Crud">Butacas</a></li>
    <li class="divider"></li>
    <li><a href="?c=Pelicula&a=Crud">Películas</a></li>
    <li><a href="?c=Horario&a=Crud">Horarios</a></li>
    <li class="divider"></li>
    <li><a href="?c=Cliente&a=Crud">Clientes</a></li>
    <li class="divider"></li>
    <li><a href="?c=Usuario&a=Crud">Usuarios</a></li>
  </ul>
  
  <!-- opciones del menú consultar-->
  <ul id="consulta" class="dropdown-content">
    <li><a href="?c=Sala&a=Consultar">Salas</a></li>
    <li><a href="?c=Butaca&a=Consultar">Butacas</a></li>
    <li class="divider"></li>
    <li><a href="?c=Pelicula&a=Consultar">Películas</a></li>
    <li><a href="?c=Horario&a=Consultar">Horarios</a></li>
    <li class="divider"></li>
    <li><a href="?c=Cliente&a=Consultar">Clientes</a></li>
    <li class="divider"></li>
    <li><a href="?c=Usuario&a=Consultar">Usuarios</a></li>
  </ul>


  <!-- para el nav-bar-->  
<!-- opciones del menú usuario-->
<ul id="usuario-m" class="dropdown-content">
  <li><a href="?c=Usuario&a=ActualizarClave">Cambiar Clave</a></li>
  <li class="divider"></li>
  <li><a href="index.php" title="<?php echo $_SESSION["email"]; ?>">Salir</a></li>
</ul>
  <!-- opciones del menú registrar-->
  <ul id="registro-m" class="dropdown-content">
    <li><a href="?c=Sala&a=Crud">Salas</a></li>
    <li><a href="?c=Butaca&a=Crud">Butacas</a></li>
    <li class="divider"></li>
    <li><a href="?c=Pelicula&a=Crud">Películas</a></li>
    <li><a href="?c=Horario&a=Crud">Horarios</a></li>
    <li class="divider"></li>
    <li><a href="?c=Cliente&a=Crud">Clientes</a></li>
    <li class="divider"></li>
    <li><a href="?c=Usuario&a=Crud">Usuarios</a></li>
  </ul>
  
  <!-- opciones del menú consultar-->
  <ul id="consulta-m" class="dropdown-content">
    <li><a href="?c=Sala&a=Consultar">Salas</a></li>
    <li><a href="?c=Butaca&a=Consultar">Butacas</a></li>
    <li class="divider"></li>
    <li><a href="?c=Pelicula&a=Consultar">Películas</a></li>
    <li><a href="?c=Horario&a=Consultar">Horarios</a></li>
    <li class="divider"></li>
    <li><a href="?c=Cliente&a=Consultar">Clientes</a></li>
    <li class="divider"></li>
    <li><a href="?c=Usuario&a=Consultar">Usuarios</a></li>
  </ul>
  <nav class="pink darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="?c=Principal&a=Index" class="brand-logo" title="Cine para todos...">
        <i class="large material-icons">movie_filter ondemand_video</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?c=Principal&a=Index" title="Inicio"><i class="material-icons">home</i></a></li>
        <!-- para el menú registro -->
        <li><a class="dropdown-trigger" href="#!" data-target="registro">Registrar<i class="material-icons right">arrow_drop_down</i></a></li>
        <!-- para el menú cosulta -->
        <li><a class="dropdown-trigger" href="#!" data-target="consulta">Consultar<i class="material-icons right">arrow_drop_down</i></a></li>
       
        <li><a href="?c=Boletousuario&a=Busqueda" title="Imprimir Boletos"><i class="material-icons white-text">printinsert_drive_file</i></a></li>
       
        <li><a class="dropdown-trigger" href="#!" data-target="usuario"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
        
      </ul>

      <ul id="nav-mobile" class="sidenav grey darken-2">
        <li><a href="?c=Principal&a=Index" title="Inicio"><i class="material-icons white-text">home</i></a></li>
        <!-- para el menú registro -->
        <li><a class="dropdown-trigger white-text" href="#!" data-target="registro-m">Registrar<i class="material-icons right white-text">arrow_drop_down</i></a></li>
        <!-- para el menú cosulta -->
        <li><a class="dropdown-trigger white-text" href="#!" data-target="consulta-m">Consultar<i class="material-icons right white-text">arrow_drop_down</i></a></li>
       
        <li><a href="?c=Boletousuario&a=Busqueda" title="Imprimir Boletos" class="white-text"><i class="material-icons white-text">printinsert_drive_file</i>Imprimir Boletos</a></li>
       
        <li><a class="dropdown-trigger white-text" href="#!" data-target="usuario-m"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>