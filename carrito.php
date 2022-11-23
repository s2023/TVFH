<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Carrito de Compras.">
  <!-- 8. Carrito de Compras / VC -->
  <title>Carrito de Compras - Florideas Holanda</title>

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
            <a href="carrito.php" class="btn btn-default">Carrito de Compras</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Shopping Cart -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Carrito de Compras</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Cart Breadcrumb Section -->
      <section id="cart_items">
        <div class="container">  

          <!-- Breadcrumb container -->
          <div class="row d-flex justify-content-end">

            <!-- Breadcrumb cart -->
            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li><a><i title="Carrito de Compras" class="fa-solid fa-cart-shopping"></i></a></li>
                <hr size="50px" class="lineabr">
                <li><i title="Confirmar Pedido" style="color: #8C8C88;" class="fa-solid fa-truck"></i></li>
              </ol>
            </div>

          </div>

        </div>
      </section>
      <!-- End Cart Breadcrumb Section -->

      <!-- Start Cart Section -->
      <section id="cart_items">
        <div class="container">

          <!-- Start Form Shopping Cart -->
          <form> 

            <!-- Items Cart -->
            <?php include_once 'includes/VC/carritotabla.php'?>

            <!-- Actions Cart -->
            <?php include_once 'includes/VC/actionscart.php'?>
          
          </form>
          <!-- End Form Shopping Cart -->

        </div>
      </section>
      <!-- End Cart Section -->

    </article>
    <!-- End Article: Shopping Cart -->

    
    <!-- Link de ejemplo para ir a confirmar pedido -->
    <div class="text-center">
      <a href="confirmarpedido.php" title="confirmar pedido link">Link de ejemplo para ir a confirmar pedido </a>
    </div>
    

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