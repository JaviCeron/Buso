<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h3 class="center grey-text text-darken-4"><i class="medium material-icons"></i><b> Detalles Ruta </b></h3>
        </div>

             <!-- datos -->
             <div class="row">
              
              <table class="striped">
                <thead>
                    <tr>
                     
                        <th> Nombre </th>
                        <th> Numero_Ruta </th>
                        <th> Tarifa </th>
                        <th> Lugar_destino </th>
                        <th> Hora_salida </th>
                        <th> Hora_meta </th>


                     
                
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->ListarDetalle($horario->idhorario) as $r): ?>
                      <tr>
                          <td> <?php echo $r->nombre_bus; ?> </td>
                          <td> <?php echo $r->numero_ruta; ?> </td>
                          <td> <?php echo $r->tarifa; ?> </td>
                          <td> <?php echo $r->terminal_destino; ?> </td>
                          <td> <?php echo $r->hora_salida; ?> </td>
                          <td> <?php echo $r->hora_meta; ?> </td>



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