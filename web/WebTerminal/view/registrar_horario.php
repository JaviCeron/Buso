<?php 
  require_once 'model/Ruta.php';
  $ruta= new Ruta();
?>

<!-- cuerpo de registrar_usuario -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center  grey-text text-darken-3"><i class="medium material-icons">query_builder</i> 
              <!--si el atributo Alumno->id es diferente de nulo muestra el nombre-->
         Registrar horario
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Horario&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdhorario" value="<?php echo $horario->idhorario; ?>" />

                  <div class="input-field col s6">
                    <input id="txthora_salida" type="text" class="validate" name="txthora_salida" value="<?php echo $horario->hora_salida; ?>"  required>
                    <label for="txthora_salida">Hora de salida</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txthora_meta" type="text" class="validate" name="txthora_meta" value="<?php echo $horario->hora_meta; ?>"  required>
                    <label for="txthora_meta">Hora meta</label>
                  </div>

                  <div class="input-field col s6">
                    <select name="selidruta" id="selidruta">
                      <?php 
                        if ($horario->idruta != null) {

                          $objPelicula = $ruta->ObtenerRuta($horario->idruta);
                          
                          echo '<option value="'.$objPelicula->idruta.'" selected>'.$objPelicula->numero_ruta.'</option>';

                        }
                      ?>
                      <?php foreach($ruta->ListarRuta() as $r): ?>
                          <option value="<?php echo $r->idruta; ?>"><?php echo $r->numero_ruta; ?></option>
                      <?php endforeach; ?>
                      </select>
                    <label for="selidruta">Seleccionar ruta</label>
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
