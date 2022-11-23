    <!-- Start Content Restore Password -->
    <div id="layoutAuthentication_content">

      <main>
        
        <!-- Container RP -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">

                <!-- Header Login RP -->
                <div class="card-header">                  
                  <a class="d-flex justify-content-center mt-5" href="login.php">
                    <img style="width: 180px" src="../resources/images/OtrasImag/LOGO FLORIDEAS.jpg" title="Florideas Holanda" alt="Logo Florideas Holanda">
                  </a>
                  <h3 class="text-center font-weight-light my-4">Módulo Administrador</h3>
                  <h4 class="text-center font-weight-light my-4">Reestablecer Contraseña</h4>
                </div>

                <!-- Body Login RP -->
                <div class="card-body">
                  <div class="small mt-3 mb-5 text-muted text-center">
                    Por favor ingrese el correo electrónico registrado como usuario, para que se le pueda ser enviado un correo electrónico con un enlace para reestablecer la contraseña.
                  </div>
                  
                  <form action="">

                    <!-- E-mail User Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" type="email" placeholder="Apodo o E-mail Usuario" title="Apodo o E-mail Usuario" required>
                      <label for="inputEmail">E-mail de Usuario</label>
                    </div>

                    <!-- Send E-mail Button -->
                    <div class="mt-4 mb-0 p-3">
                      <div class="d-grid">
                        <button onclick="location.href='password2.php'" class="btn btn-primary btn-block" type="submit" href="" title="Iniciar Sesión">
                          <i class="fa-solid fa-envelope-circle-check"></i> Enviar E-mail
                        </button>
                      </div>
                    </div>

                  </form>

                  <!-- Back -->
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="login.php"><i class="fa-solid fa-arrow-left"></i> Regresar al Inicio</a></div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </main>

    </div>
    <!-- End Content Restore Password -->