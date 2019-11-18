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

      <!-- Horarios de la película -->
      <div class="container">
              <!-- tabla de activos -->
              <div id="activas" class="col s12">

                    <h5 class="center red darken-4 white-text">DATOS DE PAGO</h5>
               
                    <form name="fbutacas" class="col s12" action="?c=Boletousuario&a=Facturar" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="txtIdhorario" value="<?php echo $horario->idhorario; ?>" />
                    <input type="hidden" name="txtIdsala" value="<?php echo $horario->idsala; ?>" />
                    
                    <?php 
                        //tomamos datos de las butacas seleccionadas
                        for ($i=1; $i <= $_REQUEST['txtCantidadBoleto']; $i++) { 
                          # imprimir los nombres de los boletos
                           echo '<input type="hidden" name="txtNombreButaca'.$i.'" value="'.$_REQUEST['txtNombreButaca'.$i].'" />'; 
                            # imprimir los id de los boletos
                             echo '<input type="hidden" name="txtButaca'.$i.'" value="'.$_REQUEST['txtButaca'.$i].'" />'; 
                        }                     
                    ?>
                    <input id="txtCantidadBoleto" type="hidden" name="txtCantidadBoleto" value="<?php echo $_REQUEST['txtCantidadBoleto']; ?>">
                    <input id="clickCantidadBoleto" type="hidden" name="clickCantidadBoleto" value="0">
                    <input id="txtTotal" type="hidden" name="txtTotal" value="<?php echo $_REQUEST['txtTotal']; ?>">
                       

                    <input type="hidden" name="txtIdcliente" value="<?php echo $cliente->idcliente; ?>"/>

                    <div class="input-field col s6">
                            <input id="txtNombre" type="text" readonly name="txtNombre" value="<?php echo $cliente->nombre. ' '.$cliente->apellido; ?>"  required>
                            <label for="txtNombre">Nombre Cliente</label>
                     </div>

                    <div class="input-field col s6">
                            <input id="txtEmail" type="email" readonly name="txtEmail" value="<?php echo $cliente->email; ?>"  required>
                            <label for="txtEmail">Email</label>
                    </div>   

                    <div class="input-field col s6">
                        <input id="txtIdentificacion" type="text" class="validate" name="txtIdentificacion" value="<?php echo $cliente->identificacion; ?>" required onfocus="select()">
                        <label for="txtIdentificacion">Número de Identificación</label>
                    </div> 

                    <div class="input-field col s6">
                            <input id="txtTarjeta" type="text" readonly name="txtTarjeta" value="<?php echo $cliente->tarjeta; ?>" required onfocus="select()">
                            <label for="txtTarjeta">Número de Tajeta</label>
                    </div> 

                    <div class="input-field col s6">
                        <input id="txtFechavencimientotarjeta" type="date" class="validate" name="txtFechavencimientotarjeta" value="<?php echo $cliente->fechavencimientotarjeta; ?>" required onfocus="select()">
                        <label for="txtFechavencimientotarjeta">Fecha de vencimiento de la Tajeta</label>
                    </div> 
                            
                    <div class="input-field col s12">
                                <a title="Cancelar compra" class="btn red darken-4 waves-effect waves-light" href="?c=Boletousuario&a=MostrarPeliculas">Cancelar Compra<i class="material-icons right">cancel</i></a>

                                <button title="Pagar Boletos" class="btn green darken-2 waves-effect waves-light" type="submit" name="action">Aceptar terminos y Comprar boletos<i class="material-icons right">monetization_oncredit_card</i></button>
                    </div>

                  </form>

              </div>
      </div>

    </div>
    <br><br><br>
  </div>

<script>
//para seleccionar las butacas
function seleccionarButaca(butaca) {
  //tomar el id de la butaca 
  var idbutaca = butaca.getAttribute('data-id');
  //tomar el nombre de la butaca 
  var nombrebutaca = butaca.getAttribute('data-name');
  //tomar el estado de la selección de la butaca (null es disponible; 1 es seleccionada)
  var click = butaca.getAttribute('data-click');
  //tomar la cantidad de butacas que puede seleccionar
  var cantidadBoletos = parseInt(document.getElementById("txtCantidadBoleto").value);
  //tomar la cantidad de butacas que Ya seleccionó (inicia siempre en 0)
  var cantidadBoletosSeleccionados = parseInt(document.getElementById("clickCantidadBoleto").value);

  //validar la selección de las butacas y la cantidad de estas
  if (click == 'null' && cantidadBoletosSeleccionados < cantidadBoletos) {
    //cambiar el estilo de la butaca seleccionada
    butaca.style.background = '#eee';
    butaca.style.color = '#000';
    butaca.style.border = 'solid 1px #000';
 
    //cambiar el estado de la butaca seleccionada
    butaca.setAttribute('data-click', '1');

    //definir el número del conteo de boletos
    var numero = parseInt(document.fbutacas.clickCantidadBoleto.value) + 1;

    //asignar al campo oculto el id de la butaca seleccionada
    document.getElementById("txtButaca"+numero).value = idbutaca;

    //asignar el nuevo número del conteo de boletos
    document.fbutacas.clickCantidadBoleto.value = numero;
    document.getElementById("txtNombreButaca"+numero).value = nombrebutaca;
    document.getElementById("txtNombreButaca"+numero).style.background = '#b71c1c';
    document.getElementById("txtNombreButaca"+numero).style.color = '#fff';
  } else {
    alert('Ya seleccionó esta butaca o ya no puede seleccionar otra.\nSi desea cambiar su selección debe dar click en\nCAMBIAR BUTACAS');
  }

}
</script>