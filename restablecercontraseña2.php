<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Restablecer contraseña.">
  <!-- 13. Restablecer contraseña 2 - VC -->
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
    
    <!-- Start Article: Restore Password 2-->
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

      <!-- Start Restore Password 2 Section -->
      <section id="form">
        <div class="container">
          <div class="row">

            <!-- Restore Password Principal Sign -->
            <div class="register-req">
              <h6>¡Enlace de restablecimiento de contraseña enviado correctamente!</h6><br>
              <p>
              Por favor revise el correo electrónico al cual se le acaba de envíar un enlace para el restablecimiento de su contraseña en nuestra tienda virtual Florideas Holanda (si no aparece en la Bandeja de Entrada, revisar carpeta de spam o correo no deseado).<br>
              El enlace de recuperación de contraseña tiene una vigencia de 20 minutos. Si pasa ese lapso de tiempo y no cambia la contraseña, debe realizar el procedimiento de nuevo.
              Al hacer click en el enlace que le llegue, lo redireccionará de nuevo a nuestra tienda para que pueda realizar el restablecimiento de su contraseña. Muchas gracias por utilizar nuestro servicio.
              </p>
            </div>

            <!-- Confirmation sent email Button -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->             
                <form action="#"> 

                  <!-- Ok Button -->
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default add-to-cart" title="De acuerdo">
                          <i class="fa-solid fa-check"></i>
                          De acuerdo
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
      <!-- End Restore Password 2 Section -->

    </article>
    <!-- End Article: Restore Password 2-->


    <!-- Link de ejemplo para ir a restablecer contraseña 3-->
    <div class="text-center">
                    <br>
    <a href="restablecercontraseña3.php" title="Registro 2">Link de ejemplo para ir a restablecer contraseña 3</a>
    </div>

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>