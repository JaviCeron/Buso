  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons"></i> Terminales </h2>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                     
                        <th class="center">Nombres</th>
                    
                
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarTerminal() as $r): ?>
                    <tr>
                   
                        <td class="center"> <a href="?c=Ruta&a=VerRutas&id=<?php echo $r->idterminal; ?>"  title="Ver Rutas"> <?php echo $r->nombre_terminal; ?>  </a></td>
          
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