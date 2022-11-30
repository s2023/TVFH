<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/CategoriaRepository.php';
  $categoriaRepository = new CategoriaRepository();
  $categorias = $categoriaRepository->listarTodosActivados();
?>
<!-- Start Recommended Categories Section -->
      <section>
        <div class="container px-4 px-lg-5 mt-5">
          <!-- Categories Recomended -->
          <div class="recommended_items">
            <!-- Categories Recomended Title -->
            <h2 class="title text-center">Categorías Recomendadas</h2>
            <div class="text-right"><a class="btn btn-outline-dark mt-auto" href="#" title="Ver más">Ver más</a></div><br>
            <!-- Categories Recomended Carousel --> <!--modulo para copiar a otras pags -->
            <div id="recommended-item-carousel1" class="carousel slide" data-bs-ride="carousel">
              <!-- Carousel Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#recommended-item-carousel1" data-bs-slide-to="0"
                  class="active"></button>
                <button type="button" data-bs-target="#recommended-item-carousel1" data-bs-slide-to="1"></button>
              </div>
              <!-- Carousel Content -->
              <div class="carousel-inner">
                <!-- Carousel Content Item Active -->
                <div class="carousel-item active">
                  <?php foreach ($categorias as $categoria) { ?>
                    <!-- Carousel Category Miniature-->
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <!-- TODO: agregar imagen -->
                            <a href="categoria.php?id=<?php echo $producto['idCategoria'] ?>">
                              <img src="resources/images/Funeral/3funeral.png" alt="">
                            </a><br><br>
                            <a href="categoria.php?id=<?php echo $producto['idCategoria'] ?>"
                              title="<?php echo $producto['nombreCategoria'] ?>">
                              <p><?php echo $producto['nombreCategoria'] ?></p>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <!-- Carousel Content Item -->
                <!-- <div class="carousel-item"> -->
                  <!-- Carousel Category Miniature-->
                  <!-- <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <a href="categoria.php"><img src="resources/images/Matrimonios/3matrimonio.png" alt=""></a><br><br>
                          <a href="categoria.php" title="Categoría">
                            <p>Categoría</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div> -->
                <!-- </div> -->
              </div>
              <!-- Carousel Button prev -->
              <a class="left recommended-item-control" href="#recommended-item-carousel1" role="bu"
                data-bs-slide="prev" alt="AnteriorSlide" title="Anterior">
                <i class="fa fa-angle-left"></i>
              </a>
              <!-- Carousel Button next -->
              <a class="right recommended-item-control" href="#recommended-item-carousel1" data-bs-slide="next"
                alt="SiguienteSlide" title="Siguiente">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- End Recommended Categories Section -->