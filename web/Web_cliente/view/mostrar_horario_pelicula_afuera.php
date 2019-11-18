  <div class="row grey darken-3 white-text">
    <div class="section">

      <!-- Datos de la película -->
      <div class="container">
                <table>
                  <tbody>
                      <tr>
                          <td class="center" rowspan="5"><img  width="200px" height="200px" class="materialboxed" src="view/include/peliculas/<?php echo $pelicula->imagen; ?>" alt="Imagen"></td>
                          <td colspan="3"><h3><?php echo $pelicula->nombre; ?></h3></td>  
                      </tr>
                      <tr>
                          <td></td>
                          <td><b>Duración:</b> <?php echo $pelicula->duracion; ?> | <b>Tipo:</b> <?php echo $pelicula->tipo; ?> | <b>Clasificación:</b> <?php echo $pelicula->clasificacion; ?></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><b>Director:</b> <?php echo $pelicula->director; ?></td>  
                      </tr>
                      <tr>
                          <td></td>
                          <td><b>Reparto:</b> <?php echo $pelicula->reparto; ?></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><?php echo $pelicula->descripcion; ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>

      
    <br><br><br>
  </div>