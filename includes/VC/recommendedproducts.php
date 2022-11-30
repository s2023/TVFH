<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
  $productRepository = new ProductoRepository();
  $productos = $productRepository->listarTodos();
?>
<!-- Start Recommended Products Section -->
      <section>
        <div class="container px-4 px-lg-5 mt-5">
          <!-- Recommended Products -->
          <div class="recommended_items">
            <!-- Recommended Products Title -->
            <h2 class="title text-center">Productos Recomendados</h2>
            <div class="text-right"><a class="btn btn-outline-dark mt-auto" href="#" title="Ver más">Ver más</a></div><br>
            <!-- Recommended Products Carousel -->
            <div id="recommended-item-carousel" class="carousel slide" data-bs-ride="carousel">
              <!-- Carousel Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#recommended-item-carousel" data-bs-slide-to="0"
                  class="active"></button>
                <button type="button" data-bs-target="#recommended-item-carousel" data-bs-slide-to="1"></button>
              </div>
              <!-- Carousel Content -->
              <div class="carousel-inner">
                <!-- Carousel Content Item Active -->
                <div class="carousel-item active">
                  <?php foreach ($productos as $producto) { ?>
                    <!-- Carousel Product Miniature-->
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <!-- TODO agregar metodo de imagen -->
                            <a href="producto.php?id=<?php echo $producto['idProducto'] ?>">
                              <img src="resources/images/Ekibanas/1ekibanas.png" alt="">
                            </a>
                            <h2>$<?php echo $producto['valorUnitarioProducto'] ?></h2>
                            <a href="producto.php?id=<?php echo $producto['idProducto'] ?>"
                              title="<?php echo $producto['nombreProducto'] ?>">
                              <p><?php echo $producto['nombreProducto'] ?></p>
                            </a>
                            <a href="categoria.php?id=<?php echo $producto['categoriaId'] ?>"
                              title="<?php echo $producto['nombreCategoria'] ?>">
                              <p><?php echo $producto['nombreCategoria'] ?></p>
                            </a>
                            <a href=""
                              class="btn btn-default add-to-cart"
                              title="Añadir al carrito">
                              <i aria-hidden="true" class="fa-solid fa-cart-plus"></i>Añadir al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <!-- Carousel Content Item -->
                <!-- <div class="carousel-item"> -->
                  <!-- Carousel Product Miniature-->
                  <!-- <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <a href="producto.php"><img src="resources/images/Diseños especiales/4despeciales.png" alt=""></a>
                          <h2>$0</h2>
                          <a href="producto.php">
                            <p>Nombre del producto</p>
                          </a>
                          <a href="categoria.php">
                            <p>Categoría</p>
                          </a>
                          <a href="" class="btn btn-default add-to-cart"><i class="fa-solid fa-cart-plus"></i>Añadir al
                            carrito</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- Carousel Button prev -->
              <a class="left recommended-item-control" href="#recommended-item-carousel" role="bu" data-bs-slide="prev"
                alt="AnteriorSlide" title="Anterior">
                <i class="fa fa-angle-left"></i>
              </a>
              <!-- Carousel Button next -->
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-bs-slide="next"
                alt="SiguienteSlide" title="Siguiente">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div><br> <br>
        </div>
      </section>
      <!-- End Recommended Arrangements Section -->