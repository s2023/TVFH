<?php
  $showMessage = false;

  if (isset($_GET['login'])) {
    $login = $_GET['login'];

    if ($login == 'false') {
      $showMessage = true;
    }
  }
?>
            <!-- Start Login Form -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->
                <form action="acciones/iniciarsesion.php" method="post">

                  <!-- Form Nickname -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex" title="Apodo o E-mail de Usuario">
                        <i style="margin-right: 10px" class="fa-solid fa-user-shield" ></i><h6>Apodo o E-mail de Usuario</h6>
                      </div>
                    </div>
                  </div>
                  <input type="text" placeholder="Apodo o E-mail de Usuario" title="Apodo o E-mail de Usuario" name="user" id="user" required>
                
                  <!-- Form Password -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex" title="Contraseña de Usuario">
                        <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-user-lock" ></i><h6>Contraseña de Usuario</h6>
                      </div>
                    </div>
                  </div>
                  <input type="password" placeholder="Contraseña de Usuario" title="Contraseña de Usuario" name="pass" id="pass" required><br>

                  <!-- Form Remember Check -->
                  <span title="Recordar datos de sesión.">
                    <input type="checkbox" class="checkbox" > 
                    Recordar datos de sesión.
                  </span>

                  <!-- Login Button -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default add-to-cart" title="Iniciar Sesión">
                          <i aria-hidden="true" class="fa-solid fa-person-walking-arrow-right"></i>
                          Iniciar Sesión
                        </button>
                      </div>
                    </div>
                  </div>

                </form>

                <?php if ($showMessage) { ?>
                  <!-- Start Advise OK Edit User Article-->
                  <div class="adviseerror">
                    <img src="resources/images/otrasImag/iconErrorX.png" alt="Error icon">
                    <br><h5>El usuario no existe o las credenciales no son las correctas.</h5>
                  </div>
                  <!-- End Advise OK Edit User Article-->
                <?php } ?>

                
              
                <!-- Restore Password Button --> 
                <!-- <div class="text-center">
                  <a href="restablecercontraseña.php" title="¿Olvidó la contraseña?">¿Olvidó la contraseña?</a>
                </div> <br> -->

                <!-- User Registration Button -->
                <div class="text-center">
                  ¿Todavía no es usuario?
                </div>
                <div class="text-center">
                  <a href="registro.php" title="Registro de Usuario">
                    <i aria-hidden="true" class="fa-solid fa-user-plus"></i> Registro de Usuario
                  </a>
                </div>

              </div>
            </div>
            <!-- End Login Form -->