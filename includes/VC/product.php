<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/constantes/constantes.php';
$productoRepository = new ProductoRepository();
$producto = null;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $producto = $productoRepository->buscarPorId($id);
}
?>
<?php if ($producto == null) { ?>
  <!-- Start Advise Error -->
  <div class="adviseerror">
    <img src="resources/images/otrasImag/iconErrorX.png">
    <br><h5>Producto no disponible</h5><br>
  </div>
  <!-- End Advise Error -->
<?php } else { ?>
<!-- Product Body -->
<div class="col-sm-9 padding-right">

  <!-- Product Image/Details -->
  <div class="product-details">

    <!-- Product Image -->
    <div class="col-sm-5">
      <div class="view-product">
        <!-- TODO: add image -->
        <img src="resources/images/Ramos fruteros/3ramosfruteros.png" alt="">
        <a href="#">
          <h3><i class="fa-solid fa-magnifying-glass-plus"></i></h3>
        </a>
      </div>
    </div>

    <!-- Product Details -->
    <div class="col-sm-7">
      <div class="product-information">
        <?php
          switch ($producto->estadoProductoId) {
            case EPR_ACTIVADO:
              echo '<p><b style="background-color:green; color: white;">Disponible</b></p>';
              break;
            case EPR_DESACTIVADO:
              echo '<p><b style="background-color:red; color: white;">No Disponible</b></p>';
              break;
            default:
              echo "";
              break;
          }
        ?>
        <h4><?php echo $producto->nombreProducto ?></h4>
        <a href="categoria.html?id=<?php echo $producto->categoriaId ?>">
          <h5>Categoria: <?php echo $producto->nombreCategoria ?></h5>
        </a>
        <p>SKU: <?php echo $producto->skuProducto ?></p>
        <span>
          <span>$<?php echo $producto->valorUnitarioProducto ?></span>
          <label>Cantidad:</label>
          <input type="text" value="1"><br><br>
          <button type="button" class="btn btn-default add-to-cart">
            <i class="fa fa-cart-plus"></i>
            Añadir al carrito
          </button>
          <!-- (boton copiado) -->
          <button type="button" class="btn btn-default add-to-cart">
            <i class="fa fa-cart-shopping"></i>
            Comprar
          </button>
        </span>
        <p>Descripcion corta (max 255c): <?php echo $producto->descripcionCortaProducto ?></p>
      </div>
    </div>

  </div>

  <!-- Product Description -->
  <div class="category-tab shop-details-tab">
    <!-- Description bar -->
    <div class="col-sm-12">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#description" data-toggle="tab">Descripción</a></li>
      </ul>
    </div>
    <!-- Description Large -->
    <div class="tab-content">
      <div class="tab-pane active in" id="description">
        <div class="col-sm-12">
          <p>Descripción larga (max 2000c): <?php echo $producto->descripcionLargaProducto ?></p>
        </div>
      </div>
    </div>
  </div>

</div>
<?php } ?>