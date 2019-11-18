<?php 
  require_once 'model/Terminal.php';
  $model = new Terminal();
 ?>
<!-- cuerpo de registrar_usuario -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center  grey-text text-darken-3"><i class="medium material-icons">location_city</i> 
              <!--si el atributo Alumno->id es diferente de nulo muestra el nombre-->
              <?php echo $terminal->idterminal != null ? 'Editar '.$terminal->nombre_terminal : 'Registrar Terminal'; ?>
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Terminal&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdterminal" value="<?php echo $terminal->idterminal; ?>" />

                  <div class="input-field col s12">
                    <input id="txtNombreterminal" type="text" class="validate" name="txtNombreterminal" value="<?php echo $terminal->nombre_terminal; ?>"  required>
                    <label for="txtNombreterminal">Nombre de terminal</label>

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
    <br><br>
  </div>
