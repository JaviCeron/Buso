<?php
  //destruir sesión
  session_start();
  session_destroy();
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
  <nav class="#00c853 green accent-4" role="navigation">
  <i class="center" >Buso</i></a>
  <ul class="right hide-on-med-and-down">
        <li><a href="index.php" title="Inicio"><i class="material-icons">home</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav green darken-3">
       
        <li><a class="white-text" href="index.php" title="Inicio"><i class="material-icons white-text">home</i> Inicio</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>