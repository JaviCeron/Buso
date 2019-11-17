<?php 
  require_once 'model/Terminal.php';
  $terminal = new Terminal();

 ?>
<!-- cuerpo de registrar_usuario -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center  grey-text text-darken-3"><i class="medium material-icons">event</i> 
              <!--si el atributo Alumno->id es diferente de nulo muestra el nombre-->
         Registrar Ruta
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Ruta&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdruta" value="<?php echo $ruta->idruta; ?>" />

                  <div class="input-field col s6">
                    <input id="txtnumeroRuta" type="text" class="validate" name="txtnumeroRuta" value="<?php echo $ruta->numero_ruta; ?>"  required>
                    <label for="txtnumeroRuta">Numero de la ruta</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txtnombrebus" type="text" class="validate" name="txtnombrebus" value="<?php echo $ruta->nombre_bus; ?>"  required>
                    <label for="txtnombrebus">Nombre del bus</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txttarifa" type="text" class="validate" name="txttarifa" value="<?php echo $ruta->tarifa; ?>"  required>
                    <label for="txttarifa">Tarifa</label>
                  </div>


                    <div class="input-field col s6">
                      <select name="selidterminalorigen" id="selidterminalorigen">
                        <?php 
                          if ($ruta->idterminal != null) {
                            # mostrar el id y sala al inicio

                            $objSala = $terminal->ObtenerTerminal($ruta->idterminal);
                            
                            echo '<option value="'.$objSala->idterminal.'" selected>'.$objSala->nombre_terminal.'</option>';

                          }
                        ?>
                         <?php foreach($terminal->ListarTerminal() as $r): ?>
                          <option value="<?php echo $r->idterminal; ?>"><?php echo $r->nombre_terminal; ?></option>
                      <?php endforeach; ?>
                      
                        </select>
                      <label for="selidterminalorigen ">Terminal origen</label>
                    </div>

                    <div class="input-field col s6">
                    <input id="selidterminaldestino" type="text" class="validate" name="selidterminaldestino" value="<?php echo $ruta->terminal_destino; ?>"  required>
                    <label for="selidterminaldestino">Lugar de destino</label>
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
