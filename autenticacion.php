<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description" content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Iniciar Sesión (Autenticacion).">
  <!-- 9. Iniciar Sesión (Autenticacion) / VC -->
  <title>Iniciar Sesión - Florideas Holanda</title>

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
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Advise OK SignUp Article-->
    <?php include_once 'includes/VC/avisoregistrook.php'?>
    <!-- End Advise OK SignUp Article-->

    <!-- Start Advise OK Change Password Article-->
    <?php include_once 'includes/VC/avisocambiocontraseñaok.php'?>
    <!-- End Advise OK Change Password  Article-->

    <!-- Start Advise Error Article-->
    <?php include_once 'includes/VC/avisoerror.php'?>
    <!-- End Advise Error Article-->

    <!-- Start Article: Log In-->
    <article>
      
      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Iniciar Sesión</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Authentication Section -->
      <section id="form">
        <div class="container">
          <div class="row">

            <!-- Login Text Principal Sign -->
            <div class="register-req">
              <p>
                Bienvenido a Florideas Holanda.<br>
                Para poder realizar compras y utilizar todas las funcionalidades de la tienda virtual, por favor inicie sesion o registrese como nuevo usuario si aún no lo ha hecho.
              </p>
            </div>

            <!-- Login Form -->
            <?php include_once 'includes/VC/loginform.php'?>

          </div>
        </div>
      </section>
      
    </article>
    <!-- End Article: Log In-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>
  
</body>

</html>