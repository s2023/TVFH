<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Búsqueda.">
  <!-- 4. Búsqueda / VC -->
  <title>Búsqueda - Florideas Holanda</title>

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
            <a href="busqueda.php" class="btn btn-default">Búsqueda</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Search -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Búsqueda</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Search Section -->
      <section>
        <div class="container">
          <div class="row">

            <!-- Search Aside -->
            <?php include_once 'includes/VC/aside.php'?>

            <!-- Search Body -->
            <div class="col-sm-9 padding-right">

              <!-- Search Body Results -->
              <?php include_once 'includes/VC/bodyresults.php'?>
              
            </div>

          </div>
        </div>
      </section>
      <!-- End Search Section -->

    </article>
    <!-- End Article: Search -->

    <!-- Start Recommended Arrangements and Categories Article-->
    <article>

      <!-- Start Recommended Products Section -->
      <?php include_once 'includes/VC/recommendedproducts.php'?>
      <!-- End Recommended Products Section -->

      <!-- Start Recommended Categories Section -->
      <?php include_once 'includes/VC/recommendedcategories.php'?>
      <!-- End Recommended Categories Section -->

    </article>
    <!-- End Recommended Arrangements and Categories Article-->

    <!-- Start Notices Article-->
    <?php include_once 'includes/VC/notices.php'?>
    <!-- End Notices Article-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>