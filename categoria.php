<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Categoría.">
  <!-- 6. Categoría / VC -->
  <title>Categoría - Florideas Holanda</title>

  <!-- Head -->
  <?php include_once 'includes/VC/head.php' ?>

</head>


<body>

  <!-- Start Header Navigation Section -->
  <?php include_once 'includes/VC/headernav.php' ?>
  <!-- End Header Navigation Section -->

  <main>

    <!-- Start Breadcrumb Article-->
    <article>

      <!-- Start Breadcrumb Section -->
      <section class="container mt-4">
        <div class="row">
          <div class="btn-group btn-breadcrumb">
            <a href="index.php" class="btn btn-default"><i class="fa-solid fa-house"></i></a>
            <a href="ocasiones.php" class="btn btn-default">Ocasiones</a>
            <a href="categoria.php" class="btn btn-default">Categoría</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Category -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Categoría</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Category Section -->
      <section>
        <div class="container">
          <div class="row">

            <!-- Category Aside -->            
            <?php include_once 'includes/VC/aside.php'?>

            <!-- Category Body -->
            <div class="col-sm-9 padding-right">

              <!-- Category Image/Description -->
              <div class="row" style="margin-bottom: 50px;">

                <!-- Category Image -->
                <div class="col-sm-4">
                  <img src="resources/images/Paginas/6.CategoríaVC/1.png" alt="" class="" width="250px" height="300px">
                </div>

                <!-- Category Description -->
                <div class="col-sm-8 product-information">
                  <h4>Nombre de la Categoria</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum venenatis dui in
                    blandit. Ut tincidunt arcu id mi luctus, ac feugiat mauris hendrerit. Praesent dolor magna, interdum
                    ac egestas vel, porta et purus. Praesent id enim venenatis neque sagittis posuere vel eget enim.
                    Pellentesque suscipit libero dui, in efficitur eros porttitor quis. Etiam blandit nibh eu massa
                    varius, at vehicula elit efficitur. Curabitur hendrerit augue vel enim dictum finibus. Suspendisse
                    sed metus feugiat, ullamcorper orci non, egestas neque. Nulla accumsan mollis mollis. Fusce in ex
                    tincidunt, maximus neque sed, fringilla urna.
                  </p>
                </div>

              </div>

              <!-- Category Body Results -->
              <?php include_once 'includes/VC/bodyresults.php';?>

            </div>
          </div>

        </div>
      </section>
      <!-- End Category Section -->

    </article>
    <!-- End Article: Category -->

    <!-- Start Recommended Arrangements and Categories Article-->
    <article>

      <!-- Start Recommended Products Section -->
      <?php include_once 'includes/VC/recommendedproducts.php' ?>
      <!-- End Recommended Products Section -->

      <!-- Start Recommended Categories Section -->
      <?php include_once 'includes/VC/recommendedcategories.php' ?>
      <!-- End Recommended Categories Section -->

    </article>
    <!-- End Recommended Arrangements and Categories Article-->

    <!-- Start Notices Article-->
    <?php include_once 'includes/VC/notices.php' ?>
    <!-- End Notices Article-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php' ?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php' ?>

</body>

</html>