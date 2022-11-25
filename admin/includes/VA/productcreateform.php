          <!-- Start Product Create Form -->
          <form action="#">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button name="Botón Volver a la lista" class="btn btn-danger btn-circle" type="button" value="Volver a la lista"
                  onclick="location.href='productslist.php'" href="" title="Volver a la lista">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button name="Botón Guardar y cerrar" class="btn btn-danger btn-circle" type="button" value="Guardar y cerrar"
                  onclick="location.href='productslist.php'" href="" title="Guardar y cerrar">
                  <i class="fas fa-check"></i>
                </button>

                <button name="Botón Guardar y permanecer" class="btn btn-danger btn-circle" type="button"
                  value="Guardar y permanecer" onclick="location.href='" href="#" title="Guardar y permanecer">
                  <i class="fas fa-save"></i>
                </button>

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
                        <input type="text" placeholder="9999999999"
                          title="ID del Producto. Identificador único del producto registrado en la tienda."
                          maxlength="10" required disabled>

                        <!-- Data Product Name -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombre del Producto"></i>
                              <h6>Nombre del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Nombres del Producto" title="Nombre del producto registrado en la tienda." maxlength="30" required>

                        <!-- Data Product Category -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-id-card" title="Categoría del Producto"></i>
                              <h6>Categoría del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Categoría a la cual pertenece el producto registrado en la tienda." required>
                          <option >
                            -- Categoría del Producto --
                          </option>
                          <option title="Bautizo">
                            <span>
                              Bautizo
                            </span>
                          </option>
                          <option title="Bouquet">
                            <span>
                            Bouquet
                            </span>
                          </option>
                          <option title="Cajas de Rosas">
                            <span>
                              Cajas de Rosas
                            </span>
                          </option>
                          <option title="Diseños Especiales">
                            <span>
                              Diseños Especiales
                            </span>
                          </option>                          
                          <option title="Ekibanas (Ramos pequeños)">
                            <span>
                              Ekibanas (Ramos pequeños)
                            </span>
                          </option>                          
                          <option title="Funeral">
                            <span>
                              Funeral
                            </span>
                          </option>                          
                          <option title="Matrimonio">
                            <span>
                              Matrimonio
                            </span>
                          </option>
                          <option title="Primera Comunión">
                            <span>
                              Primera Comunión
                            </span>
                          </option>
                          <option title="Ramos Fruteros">
                            <span>
                              Ramos Fruteros
                            </span>
                          </option>
                        </select>

                        <!-- Data Product SKU (Stock Keeping Unit) -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user-lock" title="SKU del Producto"></i>
                              <h6>SKU del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="SKU (Stock Keeping Unit)"
                          title="SKU (Stock Keeping Unit) Unidad de mantenimiento de stock. Código referencia de inventario del producto que maneja la empresa internamente."
                          maxlength="20">

                      </div>

                      <!-- Data Product 1 Column 2 -->
                      <div class="form-two">

                        <!-- Data Product Unit Value (Capturar $) -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Valor unitario del Producto"></i>
                              <h6>Valor unitario del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="$" title="Valor unitario del producto registrado en la tienda." maxlength="12"
                          required>

                        <!-- Data Product Description Short -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                                title="Descripción corta del Producto"></i>
                              <h6>Descripción corta del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text" placeholder="Descripción corta del Producto" title="Descripción corta del producto registrado en la tienda." rows="4" maxlength="255"></textarea>
                        
                        <!-- Data Product Description Long -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                                title="Descripción larga del Producto"></i>
                              <h6>Descripción larga del Producto</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text" placeholder="Descripción larga del Producto" title="Descripción larga del producto registrado en la tienda." rows="4" maxlength="2000"></textarea>

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
                            <i style="margin-right: 10px" class="fas fa-user-check" title="Estado del Usuario"></i>
                            <h6>Estado del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Estado del producto registrado en la tienda: Activado, Desactivado, Borrador o Eliminado." required>
                        <option title="Activado">
                          <span>
                          Activado
                          </span>
                        </option>
                        <option title="Desactivado">
                          <span>
                          Desactivado
                          </span>
                        </option>
                        <option title="Borrador">
                          <span>
                          Borrador
                          </span>
                        </option>
                        <option title="Eliminado">
                          <span>
                          Eliminado
                          </span>
                        </option>
                      </select>

                      <!-- Data Product Visibility -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-user-check" title="Visibilidad del Usuario"></i>
                            <h6>Visibilidad del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Visibilidad del producto en la tienda: Público o Privado." required>
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
                      <input type="date" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de registro del producto registrado en la tienda." required disabled>

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
                      <input type="datetime-local" placeholder="" title="Fecha de eliminación del producto registrado en la tienda." required disabled>

                      <!-- Data Product Image -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                              title="Imagen del Producto"></i>
                            <h6>Imagen del Producto</h6>
                          </div>
                        </div>
                      </div>
                      <input type="file" placeholder="Imagen del Producto" title="Imagen del producto registrado en la tienda.">

                    </div>
                  </div>

                </div>

              </div>
            </div>

          </form>
          <!-- End Product Create Form -->