<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/ProductoRepository.php';
  $productoRepository = new ProductoRepository();
  $productos = $productoRepository->listarTodos();
?>
      <!-- Start Main List Products -->
      <main>
        
        <div class="container-fluid px-4">

          <!-- Main Title -->
          <h1 class="mt-4">Listar Productos</h1>
          
          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php" title="Inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Listar Productos</li>
          </ol>
          
          <!-- TODO: check signs -->
          <!-- Start Advise OK  -->
          <?php if (isset($_GET['success']) && $_GET['success'] == 'true') include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error -->
          <?php //include_once 'includes/VA/adviseerror.php'?>
          <!-- End Advise Error -->

          <!-- Buttons Menu -->
          <div class="card mb-4">
            <div class="card-body">
              <a class="btn btn-danger btn-circle" href="productcreate.php" title="Crear Producto">
              <i class="fas fa-file-medical"></i>
              </a> 
            </div>
          </div>

          <!-- Main Table -->
          <div class="card mb-4">

            <!-- Header Table -->
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Productos
            </div>
            
            <!-- Body Table -->
            <!-- Nota: Automaticamente se ajusta a la cantidad de datos, se pueden buscar datos en la tabla y mostrar numero de items. -->
            <div class="card-body">
              <table id="datatablesSimple">

                <!-- Table Head -->
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre del Producto</th>
                    <th>Categoría del Producto</th>
                    <th>Valor</th>
                    <th>Total Ventas</th>
                    <th>Fecha de Alta</th>
                    <th>Fecha de Baja</th>
                    <th>Visibilidad</th>
                    <th>Estado del Producto</th>
                    <th>Opciones</th>
                  </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                  <?php foreach ($productos as $producto) { ?>
                    <tr>
                      <td><?php echo $producto['idProducto'] ?></td>
                      <td>
                        <!-- TODO: agregar imagen -->
                        <img id="imgtable" src="../resources/images/Bautizo/6bautizo.png" alt="Imagen Categoría" title="Imagen Categoría">
                      </td>
                      <td><?php echo $producto['nombreProducto'] ?></td>
                      <td><?php echo $producto['nombreCategoria'] ?></td>
                      <td>$<?php echo $producto['valorUnitarioProducto'] ?></td>
                      <td><?php echo $producto['totalVentas'] ?></td>
                      <td><?php echo $producto['fechaAltaProducto'] ?></td>
                      <td><?php echo $producto['fechaBajaProducto'] ?></td>
                      <td><?php echo $producto['nombreVisibilidadProducto'] ?></td>
                      <td><?php echo $producto['nombreEstadoProducto'] ?></td>
                      <td>
                        <!-- Start Product Options Item-->
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                          <li class="nav-item dropdown">
                            <!-- Menu Button -->
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Opciones Producto">
                              <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Menu List-->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <!-- Product View Option -->
                              <li>
                                <a class="dropdown-item" href="../producto.php?id=<?php echo $producto['idProducto'] ?>" target="_blank" title="Ver Producto"><i class="fas fa-eye"></i> Ver Producto</a>
                              </li>
                              <!-- Product Edit Option -->
                              <li>
                                <a class="dropdown-item" href="productedit.php?id=<?php echo $producto['idProducto'] ?>" title="Editar Producto"><i class="fas fa-edit"></i> Editar Producto</a>
                              </li>
                              <!-- Divider Menu -->
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <!-- TODO: poner funcionalidad para despues -->
                              <!-- Product Activate Option -->
                              <li>
                                <a class="dropdown-item" href="#" title="Activar Producto"><i class="fas fa-check-square"></i> Activar Producto</a>
                              </li>
                              <!-- Product Deactivate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Desactivar Producto"><i class="fas fa-ban"></i> Desactivar Producto</a>
                              </li>
                              <!-- Product Duplicate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Duplicar Producto"><i class="fas fa-clone"></i> Duplicar Producto</a>
                              </li>
                              <!-- Product Eliminate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Eliminar Producto"><i class="fas fa-trash"></i> Eliminar Producto</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <!-- End Product Options Item-->
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Products -->