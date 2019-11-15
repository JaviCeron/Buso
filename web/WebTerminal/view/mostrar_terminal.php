  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-4"><i class="medium material-icons">airplay</i>Terminales registradas</h2>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                        <th class="center">Id</th>
                        <th class="center" >Nombres</th>
                    
                        <th class="center">Editar</th>
                
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarTerminal() as $r): ?>
                    <tr>
                        <td class="center"><?php echo $r->idterminal; ?></td>
                        <td class="center"><?php echo $r->nombre_terminal; ?></td>
                       
                        <td class="center">
                            <!-- en la url pasamos parámetros para el controlador -->
                            <!--    controller, metod,id -->
                            <a href="?c=Terminal&a=Crud&id=<?php echo $r->idterminal; ?>" title="Editar Terminal" ><i class="small material-icons">edit</i></a>
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