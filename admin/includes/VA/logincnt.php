    <!-- Start Content Login -->
    <div id="layoutAuthentication_content">

      <main>
        
        <!-- Container -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">

                <!-- Header Login -->
                <div class="card-header">                  
                  <a class="d-flex justify-content-center mt-5" href="login.php">
                    <img style="width: 180px" src="../resources/images/OtrasImag/LOGO FLORIDEAS.jpg" title="Florideas Holanda" alt="Logo Florideas Holanda">
                  </a>
                  <h3 class="text-center font-weight-light my-4">Módulo Administrador</h3>
                </div>

                <!-- Body Login -->
                <div class="card-body">
                  
                  <form action="acciones/iniciarsesion.php" method="post">

                    <!-- Nickname Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputEmail" name="inputEmail" type="text" placeholder="Apodo o E-mail Usuario" title="Apodo o E-mail Usuario" required>
                      <label for="inputEmail">Apodo o E-mail Usuario</label>
                    </div>

                    <!-- Password Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Contraseña" title="Contraseña" required>
                      <label for="inputPassword">Contraseña</label>
                    </div>

                    <!-- Remember/Forgot Password -->
                    <div class="form-check mb-3">

                      <!-- Remember Password checkbox -->
                      <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" title="Recordar Contraseña">
                      <label class="form-check-label" for="inputRememberPassword">Recordar Contraseña</label>          

                      <!-- Forgot Password? Link -->
                      <a class="small d-flex justify-content-end" href="password.php" title="¿Olvidó la contraseña?">¿Olvidó la contraseña?</a>
                      
                    </div>

                    <!-- Login Button -->
                    <div class="mt-4 mb-0 p-3">
                      <div class="d-grid">
                        <button onclick="location.href='index.php'" class="btn btn-primary btn-block" type="submit" href="index.php" title="Iniciar Sesión">
                          <i class="fa-solid fa-person-walking-arrow-right"></i> Iniciar Sesión
                        </button>
                      </div>
                    </div>

                  </form>

                </div>

                <!-- Bottom Login 
                <div class="card-footer text-center py-3">
                  <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                </div> -->

              </div>
            </div>
          </div>
        </div>

      </main>

    </div>
    <!-- End Content Login -->