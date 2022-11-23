<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Ver Pedido.">
  <!-- 19. Ver Pedido - VC -->
  <title>Ver Pedido - Florideas Holanda</title>

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
            <a href="listarpedidos.php" class="btn btn-default">Listar Pedidos</a>
            <a href="verpedido.php" class="btn btn-default">Ver Pedido</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: View Order -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Ver Pedido</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start View Order Section -->
      <section id="cart_items">
        <div class="container"> 

          <!-- Start Form View Order -->
          <form> 

            <!-- Data Order 1 -->
            <?php include_once 'includes/VC/verpedidodatos1.php'?>
            <!-- Items Cart -->
            <?php include_once 'includes/VC/vercarritotabla.php'?>   

            <!-- Data Order 2  -->      
            <?php include_once 'includes/VC/verpedidodatos2.php'?>

          </form>
          <!-- End Form View Order --> 
          
        </div>
      </section>
      <!-- End View Order Section -->

      <!-- Start Go Back List Orders Section -->
      <section>
        <div class="text-center">
          <a href="listarpedidos.php" title="Regresar a Listar Pedidos"><i class="fa-solid fa-arrow-left"></i> Regresar a Listar Pedidos</a>
        </div>
      </section>
      <!-- End Go Back List Orders Section -->

    </article>
    <!-- End Article: View Order-->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>