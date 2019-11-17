<!-- cuerpo de registrar_usuario -->
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center gray-text text-darken-2"><i class="medium material-icons">account_circle</i> 
              <!--si el atributo Alumno->id es diferente de nulo muestra el nombre-->
              Registrar Cliente
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdcliente" />

                  <div class="input-field col s6">
                    <input id="txtNombre" type="text" class="validate" name="txtNombre"  required>
                    <label for="txtNombre">Nombre</label>
                  </div>
                  <div class="input-field col s6">
</i>
                    <input id="txtApellido" type="text" class="validate" name="txtApellido"  required>
                    <label for="txtApellido">Apellido</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txtEmail" type="email" class="validate" name="txtEmail"  required>
                    <label for="txtEmail">Email</label>
                  </div>

                  <div class="input-field col s6">

                    <input id="txtClave" type="password" class="validate" name="txtClave" required onfocus="select()">
                    <label for="txtClave">Contraseña</label>
                  </div>

                  

                  <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn grey"><i class="material-icons right">send</i>Guardar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>
