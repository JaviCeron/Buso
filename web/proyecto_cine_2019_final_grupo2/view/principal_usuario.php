<!-- cuerpo del index -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="center"><i class="large material-icons grey-text text-darken-2">movie_filter</i></div>
      <h3 class="header center grey-text text-darken-2">Bienvenid@</h3>
      <h3 class="header center grey-text text-darken-2"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h3>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      <div class="col s12 m3">
          <div class="icon-block hoverable">
                <a href="?c=Boleto&a=Busqueda" class="pink-text text-darken-4"><h2 class="center"><i class="material-icons">printinsert_drive_file</i></h2>
            <h5 class="center">Imprimir Boletos</h5></a>

          </div>
        </div>
        
        <div class="col s12 m3">
          <div class="icon-block hoverable">
            <a href="?c=Pelicula&a=Crud" class="pink-text text-darken-4"><h2 class="center"><i class="material-icons">movie</i></h2>
            <h5 class="center">Registrar Película</h5></a>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block hoverable">
                 <a href="?c=Horario&a=Crud" class="pink-text text-darken-4"><h2 class="center"><i class="material-icons">date_rangelocal_movies</i></h2>
            <h5 class="center">Registrar Horarios</h5></a>

          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block hoverable">
                <a href="?c=Venta&a=Busqueda" class="pink-text text-darken-4"><h2 class="center"><i class="material-icons">printattach_money</i></h2>
            <h5 class="center">Imprimir Reportes</h5></a>

          </div>
        </div>

      </div>

    </div>
    <br><br>
  </div>