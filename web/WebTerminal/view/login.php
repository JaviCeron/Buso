<!-- cuerpo de login -->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center  grey-text text-darken-2"><i class="medium material-icons">account_circle</i> 
              Iniciar Sesión
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Login&a=Entrar" method="post" enctype="multipart/form-data">
                <div class="row">

                  <div class="input-field col s12">
                    <input id="txtEmail" type="email" class="validate" name="txtEmail" required>
                    <label for="txtEmail">Email</label>
                  </div>

                  <div class="input-field col s12">
                    <input id="txtContrasena" type="password" class="validate" name="txtContrasena"  required>
                    <label for="txtContrasena">Contraseña</label>
                  </div>
                 
                  
                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn grey darken-2"><i class="material-icons right">send</i>Entrar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>
