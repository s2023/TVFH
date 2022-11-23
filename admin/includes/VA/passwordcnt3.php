    <!-- Start Content Restore Password 3 -->
    <div id="layoutAuthentication_content">

      <main>
        
        <!-- Container RP 3 -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">

                <!-- Header RP 3 -->
                <div class="card-header">                  
                  <a class="d-flex justify-content-center mt-5" href="login.php">
                    <img style="width: 180px" src="../resources/images/OtrasImag/LOGO FLORIDEAS.jpg" title="Florideas Holanda" alt="Logo Florideas Holanda">
                  </a>
                  <h3 class="text-center font-weight-light my-4">Módulo Administrador</h3>
                  <h4 class="text-center font-weight-light my-4">Reestablecer Contraseña</h4>
                </div>

                <!-- Body RP 3 -->
                <div class="card-body">
                  <div class="mt-4 mb-5 text-center">
                   <h5>¡El enlace de restablecimiento de contraseña ha cargado correctamente!</h5><br>
                   Por favor ingrese una nueva contraseña para su cuenta de usuario en nuestra tienda Florideas Holanda. <strong> La contraseña debe ser de mínimo 8 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo.</strong><br><br>
                   Al terminar podrá iniciar sesión de nuevo en la tienda. Muchas gracias por utilizar nuestro servicio.
                  </div>
                  
                  <form action=""> 

                    <!-- New Password Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" type="password" placeholder="Nueva Contraseña" title="Nueva Contraseña" required>
                      <label for="inputPassword">Nueva Contraseña</label>
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="inputPassword" type="password" placeholder="Contraseña" title="Contraseña" required>
                      <label for="inputPassword">Confirmar Contraseña</label>
                    </div>
                  
                    <!-- Change Password Button -->
                    <div class="mt-4 mb-0 p-3">
                      <div class="d-grid">
                        <button onclick="location.href='login.php'" class="btn btn-primary btn-block" type="button" href="" title="Cambiar Contraseña">
                          <i class="fa-solid fa-user-lock"></i> Cambiar Contraseña
                        </button>
                      </div>
                    </div>

                  </form>

                  <!-- Back -->
                  <div class="card-footer text-center py-3">
                    <div class="small"><a href="password.php"><i class="fa-solid fa-arrow-left"></i> Regresar a Restablecer Contraseña</a></div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </main>

    </div>
    <!-- End Content Restore Password 3 -->