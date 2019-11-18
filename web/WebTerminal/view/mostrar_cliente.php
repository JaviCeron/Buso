<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">account_circle</i> Clientes Registrados</h2>
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
                <?php foreach($this->model->ListarCliente() as $r): ?>
                      <tr>
                          <td><?php echo $r->idcliente; ?></td>
                          <td><?php echo $r->nombre; ?></td>
                          <td><?php echo $r->apellido; ?></td>
                          <td><?php echo $r->email; ?></td>
                          <td class="center">
                              <!-- en la url pasamos parámetros para el controlador -->
                              <!--    controller, metod,id -->
                              <a href="?c=Cliente&a=Update&id=<?php echo $r->idcliente; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                          </td>

                          <td class="center">
                            <a onclick="javascript:return confirm('¿Seguro que desea eliminar este cliente?');" href="?c=Cliente&a=EliminarCliente&id=<?php echo $r->idcliente; ?>" title="Eliminar Registro" ><i class="small material-icons red-text">delete</i></a>
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