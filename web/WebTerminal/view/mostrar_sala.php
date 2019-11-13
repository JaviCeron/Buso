  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">airplay</i> Salas Registradas</h2>
        </div>

            <!-- datos -->
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6"><a  class="active" href="#activas">Activas</a></li>
                  <li class="tab col s6"><a href="#inactivas">Inactivas</a></li>
                </ul>
              </div>
              <!-- tabla de activos -->
              <div id="activas" class="col s12">
                <table class="striped">
                  <thead>
                      <tr>
                          <th class="center">Id</th>
                          <th>Nombre</th>
                          <th>Tipo</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach($this->model->ListarSalaActivas() as $r): ?>
                      <tr>
                          <td><?php echo $r->idsala; ?></td>
                          <td><?php echo $r->nombre; ?></td>
                          <td><?php echo $r->tipo; ?></td>
                          <td class="center">
                              <!-- en la url pasamos parámetros para el controlador -->
                              <!--    controller, metod,id -->
                              <a href="?c=Sala&a=Crud&id=<?php echo $r->idsala; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                          </td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=Sala&a=CambiarEstado&nuevo_estado=0&id=<?php echo $r->idsala; ?>" title="Desactivar Registro" ><i class="small material-icons red-text">cancel</i></a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              
              <!-- tabla de inactivos -->
              <div id="inactivas" class="col s12">
                <table class="striped">
                    <thead>
                        <tr>
                            <th class="center">Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th class="center">Editar</th>
                            <th class="center">Activar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->ListarSalaInactivas() as $r): ?>
                        <tr>
                            <td><?php echo $r->idsala; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->tipo; ?></td>
                            <td class="center">
                                <!-- en la url pasamos parámetros para el controlador -->
                                <!--    controller, metod,id -->
                                <a href="?c=Sala&a=Crud&id=<?php echo $r->idsala; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                            </td>
                            <td class="center">
                                <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=Sala&a=CambiarEstado&nuevo_estado=1&id=<?php echo $r->idsala; ?>" title="Desactivar Registro" ><i class="small material-icons green-text">check_circle</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
            </div>

      </div>

    </div>
    <br><br><br><br>
  </div>