<?php 
  require_once 'model/Sala.php';
  $model = new Sala();
 ?>
<!-- cuerpo de registrar_usuario -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center  grey-text text-darken-3"><i class="medium material-icons">airline_seat_recline_extra</i> 
              <!--si el atributo Alumno->id es diferente de nulo muestra el nombre-->
              <?php echo $butaca->idbutaca != null ? 'Editar '.$butaca->nombre : 'Registrar Butaca'; ?>
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Butaca&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdbutaca" value="<?php echo $butaca->idbutaca; ?>" />

                  <div class="input-field col s12">
                    <input id="txtNombre" type="text" class="validate" name="txtNombre" value="<?php echo $butaca->nombre; ?>"  required>
                    <label for="txtNombre">Nombre</label>
                  </div>


                    <div class="input-field col s12">
                      <select name="selSala" id="selSala">
                        <?php 
                          if ($butaca->idsala != null) {
                            # mostrar el id y sala al inicio

                            $objSala = $model->ObtenerSala($butaca->idsala);
                            
                            echo '<option value="'.$objSala->idsala.'" selected>'.$objSala->nombre.'</option>';

                          }
                        ?>
                        <?php foreach($model->ListarSalaActivas() as $r): ?>
                            <option value="<?php echo $r->idsala; ?>"><?php echo $r->nombre; ?></option>
                        <?php endforeach; ?>
                        </select>
                      <label for="selSala">Sala</label>
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
