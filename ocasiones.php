<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description" content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Categoria Padre: Ocasiones.">
  <!-- 5. Ocasiones / VC -->
  <title>Ocasiones - Florideas Holanda</title>

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
            <a href="ocasiones.php" class="btn btn-default">Ocasiones</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->    

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Ocassions-->
    <article>
      
      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Ocasiones</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Ocassions Section -->
      <section class="container">
        <!-- Ocassions Content -->
        <div class="row ">
          <!-- Ocassions Image -->
          <div class="col-md-5 ">
            <div class="d-flex">
              <img src="resources/images/Paginas/5.OcasionesVC/1.png" alt="" class="" width="400px" height="400px">                
            </div>
          </div> 
          <!-- Ocassions List Categories -->
          <div class="col-md-5">
            <div style="margin: 50px;">
              <p style="font-size: 1.2em;" class="mb-5">            
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Bautizo">Bautizo</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Bouquet">Bouquet</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Cajas de Rosas">Cajas de Rosas</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="iseños Especiales">Diseños Especiales</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Ekibanas (Ramos pequeños)">Ekibanas (Ramos pequeños)</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Funeral">Funeral</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Matrimonio">Matrimonio</a> <br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Primera Comunión">Primera Comunión</a><br>
                <i class="fa-sharp fa-solid fa-fan"></i> <a href="categoria.php" title="Ramos Fruteros">Ramos Fruteros</a><br>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Ocassions Section -->

    </article>
    <!-- End Article: Ocassions-->

    <!-- Start Recommended Categories Article-->
    <article>

      <!-- Start Recommended Categories Section -->
      <?php include_once 'includes/VC/recommendedcategories.php'?>
      <!-- End Recommended Categories Section -->

    </article>
    <!-- End Recommended Categories Article-->

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