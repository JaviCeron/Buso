<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">airplay</i>Rutas registradas</h2>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                      
                        <th>Numero ruta</th>
                    
                        <th>Nombre ruta</th>
                        <th>Tarifa</th>
                        <th>Terminal origen</th>
                        <th>Terminal destino</th>

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarRuta() as $r): ?>
                    <tr>
                       
                        <td><?php echo $r->numero_ruta; ?></td>
                        <td><?php echo $r->nombre_bus; ?></td>
                        <td><?php echo $r->tarifa; ?></td>
                        <td><?php echo $r->nombre_origen; ?></td>
                        <td><?php echo $r->nombre_destino; ?></td>
                        <td>
                            <!-- en la url pasamos parámetros para el controlador -->
                            <!--    controller, metod,id -->
                            <a href="?c=Ruta&a=Crud&id=<?php echo $r->idruta; ?>" title="Editar ruta" ><i class="small material-icons">edit</i></a>
                        </td>
                        <td>
                            <a onclick="javascript:return confirm('¿Seguro que desea eliminar esta ruta?');" href="?c=Ruta&a=EliminarRuta&id=<?php echo $r->idruta; ?>" title="Eliminar Registro" ><i class="small material-icons red-text">delete</i></a>
                        </td>
                     
                    </tr>
                <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              
              <!-- tabla de inactivos -->
             
           

      </div>

    </div>
    <br><br><br><br>
  </div>