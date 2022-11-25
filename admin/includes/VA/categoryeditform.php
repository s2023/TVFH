          <!-- Start Category Create Form -->
          <form action="#">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button name="Botón Volver a la lista" class="btn btn-danger btn-circle" type="button" value="Volver a la lista"
                  onclick="location.href='categorieslist.php'" href="" title="Volver a la lista">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button name="Botón Guardar y cerrar" class="btn btn-danger btn-circle" type="button" value="Guardar y cerrar"
                  onclick="location.href='categorieslist.php'" href="" title="Guardar y cerrar">
                  <i class="fas fa-check"></i>
                </button>

                <button name="Botón Guardar y permanecer" class="btn btn-danger btn-circle" type="button"
                  value="Guardar y permanecer" onclick="location.href='" href="#" title="Guardar y permanecer">
                  <i class="fas fa-save"></i>
                </button>

                <!-- Lo dejé como anchor para que funcionara el target="_blank", no se como es pa button -->
                <a name="Botón Vista previa" class="btn btn-danger btn-circle" 
                  value="Vista previa" href="../categoria.php" target="_blank" title="Vista previa">
                  <i class="fas fa-search"></i>
                </a>

              </div>
            </div>

            <!-- Body Form -->
            <div class="card mb-4 p-5">
              <div class="shopper-informations">

                <!-- Row 1 Form Category Inputs -->
                <div class="row mb-5">

                  <!-- Data Category 1-->
                  <div class="col-sm-8">
                    <div class="bill-to">

                      <!-- Data Category Title-->
                      <h5>
                        Datos de la Categoría
                      </h5><br>

                      <!-- Data Category 1 Column 1 -->
                      <div class="form-one">

                        <!-- Data Category ID -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-shield-alt" title="ID de la Categoría"></i>
                              <h6>ID de la Categoría</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="9999999999"
                          title="Identificador único de la categoría registrada en la tienda."
                          maxlength="10" required disabled>

                        <!-- Data Category Name -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-folder" title="Nombre de la Categoría"></i>
                              <h6>Nombre de la Categoría</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Nombre de la Categoría" title="Nombre de la categoría registrada en la tienda." maxlength="30" value="Nombre de la Categoría" required>

                        <!-- Data Category Father -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-folder-tree" title="Categoría Padre"></i>
                              <h6>Categoría Padre</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Categoria padre de la categoría registrada en la tienda." required>
                          <!-- <option >
                            -- Categoría Padre --
                          </option> -->
                          <option title="Ocasiones">
                            <span>
                              Ocasiones
                            </span>
                          </option>
                          <!-- La categoria padre para todas las categorias es: Ocasiones -->
                          <!-- <option title="Bautizo">
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
                          </option> -->
                        </select>

                      </div>

                      <!-- Data Category 1 Column 2 -->
                      <div class="form-two">

                        <!-- Data Category Description  -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-info-circle"
                                title="Descripción de la Categoría"></i>
                              <h6>Descripción de la Categoría</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text" placeholder="Descripción de la Categoría" title="Descripción de la categoría registrada en la tienda." rows="4" maxlength="255" value="Descripción de la Categoría"></textarea>
                        
                        <!-- Data Category Image -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-image"
                                title="Imagen de la Categoría"></i>
                              <h6>Imagen de la Categoría</h6>
                            </div>
                          </div>
                        </div>
                        <input type="file" placeholder="Imagen de la Categoría" title="Imagen de la categoría registrada en la tienda.">

                      </div>

                    </div>
                  </div>

                  <!-- Data Category 2-->
                  <div class="col-sm-3 ce-inforight">
                    <div class="bill-to"><br><br>

                      <!-- Data Category State -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-check-circle" title="Estado de la Categoría"></i>
                            <h6>Estado de la Categoría</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Estado de la categoría del producto registrada en la tienda: Activada, Desactivada o Eliminada." required>
                        <option title="Activada">
                          <span>
                          Activada
                          </span>
                        </option>
                        <option title="Desactivada">
                          <span>
                          Desactivada
                          </span>
                        </option>
                        <option title="Eliminada">
                          <span>
                          Eliminada
                          </span>
                        </option>
                      </select>

                      <!-- Form Category Date High -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-plus" title="Fecha de Alta de la Categoría"></i>
                            <h6>Fecha de Alta de la Categoría</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="date" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de registro de la categoría registrada en la tienda." required disabled>

                      <!-- Form Category Date Low -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha de Baja de la Categoría"></i>
                            <h6>Fecha de Baja de la Categoría</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" placeholder="" title="Fecha de eliminación de la categoría registrada en la tienda." required disabled>

                    </div>
                  </div>

                </div>

              </div>
            </div>

          </form>
          <!-- End Category Create Form -->