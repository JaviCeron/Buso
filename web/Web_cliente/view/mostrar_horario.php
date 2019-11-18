<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">airplay</i>Horaios registradas</h2>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                      
                        <th>Hora_salida</th>
                        <th>Hora_meta</th>
                        <th>Ruta_origen</th>
                      

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarHorario() as $r): ?>
                    <tr>
                       
                        <td><?php echo $r->hora_salida; ?></td>
                        <td><?php echo $r->hora_meta; ?></td>
                        <td><?php echo $r->numero_ruta; ?></td>
                       
                        <td>
                            <!-- en la url pasamos parámetros para el controlador -->
                            <!--    controller, metod,id -->
                            <a href="?c=Horario&a=Crud&id=<?php echo $r->idhorario; ?>" title="Editar horario" ><i class="small material-icons">edit</i></a>
                        </td>
                        <td>
                            <a onclick="javascript:return confirm('¿Seguro que desea eliminar este horario?');" href="?c=Horario&a=EliminarHorario&id=<?php echo $r->idhorario ?>" title="Eliminar Registro" ><i class="small material-icons red-text">delete</i></a>
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