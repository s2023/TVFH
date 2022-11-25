<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Registro de Usuario 2.">
  <!-- 11. Registro de Usuario 2 / VC -->
  <title>Registro de Usuario - Florideas Holanda</title>

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
            <a href="registro.php" class="btn btn-default">Registro de Usuario</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Registration 2 -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Registro de Usuario</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Registration 2 Section -->
      <section id="cart_items">
        <div class="container mb-15">

          <!-- Registration 2 Text Principal Sign -->
          <div class="register-req">
          <h6 class="mb-5">¡Registro de Usuario exitoso!</h6>
            <p>
            Solo falta un paso para poder usar nuestra tienda: Por favor revise su correo electrónico registrado como usuario, se le acaba de enviar un mensaje con un link para que pueda activar su cuenta de usuario en nuestra tienda virtual Florideas Holanda (Si no aparece en la Bandeja de Entrada, revisar carpeta de spam o correo no deseado).<br>
            Al hacer click en el enlace que le llegue, lo redireccionará de nuevo a nuestra tienda para que pueda a empezar a comprar productos.<br>
            Muchas gracias por utilizar nuestro servicio.
            </p>
          </div>

          <!-- Confirmation Sign Up Button-->
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-center">
                <!-- Confirmation Sign up Button  -->
                <button onclick="location.href='autenticacion.php'" type="submit" class="btn btn-default add-to-cart" title="De acuerdo" href="registro2.php"
                  value="De acuerdo">
                  <i class="fa-solid fa-check"></i> De acuerdo
                </button>
              </div>
            </div>
          </div><br>

        </div>        
      </section>
      <!-- End Registration 2 Section -->

    </article>
    <!-- End Article: Registration 2 -->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>