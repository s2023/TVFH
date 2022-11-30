<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/PedidoRepository.php';
  $pedidoRepository = new PedidoRepository();
  $pedidos = $pedidoRepository->listarTodos();
?>
      <!-- Start Main List Orders -->
      <main>
        
        <div class="container-fluid px-4">

          <!-- Main Title -->
          <h1 class="mt-4">Listar Pedidos</h1>
          
          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php" title="Inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Listar Pedidos</li>
          </ol>
          
          <!-- TODO: check these signs -->
          <!-- Start Advise OK  -->
          <?php //include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error -->
          <?php //include_once 'includes/VA/adviseerror.php'?>
          <!-- End Advise Error -->

          <!-- Buttons Menu -->
          <!-- <div class="card mb-4">
            <div class="card-body">
              <a class="btn btn-danger btn-circle" href="productcreate.php" title="Crear Producto">
              <i class="fas fa-file-medical"></i>
              </a> 
            </div>
          </div> -->

          <!-- Main Table -->
          <div class="card mb-4">

            <!-- Header Table -->
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Pedidos
            </div>
            
            <!-- Body Table -->
            <!-- Nota: Automaticamente se ajusta a la cantidad de datos, se pueden buscar datos en la tabla y mostrar numero de items. -->
            <div class="card-body">
              <table id="datatablesSimple">

                <!-- Table Head -->
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ID Cliente</th>
                    <th>Apodo del Usuario</th>
                    <th>Total del Pedido</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Entrega</th>
                    <th>Fecha Fin</th>
                    <th>Estado del Pedido</th>
                  </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                  <?php foreach ($pedidos as $pedido) { ?>
                    <tr>
                      <td><?php echo $pedido['idPedido'] ?></td>
                      <td><?php echo $pedido['usuarioId'] ?></td>
                      <td><?php echo $pedido['apodoUsuario'] ?></td>
                      <td>$<?php echo $pedido['totalPedido'] ?></td>
                      <td><?php echo $pedido['fechaInicioPedido'] ?></td>
                      <td><?php echo $pedido['fechaEntregaPedido'] ?></td>
                      <td><?php echo $pedido['fechaFinPedido'] ?></td>
                      <td><?php echo $pedido['nombreEstadoPedido'] ?></td>
                      <td>
                        <!-- Start Order Options Item-->
                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                          <li class="nav-item dropdown">
                            <!-- Menu Button -->
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Opciones Pedido">
                              <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <!-- Menu List-->
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <!-- Order View Option -->
                              <li>
                                <a class="dropdown-item" href="orderview.php?id=<?php echo $pedido['idPedido'] ?>" title="Ver Pedido"><i class="fas fa-eye"></i> Ver Pedido</a>
                              </li>
                              <!-- Divider Menu -->
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <!-- Order Edit Option -->
                              <li>
                                <a class="dropdown-item" href="orderedit.php?id=<?php echo $pedido['idPedido'] ?>" title="Editar Pedido"><i class="fas fa-edit"></i> Editar Pedido</a>
                              </li>                            
                            </ul>
                          </li>
                        </ul>
                        <!-- End Order Options Item-->
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Orders -->