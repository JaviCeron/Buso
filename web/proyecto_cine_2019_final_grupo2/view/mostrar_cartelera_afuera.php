  <div class="row">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">movie</i> Películas en Cartelera </h2>
        </div>

            <!-- datos -->
            <div class="row">              
              <!-- carrusel -->
              <div class="carousel">
                <?php foreach($this->modelHorario->ListarPeliculasHorario() as $r): ?>
                  <a class="carousel-item hoverable" href="?c=Boletousuario&a=VerHorarioss&id=<?php echo $r->idpelicula; ?>" ><img  width="150px" height="200px" src="view/include/peliculas/<?php echo $r->imagen; ?>" alt="<?php echo $r->nombrepelicula; ?>" title="<?php echo $r->nombrepelicula; ?>"></a>                             
                <?php endforeach; ?>
              </div>
            </div>

      </div>

    </div>
    <br><br><br><br>
  </div>