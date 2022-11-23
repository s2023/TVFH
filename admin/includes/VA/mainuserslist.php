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

          <!-- Start Advise OK  -->
          <?php include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error Article-->
          <?php include_once 'includes/VA/adviseerror.php'?>
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

                  <tr>
                    <td>1</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>0</td>
                    <td>
                      <!-- Start User Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End User Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>Apodo Usuario</td>
                    <td>Nombre de 50 caracteres Jaime de Jesús del Carmesí</td>
                    <td>Apellido de 50 caracteres Andalucía de la Santa Fé</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>Eliminado</td>
                    <td>1</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Administrador</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivado</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>Cliente</td>
                    <td>apodoUsuario</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activado</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/useroptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
  
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Users -->