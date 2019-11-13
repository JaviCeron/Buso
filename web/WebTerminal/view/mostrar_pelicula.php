  <div class="row">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">movie</i> Películas Registradas</h2>
        </div>

            <!-- datos -->
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s6"><a  class="active" href="#activas">Activos</a></li>
                  <li class="tab col s6"><a href="#inactivas">Inactivos</a></li>
                </ul>
              </div>
              <!-- tabla de activos -->
              <div id="activas" class="col s12">
                <table class="striped">
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Imagen</th>
                          <th>Duración</th>
                          <th>Tipo</th>
                          <th>Clasif.</th>
                          <th>Director</th>
                          <th>Reparto</th>
                          <th>Descripción</th>
                          <th>Precio</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach($this->model->ListarPeliculaActivas() as $r): ?>
                      <tr>
                          <td><?php echo $r->nombre; ?></td>
                          <td class="center"><img  width="200px" height="200px" class="materialboxed" src="view/include/peliculas/<?php echo $r->imagen; ?>" alt="Imagen"><a class="grey-text" href="?c=Pelicula&a=CambiarImagen&id=<?php echo $r->idpelicula; ?>" title="Cambiar imagen de la película">Cambiar imagen</a></td>
                          <td><?php echo $r->duracion; ?></td>
                          <td><?php echo $r->tipo; ?></td>
                          <td><?php echo $r->clasificacion; ?></td>
                          <td><?php echo $r->director; ?></td>
                          <td><?php echo $r->reparto; ?></td>
                          <td><?php echo $r->descripcion; ?></td>
                          <td>$ <?php echo $r->precio; ?></td>
                          <td class="center">
                              <!-- en la url pasamos parámetros para el controlador -->
                              <!--    controller, metod,id -->
                              <a href="?c=Pelicula&a=Update&id=<?php echo $r->idpelicula; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                          </td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=Pelicula&a=CambiarEstado&nuevo_estado=0&id=<?php echo $r->idpelicula; ?>" title="Desactivar Registro" ><i class="small material-icons red-text">cancel</i></a>
                          </td>
                      </tr>
                      <!-- encabezados -->
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>Imagen</th>
                              <th>Duración</th>
                              <th>Tipo</th>
                              <th>Clasif.</th>
                              <th>Director</th>
                              <th>Reparto</th>
                              <th>Descripción</th>
                              <th>Precio</th>
                              <th class="center">Editar</th>
                              <th class="center">Desactivar</th>
                          </tr>
                      </thead>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              
              <!-- tabla de inactivos -->
              <div id="inactivas" class="col s12">
                <table class="striped">
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Imagen</th>
                          <th>Duración</th>
                          <th>Tipo</th>
                          <th>Clasif.</th>
                          <th>Director</th>
                          <th>Reparto</th>
                          <th>Descripción</th>
                          <th>Precio</th>
                          <th class="center">Editar</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php foreach($this->model->ListarPeliculaInactivas() as $r): ?>
                      <tr>
                          <td><?php echo $r->nombre; ?></td>
                          <td class="center"><img src="view/include/peliculas/<?php echo $r->imagen; ?>" alt="Imagen"><a class="grey-text" href="?c=Pelicula&a=CambiarImagen" title="Cambiar imagen de la película">Cambiar imagen</a></td>
                          <td><?php echo $r->duracion; ?></td>
                          <td><?php echo $r->tipo; ?></td>
                          <td><?php echo $r->clasificacion; ?></td>
                          <td><?php echo $r->director; ?></td>
                          <td><?php echo $r->reparto; ?></td>
                          <td><?php echo $r->descripcion; ?></td>
                          <td>$ <?php echo $r->precio; ?></td>
                          <td class="center">
                              <!-- en la url pasamos parámetros para el controlador -->
                              <!--    controller, metod,id -->
                              <a href="?c=Pelicula&a=Update&id=<?php echo $r->idpelicula; ?>" title="Editar Registro" ><i class="small material-icons blue-text">edit</i></a>
                          </td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=Pelicula&a=CambiarEstado&nuevo_estado=1&id=<?php echo $r->idpelicula; ?>" title="Activar Registro" ><i class="small material-icons green-text">check_circle</i></a>
                          </td>
                      </tr>
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Imagen</th>
                          <th>Duración</th>
                          <th>Tipo</th>
                          <th>Clasif.</th>
                          <th>Director</th>
                          <th>Reparto</th>
                          <th>Descripción</th>
                          <th>Precio</th>
                          <th class="center">Editar</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>

      </div>

    </div>
    <br><br><br><br>
  </div>