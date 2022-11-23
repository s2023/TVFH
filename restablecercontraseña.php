<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Restablecer contraseña.">
  <!-- 12. Restablecer contraseña 1 - VC -->
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
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->
    
    <!-- Start Article: Restore Password-->
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

       <!-- Start Restore Password Section -->
      <section id="form">
        <div class="container">
          <div class="row">

            <!-- Login Text Principal Sign -->
            <div class="register-req">
              <p>
                Por favor ingrese el correo electrónico registrado como usuario, para que se le pueda ser enviado un correo electrónico con un enlace para reestablecer la contraseña.
              </p>
            </div>

            <!-- Login Form -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->             
                <form action="#"> 

                  <!-- Form Nickname -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex" title="E-mail de Usuario">
                        <i style="margin-right: 10px" class="fa-solid fa-user-shield" ></i><h6>E-mail de Usuario</h6>                        
                      </div>
                    </div>
                  </div>
                  <input type="email" placeholder="E-mail de Usuario" title="E-mail de Usuario" required>

                  <!-- Login Button -->
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default add-to-cart" title="Enviar E-mail">                          
                          <i class="fa-solid fa-envelope-circle-check"></i>
                          Enviar E-mail
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
       <!-- End Restore Password Section -->

    </article>
    <!-- End Article: Restore Password-->


    <!-- Link de ejemplo para ir a restablecer contraseña 2-->
    <div class="text-center">
                    <br>
    <a href="restablecercontraseña2.php" title="Registro 2">Link de ejemplo para ir a restablecer contraseña 2</a>
    </div>

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>