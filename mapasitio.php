<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Ayuda.">
  <!-- 21. Mapa del Sitio - VC -->
  <title>Mapa del Sitio - Florideas Holanda</title>

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
            <a href="mapasitio.php" class="btn btn-default">Mapa del Sitio</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->


    <!-- Start Article: Sitemap -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Mapa del Sitio</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Sitemap Section -->
      <section>
        <div class="container"> 

          <!-- Start Terms and Conditions and Privacy Policy -->
          <?php include_once 'includes/VC/sitemap.php'?>
          <!-- End Terms and Conditions and Privacy Policy -->

        </div>
      </section>
      <!-- End Sitemap Section -->

    </article>
    <!-- End Article: Sitemap-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>