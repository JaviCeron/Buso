<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h3 class="center grey-text text-darken-4"><i class="medium material-icons"></i><?php echo $terminal->nombre_terminal; ?></h3>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                     
                        <th class="center">Numero de ruta </th>
                    
                
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarRutass($terminal->idterminal) as $r): ?>
                      <tr>
                          <td class="center"> <a href="?c=Ruta&a=VerRutas&id=<?php echo $r->idterminal; ?>"  title="Ver Horarios"> <?php echo $r->numero_ruta; ?>  </a> </td>
                         
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