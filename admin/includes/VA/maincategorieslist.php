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

          <!-- Start Advise OK  -->
          <?php include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error Article-->
          <?php include_once 'includes/VA/adviseerror.php'?>
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

                  <tr>
                    <td>1</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Bautizo/10bautizo.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>1</td>
                    <td>
                      <!-- Start Category Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Category Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Caja de Rosas/9cdrosas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre de 30 caracteres Flores</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>Eliminada</td>
                    <td>0</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Bouquet/4bouquet.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Matrimonios/1matrimonio.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Funeral/3funeral.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ramos Fruteros/10ramosfruteros.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/4despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/7ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Primera Comunion/1pricom.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Activada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Matrimonios/4matrimonio.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre Categoría</td>
                    <td>Nombre Categoría</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Desactivada</td>
                    <td>9999999999</td>
                    <td>
                      <!-- Start Options Item-->
                      <?php include 'includes/VA/categoryoptions.php'?>
                      <!-- End Options Item-->
                    </td>
                  </tr>
                
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Categories -->