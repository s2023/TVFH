      <!-- Start Main Edit Product -->
      <main>

        <div class="container-fluid px-4">

          <!-- Main Title -->
          <h1 class="mt-4">Editar Producto</h1>

          <!-- Breadcrumb -->
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php" title="Inicio">Inicio</a></li>
            <li class="breadcrumb-item"><a href="productslist.php" title="Inicio">Listar Producto</a></li>
            <li class="breadcrumb-item active">Editar Producto</li>
          </ol>

          <!-- TODO: revisar estos includes -->
          <!-- Start Advise OK  -->
          <?php //include_once 'includes/VA/adviseok.php'?>
          <!-- End Advise OK  -->

          <!-- Start Advise Error Article-->
          <?php //include_once 'includes/VA/adviseerror.php'?>
          <!-- End Advise Error Article-->

          <!-- Start Product Edit Form -->
          <?php include_once 'includes/VA/producteditform.php'?>
          <!-- End Product Edit Form -->

        </div>

      </main>
      <!-- End Main Edit Product -->