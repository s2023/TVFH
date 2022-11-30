<?php
  @session_start();
?>
    <!-- Start SideNav Bar -->
    <div id="layoutSidenav_nav">

      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        
        <!-- Sidenav Menú -->
        <div class="sb-sidenav-menu">
          <div class="nav">

            <!-- Home Menu -->
            <div class="sb-sidenav-menu-heading">Módulo Administrador</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
              Inicio
            </a>

            <!-- Admin Menu Brand-->
            <div class="sb-sidenav-menu-heading">Menú</div>

            <!-- Orders Menu -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bills"></i></div>
              Pedidos
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="orderslist.php" title="Listar Pedidos"><i class="fa-solid fa-list p-2"></i>Listar Pedidos</a>
              </nav>
            </div>

             <!-- Products Menu -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-copy"></i></div>
              Productos
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="productslist.php" title="Listar Productos"><i class="fa-solid fa-list p-2"></i>Listar Productos</a>
                <a class="nav-link" href="productcreate.php" title="Crear Producto"><i class="fas fa-file-medical p-2"></i>Crear Producto</a>
              </nav>
            </div>  

            <!-- Category Menu -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-folder-tree"></i></div>
              Categoría
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="categorieslist.php" title="Listar Categorías"><i class="fa-solid fa-list p-2"></i>Listar Categorías</a>
                <a class="nav-link" href="categorycreate.php" title="Crear Categoría"><i class="fas fa-folder-plus p-2"></i>Crear Categoría</a>
              </nav>
            </div>  

            <!-- Users Menu -->
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              Usuarios
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="userslist.php" title="Listar Usuarios"><i class="fa-solid fa-list p-2"></i>Listar Usuarios</a>
                <a class="nav-link" href="usercreate.php" title="Crear Usuario"><i class="fas fa-user-plus p-2"></i>Crear Usuario</a>
              </nav>
            </div>  
                        
          </div>
        </div>
        
        <!-- Sidenav Footer -->
        <div class="sb-sidenav-footer">
          <div class="small">Inició sesión como:</div>
          <?php echo isset($_SESSION['apodoUsuario']) ? $_SESSION['apodoUsuario'] : "apodoUsuario" ?>
        </div>
      
      </nav>
    
    </div>
    <!-- End SideNav Bar -->