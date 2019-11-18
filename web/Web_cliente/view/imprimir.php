<?php
  //validar la sesión
  @session_start();
  if(!isset($_SESSION["id"])){
    header('Location: index.php?c=Login&a=Index');
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Conexiones a BD</title>

  <!-- CSS  -->
  <link href="materializecss/css/icon.css" rel="stylesheet">
  <link href="materializecss/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materializecss/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body onload="window.print()" style="margin: 0; font-size:14px;">
    <div class="row">

            <!-- datos -->
            <div class="row">
              <div class="col s4">
                    <!-- tabla de factura -->
                    <table class="striped">
                            <thead>
                                <tr>
                                    <th colspan="4"><h5 class="grey-text text-darken-4"><i class="small material-icons">movie</i> Cine para Todos</h5></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="4">Fecha: <strong><?php echo $datosventa->fechaventa; ?></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Cajero: <strong><?php echo $datosventa->cajero; ?></strong>  
                                  </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        Cliente: <strong><?php echo $datosventa->cliente; ?></strong>  
                                  </td>
                                </tr>
                                <tr>
                                      <td>
                                        Producto 
                                      </td>
                                      <td>
                                        Cant. 
                                      </td>
                                      <td>
                                        Precio 
                                      </td>
                                      <td>
                                        Total 
                                      </td>
                                </tr>
                                <tr>
                                      <td>
                                        <strong><?php echo $datosventa->pelicula; ?></strong>  
                                      </td>
                                      <td>
                                        <strong><?php echo $datosventa->cantidad; ?></strong>  
                                      </td>
                                      <td>
                                        <strong>$ <?php echo $datosventa->precio; ?></strong>  
                                      </td>
                                      <td>
                                        <strong>$ <?php echo $datosventa->total; ?></strong>  
                                      </td>
                                </tr>
                                <tr>
                                      <td>
                                        &nbsp;  
                                      </td>
                                      <td>
                                        &nbsp;  
                                      </td>
                                      <td>
                                        <strong>Total</strong>  
                                      </td>
                                      <td>
                                        <strong>$ <?php echo $datosventa->total; ?></strong>  
                                      </td>
                                </tr>
                            </tbody>
                          </table>
                          <br> 
               
                <!-- tabla de boletos -->
                <?php foreach($boleto->BuscarBoleto($codigo_compra) as $r): ?>
                <table class="striped">
                  <thead>
                      <tr>
                          <th><h5 class="grey-text text-darken-4"><i class="small material-icons">movie</i> Cine para Todos</h5></th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Película: <strong><?php echo $r->pelicula; ?></strong></td>
                      </tr>
                      <tr>
                          <td>
                              Fecha: <strong><?php echo $r->fechapelicula; ?></strong>   
                              Hora: <strong><?php echo $r->horapelicula; ?></strong> 
                        </td>
                      </tr>
                      <tr>
                          <td>
                              Sala: <strong><?php echo $r->sala; ?></strong> 
                              Asiento: <strong><?php echo $r->butaca; ?></strong> 
                              Precio: <strong>$ <?php echo $r->precio; ?></strong> 
                        </td>
                      </tr>
                  </tbody>
                </table>
                <br>    
                <?php endforeach; ?>
              </div>

            </div>
    </div>

  <!--  Scripts-->
  <script src="materializecss/js/jquery-2.1.1.min.js"></script>
  <script src="materializecss/js/materialize.js"></script>
  <script src="materializecss/js/init.js"></script>

  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>

  </body>
</html>

