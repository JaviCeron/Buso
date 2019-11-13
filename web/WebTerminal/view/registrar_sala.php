<!-- cuerpo de registrar_sala -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-3"><i class="medium material-icons">airplay</i> 
              <!--si el atributo objeto->id es diferente de nulo muestra el nombre-->
              <?php echo $sala->idsala != null ? 'Editar '.$sala->nombre : 'Registrar Sala'; ?>
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Sala&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdsala" value="<?php echo $sala->idsala; ?>" />

                  <div class="input-field col s12">
                    <input id="txtNombre" type="text" class="validate" name="txtNombre" value="<?php echo $sala->nombre; ?>"  required>
                    <label for="txtNombre">Nombre</label>
                  </div>
                  <div class="input-field col s12">
</i>
                    <input id="txtTipo" type="text" class="validate" name="txtTipo" value="<?php echo $sala->tipo; ?>"  required>
                    <label for="txtTipo">Tipo de sala</label>
                  </div>

                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn grey darken-2"><i class="material-icons right">send</i>Guardar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br><br>
  </div>
