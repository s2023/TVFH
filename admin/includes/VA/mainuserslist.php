<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';
  $usuarioRepository = new UsuarioRepository();
  $usuarios = $usuarioRepository->listarTodos();
?>
      <!-- Start Main List Users -->
      <main>
        
        <div class="container-fluid px-4">

          <!-- Main Title -->
          <h1 class="mt-4">Listar Usuarios</h1>
          
          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php" title="Inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Listar Usuarios</li>
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
              <a class="btn btn-danger btn-circle" href="usercreate.php" title="Crear Usuario">
                <i class="fa fa-user-plus"></i>
              </a> 
            </div>
          </div>

          <!-- Main Table -->
          <div class="card mb-4">

            <!-- Header Table -->
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Usuarios
            </div>
            
            <!-- Body Table -->
            <!-- Nota: Automaticamente se ajusta a la cantidad de datos, se pueden buscar datos en la tabla y mostrar numero de items. -->
            <div class="card-body">
              <table id="datatablesSimple">

                <!-- Table Head -->
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tipo de Usuario</th>
                    <th>Apodo del Usuario</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Alta</th>
                    <th>Fecha de Baja</th>
                    <th>Estado del Usuario</th>
                    <th>Total Pedidos</th>
                    <th>Opciones</th>
                  </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                  <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                      <td><?php echo $usuario['idUsuario'] ?></td>
                      <td><?php echo $usuario['nombreTipoUsuario'] ?></td>
                      <td><?php echo $usuario['apodoUsuario'] ?></td>
                      <td><?php echo $usuario['nombresUsuario'] ?></td>
                      <td><?php echo $usuario['apellidosUsuario'] ?></td>
                      <td><?php echo $usuario['fechaAltaUsuario'] ?></td>
                      <td><?php echo $usuario['fechaBajaUsuario'] ?></td>
                      <td><?php echo $usuario['nombreEstadoUsuario'] ?></td>
                      <td><?php echo $usuario['totalPedidos'] ?></td>
                      <td>
                        <!-- Start User Options Item-->
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                          <li class="nav-item dropdown">
                            <!-- Menu Button -->
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Opciones Usuario">
                              <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Menu List-->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <!-- User View Option -->
                              <li>
                                <a class="dropdown-item" href="userview.php?id=<?php echo $usuario['idUsuario'] ?>" title="Ver Usuario"><i class="fas fa-eye"></i> Ver Usuario</a>
                              </li>
                              <!-- User Edit Option -->
                              <li>
                                <a class="dropdown-item" href="useredit.php?id=<?php echo $usuario['idUsuario'] ?>" title="Editar Usuario"><i class="fas fa-edit"></i> Editar Usuario</a>
                              </li>
                              <!-- Divider Menu -->
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <!-- User Activate Option -->
                              <li>
                                <a class="dropdown-item" href="#" title="Activar Usuario"><i class="fas fa-check-square"></i> Activar Usuario</a>
                              </li>
                              <!-- User Deactivate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Desactivar Usuario"><i class="fas fa-ban"></i> Desactivar Usuario</a>
                              </li>
                              <!-- User Duplicate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Duplicar Usuario"><i class="fas fa-clone"></i> Duplicar Usuario</a>
                              </li>
                              <!-- User Eliminate Option  -->
                              <li>
                                <a class="dropdown-item" href="#" title="Eliminar Usuario"><i class="fas fa-trash"></i> Eliminar Usuario</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <!-- End User Options Item-->
                    </tr>
                  <?php } ?>
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Users -->