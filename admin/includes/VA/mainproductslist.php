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
          
          <!-- Start Advise OK  -->
          <?php include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error -->
          <?php include_once 'includes/VA/adviseerror.php'?>
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

                  <tr>
                    <td>1</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Bautizo/6bautizo.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>1</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Caja de Rosas/5cdrosas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre de 30 caracteres Flores</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>0</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>Privado</td>
                    <td>Eliminado</td>                  
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Bouquet/1bouquet.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>1</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Borrador</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Diseños especiales/3despeciales.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Público</td>
                    <td>Activado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>
                  <tr>
                    <td>9999999999</td>
                    <td>
                      <img id="imgtable" src="../resources/images/Ekibanas/4ekibanas.png" alt="Imagen Categoría" title="Imagen Categoría">
                    </td>
                    <td>Nombre del Producto</td>
                    <td>Categoría</td>
                    <td>$999.999</td>
                    <td>9999999999</td>
                    <td>27/09/2022 00:00:00</td>
                    <td>---------- --------</td>
                    <td>Privado</td>
                    <td>Desactivado</td>                    
                    <td>
                      <!-- Start Product Options Item-->
                      <?php include 'includes/VA/productoptions.php'?>
                      <!-- End Product Options Item-->
                    </td>
                  </tr>          
                
                </tbody>
              
              </table>
            </div>
          
          </div>
        
        </div>
        
      </main>
      <!-- End Main List Products -->