<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Producto.">
  <!-- 7. Producto / VC -->
  <title>Producto - Florideas Holanda</title>

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
            <a href="index.php" class="btn btn-default"><i aria-hidden="true" class="fa-solid fa-house"></i></a>
            <a href="ocasiones.php" class="btn btn-default">Ocasiones</a>
            <a href="categoria.php" class="btn btn-default">Categoría</a>
            <a href="producto.php" class="btn btn-default">Producto</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Product -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Producto</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Product Section -->
      <section>
        <div class="container">
          <div class="row">

            <!-- Product Aside -->
            <?php include_once 'includes/VC/aside.php'?>

            <!-- Product Body -->
            <?php include_once 'includes/VC/product.php'?>
          
          </div>
        </div>
      </section>
      <!-- End Product Section -->

    </article>
    <!-- End Article: Product -->

    <!-- Start Related, Recommended Arrangements and Categories Article-->
    <article>

      <!-- Start Related Products Section -->      
      <?php include_once 'includes/VC/relatedproducts.php'?>
      <!-- End Related Products Section -->

      <!-- Start Recommended Products Section -->      
      <?php include_once 'includes/VC/recommendedproducts.php'?>
      <!-- End Recommended Products Section -->

      <!-- Start Recommended Categories Section -->
      <?php include_once 'includes/VC/recommendedcategories.php'?>
      <!-- End Related, Recommended Categories Section -->

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