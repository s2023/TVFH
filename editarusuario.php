<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Editar Usuario.">
  <!-- 17. Editar Usuario - VC -->
  <title>Editar Usuario - Florideas Holanda</title>

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
            <a href="verusuario.php" class="btn btn-default">Menú Usuario</a>
            <a href="editarusuario.php" class="btn btn-default">Editar Usuario</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Edit User -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Editar Usuario</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Edit User Section -->
      <section>
        <div class="container mb-15">

          <!-- Edit User Text Principal Sign -->
          <div class="register-req">
            <p>
              A continuación puede realizar la edición de sus datos de usuario. El campo de <strong> Nombre de Usuario (Apodo)</strong> no será posible realizar el cambio.
            </p>
          </div>

          <!-- Edit User Form -->
          <?php include_once 'includes/VC/edituserform.php'?>

        </div>        
      </section>
      <!-- End Edit User Section -->

      <!-- Start Go Back User Menú Section -->
      <section>
        <div class="text-center">
          <a href="verusuario.php" title="Regresar al Menú Usuario"><i class="fa-solid fa-arrow-left"></i> Regresar al Menú Usuario</a>
        </div>
      </section>
      <!-- End Go Back User Menú Section -->

    </article>
    <!-- End Article: Edit User -->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>
  <script src="resources/js/app/pais-depregprov-ciudad.js"></script>
  <script src="resources/js/app/usuario-pdc.js"></script>

</body>

</html>