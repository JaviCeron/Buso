  <div class="row grey darken-3 white-text">

      <!-- Datos de la película -->
      <div class="container">
                <table>
                  <tbody>
                      <tr>
                          <td class="center" rowspan="3"><img  width="200px" height="200px" class="materialboxed" src="view/include/peliculas/<?php echo $horario->imagen; ?>" alt="Imagen"></td>
                          <td ><h3><?php echo $horario->nombrepelicula; ?></h3></td>  
                      </tr>
                      <tr>
                          <td><b>Fecha:</b> <?php echo $horario->fechapelicula; ?> | <b>Hora:</b> <?php echo $horario->horapelicula; ?> | <b>Sala:</b> <?php echo $horario->sala; ?> </td>
                      </tr>
                      <tr>
                          <td><b>Boletos:</b> <?php echo $_REQUEST['txtCantidadBoleto']; ?> | <b>Butacas:</b>
                           <?php 
                                //imprimir los nombres de las butacas seleccionadas
                                for ($i=1; $i <= $_REQUEST['txtCantidadBoleto']; $i++) { 
                                    # imprimir los nombres de los boletos
                                    echo $_REQUEST['txtNombreButaca'.$i].' | '; 
                                } 

                           ?>
                           <b>Total a Pagar:</b> $ <?php echo $_REQUEST['txtTotal']; ?></td>  
                      </tr>
                  </tbody>
                </table>
              </div>

      </div>

      <!-- Código de compra -->
      <div class="container">
              <!-- tabla de activos -->
              <div id="activas" class="col s12">
                    <h4 class="center red darken-4 white-text">CÓDIGO DE COMPRA</h4>
                    <div class="card-panel grey lighten-5">
                    <h5 class="center red darken-4"><strong><?php echo $boleto->idventa; ?></strong></h5>
                    </div>
              </div>
      </div>

    </div>
    <br><br><br>
  </div>