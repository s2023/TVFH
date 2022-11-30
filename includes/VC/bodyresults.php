<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
  $productoRepository = new ProductoRepository();
  $resultados = array();

  if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];
    $resultados = $productoRepository->buscarProductos($busqueda);
  } else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultados = $productoRepository->buscarProductosPorCategoriaId($id);
  }
  ?>
<!-- Category/Search Body Results -->
<div class="features_items">

  <!-- Category/Search Results -->
  <h2 style="margin-bottom: 30px" class="title text-center">Resultados</h2>
  <p class="text-left">Se han encontrado (<?php echo sizeof($resultados) ?>) resultados.</p>

  <div class="row">
    <?php foreach ($resultados as $resultado) { ?>
      <!-- Product Thumbnail -->
      <div class="col-sm-4">
        <div class="product-image-wrapper">

          <!-- Miniatura producto info -->
          <div class="single-products">
            <!-- Miniatura producto info normal -->
            <div class="productinfo text-center">
              <!-- TODO: add image -->
              <img src="resources/images/Slider/slider6.png" alt="">
              <h2>$<?php echo $resultado['valorUnitarioProducto'] ?></h2>
              <p><?php echo $resultado['nombreProducto'] ?></p>
              <p><?php echo $resultado['nombreCategoria'] ?></p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa-solid fa-cart-plus"></i>Añadir al
                carrito</a>
            </div>
            <!-- Miniatura producto overlay -->
            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$<?php echo $resultado['valorUnitarioProducto'] ?></h2>
                <p><?php echo $resultado['nombreProducto'] ?></p>
                <a href="#" class="btn btn-default add-to-cart" title="Añadir al carrito"><i
                    class="fa-solid fa-cart-plus"></i>Añadir al carrito</a>
              </div>
            </div>
          </div>

          <!--Miniatura producto botones-->
          <div class="choose">
            <ul class="nav nav-pills nav-justified">
              <li>
                <a href="carrito.php" title="Comprar"><i class="fa-solid fa-cart-shopping"></i>Comprar</a>
              </li>
              <li>
                <a href="producto.php?id=<?php echo $resultado['idProducto'] ?>" title="Ver detalles"><i class="fa-solid fa-eye"></i>Ver detalles</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>