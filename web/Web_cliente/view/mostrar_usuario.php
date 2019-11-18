<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">airplay</i>Usuarios registrados</h2>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                <tr>
                          <th class="center">Id</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo electrónico</th>
                          <th class="center">Editar</th>
                          <th class="center">Eliminar</th>
                         
                      </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarUsuario() as $r): ?>
                      <tr>
                          <td><?php echo $r->idusuario; ?></td>
                          <td><?php echo $r->nombre; ?></td>
                          <td><?php echo $r->apellido; ?></td>
                          <td><?php echo $r->email; ?></td>
                          <td class="center">
                              <!-- en la url pasamos parámetros para el controlador -->
                              <!--    controller, metod,id -->
                              <a href="?c=Usuario&a=Update&id=<?php echo $r->idusuario; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                          </td>

                          <td class="center">
                            <a onclick="javascript:return confirm('¿Seguro que desea eliminar esta usuario?');" href="?c=Usuario&a=EliminarUsuario&id=<?php echo $r->idusuario; ?>" title="Eliminar Registro" ><i class="small material-icons red-text">delete</i></a>
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