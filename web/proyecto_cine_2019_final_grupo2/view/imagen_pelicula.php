<!-- cuerpo de registrar_pelicula -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center gray-text"><i class="medium material-icons">movie</i> 
              Registrar Película
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Pelicula&a=ActualizarImagen" method="post" enctype="multipart/form-data">
                <div class="row">

                <input type="hidden" name="txtIdpelicula" value="<?php echo $pelicula->idpelicula; ?>" />

                <input type="hidden" name="txtNombreImagen" value="<?php echo $pelicula->imagen; ?>" />

                  <div class="file-field input-field col s12">
                    <div class="btn grey">
                      <span>Imagen</span>
                      <input type="file" name="txtImagen" accept=".jpg">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Subir imagen" required>
                    </div>
                  </div>                 
                  
                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn grey"><i class="material-icons right">send</i>Guardar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>
