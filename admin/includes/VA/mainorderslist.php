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
          
          <!-- Start Advise OK  -->
          <?php include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error -->
          <?php include_once 'includes/VA/adviseerror.php'?>
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

                  <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>
                    <td>---------- --------</td>                    
                    <td>Creado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>
                    <td>---------- --------</td>                    
                    <td>Pagado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>
                    <td>---------- --------</td>                    
                    <td>Enviado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>
                    <td>27/09/2022 00:00:00</td>                   
                    <td>Anulado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>
                    <td>28/09/2022 00:00:00</td>                  
                    <td>Devuelto</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>9999999999</td>
                    <td>Apodo Usuario</td>
                    <td>$999.999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>                    
                    <td>Finalizado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/orderoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Orders -->