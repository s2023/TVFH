<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/CategoriaRepository.php';
  $categoriaRepository = new CategoriaRepository();
  $categorias = $categoriaRepository->listarTodos();
?>
      <!-- Start Main List Categories -->
      <main>
        
        <div class="container-fluid px-4">

          <!-- Main Title -->
          <h1 class="mt-4">Listar Categorías</h1>
          
          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php" title="Inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Listar Categorías</li>
          </ol>

          <!-- TODO: check this -->
          <!-- Start Advise OK  -->
          <?php //include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error Article-->
          <?php //include_once 'includes/VA/adviseerror.php'?>
          <!-- End Advise Error Article-->

          <!-- Buttons Menu -->
          <div class="card mb-4">
            <div class="card-body">
              <a class="btn btn-danger btn-circle" href="categorycreate.php" title="Crear Categoría">
                <i class="fas fa-folder-plus"></i>
              </a> 
            </div>
          </div>

          <!-- Main Table -->
          <div class="card mb-4">

            <!-- Header Table -->
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Categorías
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
                    <th>Nombre de Categoría</th>
                    <th>Categoría Padre</th>
                    <th>Fecha de Alta</th>
                    <th>Fecha de Baja</th>
                    <th>Estado de la Categoría</th>
                    <th>Total Productos</th>
                    <th>Opciones</th>
                  </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                  <?php foreach ($categorias as $categoria) { ?>
                    <tr>
                      <td><?php echo $categoria['idCategoria'] ?></td>
                      <td>
                        <!-- TODO: poner imagen -->
                        <img id="imgtable" src="../resources/images/Bautizo/10bautizo.png" alt="Imagen Categoría" title="Imagen Categoría">
                      </td>
                      <td><?php echo $categoria['nombreCategoria'] ?></td>
                      <td><?php echo $categoria['categoriaPadre'] ?></td>
                      <td><?php echo $categoria['fechaAltaCategoria'] ?></td>
                      <td><?php echo $categoria['fechaBajaCategoria'] ?></td>
                      <td><?php echo $categoria['nombreEstadoCategoria'] ?></td>
                      <td><?php echo $categoria['totalProductos'] ?></td>
                      <td>
                        <!-- Start Category Options Item-->
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                          <li class="nav-item dropdown">
                            <!-- Menu Button -->
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Opciones Categoría">
                              <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Menu List-->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <!-- Category View Option -->
                              <li>
                                <a class="dropdown-item" href="../categoria.php?id=<?php echo $categoria['idCategoria'] ?>" target="_blank" title="Ver Categoría"><i class="fas fa-eye"></i> Ver Categoría</a>
                              </li>
                              <!-- Category Edit Option -->
                              <li>
                                <a class="dropdown-item" href="categoryedit.php?id=<?php echo $categoria['idCategoria'] ?>" title="Editar Categoría"><i class="fas fa-edit"></i> Editar Categoría</a>
                              </li>
                              <!-- Divider Menu -->
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <!-- Category Activate Option -->
                              <li>
                                <a class="dropdown-item" href="#" title="Activar Categoría"><i class="fas fa-check-square"></i> Activar Categoría</a>
                              </li>
                              <!-- Category Deactivate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Desactivar Categoría"><i class="fas fa-ban"></i> Desactivar Categoría</a>
                              </li>
                              <!-- Category Duplicate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Duplicar Categoría"><i class="fas fa-clone"></i> Duplicar Categoría</a>
                              </li>
                              <!-- Category Eliminate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Eliminar Categoría"><i class="fas fa-trash"></i> Eliminar Categoría</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <!-- End Category Options Item-->
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Categories -->