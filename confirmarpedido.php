<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Confirmar Pedido.">
  <!-- 15. Confirmar Pedido - VC -->
  <title>Confirmar Pedido - Florideas Holanda</title>

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
            <a href="confirmarpedido.php" class="btn btn-default">Confirmar Pedido</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Confirm Order -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Confirmar Pedido</h1>
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
                <li><i onclick="location.href='carrito.php'" title="Carrito de Compras" style="color: #8C8C88;" class="fa-solid fa-cart-shopping"></i></li>
                <hr size="50px" class="lineabr">
                <li><a><i title="Confirmar Pedido" class="fa-solid fa-truck"></i></a></li>
              </ol>
            </div>
            
          </div>
        
        </div>
      </section>
      <!-- End Cart Breadcrumb Section -->
      
      <!-- Start Cart Section -->
      <section id="cart_items">
        <div class="container"> 

          <!-- Start Form Confirm Order -->
          <form> 

            <!-- Data Order 1 -->
            <?php include_once 'includes/VC/pedidodatos1.php'?>
            
            <!-- Items Cart -->
            <?php include_once 'includes/VC/carritotabla.php'?>   

            <!-- Start Data Order 2 Section -->      
            <?php include_once 'includes/VC/pedidodatos2.php'?>

          </form>
          <!-- End Form Confirm Order --> 

        </div>
      </section>
      <!-- End Cart Section -->

    </article>
    <!-- End Article: Confirm Order-->
    
  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>