<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Restablecer contraseña.">
  <!-- 14. Restablecer contraseña 3 - VC -->
  <title>Restablecer contraseña - Florideas Holanda</title>

  <!-- Head -->
  <?php include_once 'includes/VC/head.php'?>

</head>

<body>

  <!-- Start Header Navigation Section -->
  <?php include_once 'includes/VC/headernav.php'?>
  <!-- End Header Navigation Section -->

  <main>
    
    <!-- Start Breadcrumb Article-->
    <article>

      <!-- Start Breadcrumb Section -->
      <section class="container mt-4">
        <div class="row">
          <div class="btn-group btn-breadcrumb">
            <a href="index.php" class="btn btn-default"><i class="fa-solid fa-house"></i></a>
            <a href="autenticacion.php" class="btn btn-default">Iniciar Sesión</a>
            <a href="restablecercontraseña.php" class="btn btn-default">Restablecer contraseña</a>
            <a href="" class="btn btn-default">Crear Nueva contraseña</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->
    
    <!-- Start Article: Restore Password 3-->
    <article>
      
      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Restablecer contraseña</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Restore Password 3 Section -->
      <section id="form">
        <div class="container">
          <div class="row">

            <!-- Restore Password Principal Sign -->
            <div class="register-req">
              <h6>¡El enlace de restablecimiento de contraseña ha cargado correctamente!</h6><br>
              <p>
              Por favor ingrese una nueva contraseña para su cuenta de usuario en nuestra tienda Florideas Holanda. 
              La contraseña debe ser de mínimo 8 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo. <br>
              Al terminar podrá iniciar sesión de nuevo en la tienda. Muchas gracias por utilizar nuestro servicio.
              </p>
            </div>

            <!-- Restore Password Form -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->             
                <form action="#"> 

                  <!-- Form Password -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex" title="Nueva Contraseña">
                        <i style="margin-right: 10px" class="fa-solid fa-lock-open" ></i><h6>Nueva Contraseña</h6>                        
                      </div>
                    </div>
                  </div>
                  <input type="password" placeholder="Nueva Contraseña" title="Nueva Contraseña" required>
                
                  <!-- Form Password Confirm-->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex" title="Confirmar Contraseña">
                        <i style="margin-right: 10px" class="fa-solid fa-lock" ></i><h6>Confirmar Contraseña</h6>
                      </div>
                    </div>
                  </div>
                  <input type="password" placeholder="Confirmar Contraseña" title="Confirmar Contraseña" required><br>

                  <!-- Change Password Button -->
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex justify-content-center">
                        <button onclick="location.href='autenticacion.php'" type="submit" class="btn btn-default add-to-cart" title="Cambiar Contraseñan">                          
                          <i class="fa-solid fa-user-lock"></i>
                          Cambiar Contraseña
                        </button>                        
                      </div>
                    </div>
                  </div>

                </form>            

              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- End Restore Password 3 Section -->

    </article>
    <!-- End Article: Restore Password 3-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>