<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Registro de Usuario.">
  <!-- 10. Registro de Usuario 1 / VC -->
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

    <!-- Start Article: Registration 3 -->
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

      <!-- Start Registration Section -->
      <section id="cart_items">
        <div class="container mb-15">

          <!-- Registration Text Principal Sign -->
          <div class="register-req">
            <p>
              Bienvenido a Florideas Holanda. Para poder realizar compras en la tienda virtual, por favor registrese
              como nuevo usuario si aún no lo ha hecho. Los datos de <b>Facturación</b> y <b>Envío</b> los podrá
              modificar al momento de realizar un nuevo pedido. <b>Todos los campos son obligatorios.</b>
            </p>
          </div>

          <!-- Registration Form -->
          <?php include_once 'includes/VC/registrationuserform.php'?>

        </div>        
      </section>
      <!-- End Registration Section -->

    </article>
    <!-- End Article: Registration -->

    <!-- Link de ejemplo para ir a registro 2 -->
    <div class="text-center">
      <br>
      <a href="autenticacion.php" title="Registro 2">Link de ejemplo para ir a registro 2</a>
    </div>

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>