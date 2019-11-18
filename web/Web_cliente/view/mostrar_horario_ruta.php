<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h3 class="center grey-text text-darken-4"><i class="medium material-icons"></i><b>Ruta: </b> <?php echo $ruta->numero_ruta; ?></h3>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                     
                        <th class="center"> Horarios </th>
                    
                
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarHorario($ruta->idruta) as $r): ?>
                      <tr>
                          <td class="center"> <a href="?c=Ruta&a=VerDetalles&id=<?php echo $r->idhorario; ?>"  title="Ver Detalles"> <?php echo $r->hora_salida; ?>  </a> </td>
                         
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