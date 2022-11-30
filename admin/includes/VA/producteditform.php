<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/CategoriaRepository.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/EstadoProductoRepository.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/VisibilidadProductoRepository.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
  $categoriaRepository = new CategoriaRepository();
  $estadoProductoRepository = new EstadoProductoRepository();
  $visibilidadProductoRepository = new VisibilidadProductoRepository();
  $productoRepository = new ProductoRepository();

  $categorias = $categoriaRepository->listarTodos();
  $estados = $estadoProductoRepository->listarTodos();
  $visibilidades = $visibilidadProductoRepository->listarTodos();
  $producto = $productoRepository->buscarPorId($_GET['id']);
?>
          <!-- Start Product Edit Form -->
          <form action="acciones/editarproducto.php?id=<?php echo $producto->idProducto ?>" method="post">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button class="btn btn-danger btn-circle" type="button" value="Volver a la lista"
                  onclick="location.href='productslist.php'" href="" title="Volver a la lista">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button class="btn btn-danger btn-circle" type="submit" value="Guardar y cerrar"
                  title="Guardar y cerrar">
                  <i class="fas fa-check"></i>
                </button>

                <!-- TODO: no usar este -->
                <!-- <button name="Botón Guardar y permanecer" class="btn btn-danger btn-circle" type="button"
                  value="Guardar y permanecer" onclick="location.href='" href="#" title="Guardar y permanecer">
                  <i class="fas fa-save"></i>
                </button> -->

                <!-- TODO: no usar este -->
                <!-- Lo dejé como anchor para que funcionara el target="_blank", no se como es pa button -->
                <!-- <a name="Botón Vista previa" class="btn btn-danger btn-circle" 
                  value="Vista previa" href="../producto.php" target="_blank" title="Vista previa">
                  <i class="fas fa-search"></i>
                </a> -->

              </div>
            </div>

            <!-- Body Form -->
            <div class="card mb-4 p-5">
              <div class="shopper-informations">

                <!-- Row 1 Form Product Inputs -->
                <div class="row mb-5">

                  <!-- Data Product 1-->
                  <div class="col-sm-8">
                    <div class="bill-to">

                      <!-- Data Product Title-->
                      <h5>
                        Datos del Producto
                      </h5><br>

                      <!-- Data Product 1 Column 1 -->
                      <div class="form-one">

                        <!-- Data Product ID -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-shield-alt" title="ID del Producto"></i>
                              <h6>ID del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" value="<?php echo $producto->idProducto ?>"
                          title="Identificador único del producto registrado en la tienda."
                          maxlength="10" required disabled>

                        <!-- Data Product Name -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-file" title="Nombre del Producto"></i>
                              <h6>Nombre del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Nombre del Producto" title="Nombre del producto registrado en la tienda." maxlength="30" required
                          id="nombreProducto" name="nombreProducto" value="<?php echo $producto->nombreProducto ?>">

                        <!-- Data Product Category -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-folder-tree" title="Categoría del Producto"></i>
                              <h6>Categoría del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Categoría a la cual pertenece el producto registrado en la tienda." required
                          id="categoriaId" name="categoriaId">
                          <option value>
                            -- Categoría del Producto --
                          </option>
                          <?php foreach ($categorias as $categoria) { ?>
                            <?php if ($producto->categoriaId == $categoria['idCategoria']) { ?>
                              <option value="<?php echo $categoria['idCategoria'] ?>" selected>
                                <?php echo $categoria['nombreCategoria'] ?>
                              </option>
                            <?php } else { ?>
                              <option value="<?php echo $categoria['idCategoria'] ?>">
                                <?php echo $categoria['nombreCategoria'] ?>
                              </option>
                            <?php } ?>
                          <?php } ?>
                        </select>

                        <!-- Data Product SKU (Stock Keeping Unit) -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-barcode" title="SKU del Producto"></i>
                              <h6>SKU del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="SKU (Stock Keeping Unit)"
                          title="SKU (Stock Keeping Unit) Unidad de mantenimiento de stock. Código referencia de inventario del producto que maneja la empresa internamente."
                          maxlength="20" id="skuProducto" name="skuProducto" value="<?php echo $producto->skuProducto ?>">

                        <!-- Data Product Unit Value (Capturar $) -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-dollar-sign" title="Valor unitario del Producto"></i>
                              <h6>Valor unitario del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="$" title="Valor unitario del producto registrado en la tienda." maxlength="12"
                          required id="valorUnitarioProducto" name="valorUnitarioProducto" value="<?php echo $producto->valorUnitarioProducto ?>">

                      </div>

                      <!-- Data Product 1 Column 2 -->
                      <div class="form-two">

                        <!-- Data Product Description Short -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-info-circle"
                                title="Descripción corta del Producto"></i>
                              <h6>Descripción corta del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text"
                          placeholder="Descripción corta del Producto"
                          title="Descripción corta del producto registrado en la tienda."
                          rows="4" maxlength="255" id="descripcionCortaProducto" name="descripcionCortaProducto"
                          ><?php echo $producto->descripcionCortaProducto ?></textarea>
                        
                        <!-- Data Product Description Long -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-info-circle"
                                title="Descripción larga del Producto"></i>
                              <h6>Descripción larga del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text"
                          placeholder="Descripción larga del Producto"
                          title="Descripción larga del producto registrado en la tienda."
                          rows="4" maxlength="2000" id="descripcionLargaProducto" name="descripcionLargaProducto"
                          ><?php echo $producto->descripcionLargaProducto ?></textarea>

                        <!-- Data Product Image -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-image"
                                title="Imagen del Producto"></i>
                              <h6>Imagen del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="file" placeholder="Imagen del Producto" title="Imagen del producto registrado en la tienda.">

                      </div>

                    </div>
                  </div>

                  <!-- Data Product 2-->
                  <div class="col-sm-3 ce-inforight">
                    <div class="bill-to"><br><br>

                      <!-- Data Product State -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-check-circle" title="Estado del Producto"></i>
                            <h6>Estado del Producto</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Estado del producto registrado en la tienda: Activado, Desactivado, Borrador o Eliminado." required
                        id="estadoProductoId" name="estadoProductoId">
                        <?php foreach ($estados as $estado) { ?>
                          <?php if ($producto->estadoProductoId == $estado['idEstadoProducto']) { ?>
                            <option value="<?php echo $estado['idEstadoProducto'] ?>" selected>
                          <?php echo $estado['nombreEstadoProducto'] ?>
                          </option>
                            <?php } else { ?>
                              <option value="<?php echo $estado['idEstadoProducto'] ?>">
                          <?php echo $estado['nombreEstadoProducto'] ?>
                          </option>
                            <?php } ?>
                        <?php } ?>
                      </select>

                      <!-- Data Product Visibility -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-low-vision" title="Visibilidad del Producto"></i>
                            <h6>Visibilidad del Producto</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Visibilidad del producto en la tienda: Público o Privado." required
                        id="visibilidadProductoId" name="visibilidadProductoId">
                        <option title="Activado">
                          <span>
                          Público
                          </span>
                        </option>
                        <option title="Desactivado">
                          <span>
                          Privado
                          </span>
                        </option>
                      </select>

                      <!-- Form Product Date High -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-plus" title="Fecha de Alta del Producto"></i>
                            <h6>Fecha de Alta del Producto</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="date"
                        value="<?php echo date_format(date_create($producto->fechaAltaProducto), "Y-m-d");?>"
                        title="Fecha de registro del producto registrado en la tienda." required disabled>

                      <!-- Form Product Date Low -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha de Baja del Producto"></i>
                            <h6>Fecha de Baja del Producto</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" placeholder="" title="Fecha de eliminación del producto registrado en la tienda." required disabled
                        id="fechaBajaProducto" name="fechaBajaProducto">

                    </div>
                  </div>

                </div>

              </div>
            </div>

          </form>
          <!-- End Product Edit Form -->