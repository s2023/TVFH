<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Listar Pedidos.">
  <!-- 18. Listar Pedidos - VC -->
  <title>Listar Pedidos - Florideas Holanda</title>

  <!-- Head -->
  <?php include_once 'includes/VC/head.php' ?>

  <!-- Plantilla table -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <!-- <link href="resources/css/styles.css" rel="stylesheet"/> ???? copia de estilos de la tabla de admin  -->
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
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
            <a href="verusuario.php" class="btn btn-default">Menú Usuario</a>
            <a href="listarpedidos.php" class="btn btn-default">Listar Pedidos</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: List Orders -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Listar Pedidos</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/PedidoRepository.php';
        @session_start();
        $pedidoRepository = new PedidoRepository();
        $pedidos = $pedidoRepository->listarPedidoPorUsuario($_SESSION['idUsuario']);
      ?>

      
        <!-- Start List Orders Section -->
      <section>
        <div class="container">
          <div class="card mb-4">

            <!-- List Orders Header -->
            <div class="card-header">
              <i class="fas fa-table me-1"></i> Listar Pedidos
            </div>

            <!-- List Orders Body -->
            <div class="card-body">
              <?php if (sizeof($pedidos) > 0) { ?>
              <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                
                <!-- Table Top -->
                <div class="dataTable-top">

                  <!-- Selector Items by Page -->
                  <div class="dataTable-dropdown">
                    <label>
                      <select class="dataTable-selector">
                        <option value="5">5</option>
                        <option value="10" selected="">10</option>
                        <!-- <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option> -->
                      </select> resultados por página.
                    </label>
                  </div>

                  <!-- Search Order Box -->
                  <div class="dataTable-search">
                    <input class="dataTable-input" placeholder="Buscar..." type="text">
                  </div>

                </div>

                

                <!-- Table Container -->
                <div class="dataTable-container">

                  <table id="datatablesSimple" class="dataTable-table">

                    <thead>
                      <tr>
                        <th data-sortable="" style="width: 15.0672%;">
                          <a href="#" class="dataTable-sorter">ID Pedido</a>
                        </th>
                        <th data-sortable="" style="width: 15.0672%;">
                          <a href="#" class="dataTable-sorter">Fecha Inicio</a>
                        </th>
                        <th data-sortable="" style="width: 15.0672%;">
                          <a href="#" class="dataTable-sorter">Fecha Entrega</a>
                        </th>
                        <th data-sortable="" style="width: 15.0672%;">
                          <a href="#" class="dataTable-sorter">Fecha Fin</a>
                        </th>
                        <th data-sortable="" style="width: 15.0672%;">
                          <a href="#" class="dataTable-sorter">Estado</a>
                        </th>
                        <th data-sortable="" style="width: 11.3244%;">
                          <a href="#" class="dataTable-sorter">Total</a>
                        </th>
                        <th data-sortable="" style="width: 9.02111%;">
                          <a href="#" class="dataTable-sorter">Ver</a>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php foreach ($pedidos as $pedido) { ?>
                        <tr>
                          <td><?php echo $pedido['idPedido'] ?></td>
                          <td><?php echo $pedido['fechaInicioPedido'] ?></td>
                          <td><?php echo $pedido['fechaEntregaPedido'] ?></td>
                          <td><?php echo $pedido['fechaFinPedido'] ?></td>
                          <td><?php echo $pedido['nombreEstadoPedido'] ?></td>
                          <td>$<?php echo $pedido['totalPedido'] ?></td>
                          <td>
                            <a href="verpedido.php?id=<?php echo $pedido['idPedido'] ?>"
                              title="Ver Pedido">
                              <i aria-hidden="true" class="fa-solid fa-money-check-dollar"></i>
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  
                  </table>
                  
                </div>

                <!-- Table Bottom -->
                <div class="dataTable-bottom">
                  <div class="dataTable-info">Mostrando 1 a 10 de 6 ítems.</div>
                  <nav class="dataTable-pagination">
                    <ul class="dataTable-pagination-list">
                      <li class="pager"><a href="#" data-page="1">‹</a></li>
                      <li class="active"><a href="#" data-page="1">1</a></li>
                      <li class="pager"><a href="#" data-page="3">›</a></li>
                    </ul>
                  </nav>
                </div>

              </div>
              <?php } else { ?>
              <div class="alert alert-warning text-center">
                No tienes pedidos
              </div>
              <?php } ?>
            </div>

          </div>
        </div>
      </section>
      <!-- End List Orders Section -->

      <!-- Start Go Back User Menú Section -->
      <section>
        <div class="text-center">
          <a href="verusuario.php" title="Regresar al Menú Usuario"><i class="fa-solid fa-arrow-left"></i> Regresar al
            Menú Usuario</a>
        </div>
      </section>
      <!-- End Go Back User Menú Section -->

    </article>
    <!-- End Article: List Orders -->


  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php' ?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php' ?>

  <!-- Plantilla table -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="plantillas/sbadmin/js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="plantillas/sbadmin/js/datatables-simple-demo.js"></script>

</body>

</html>