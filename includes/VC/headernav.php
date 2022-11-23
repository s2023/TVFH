  <!-- Start Header Navigation Section -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php"><span class="sr-only">(current)</span>
          <img style="width: 180px" src="resources/images/OtrasImag/LOGO FLORIDEAS.jpg" title="Florideas Holanda"
            alt="Logo Florideas Holanda">
        </a>
        <!-- Boton responsive -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <!-- Main Menu-->
            <ul class="navbar-nav">
              <!-- Occasions Menu -->
              <li class="nav-item dropdown">
                <a style="font-weight: bold" class="nav-link dropdown-toggle" href="ocasiones.php" title="Ocasiones"
                  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">Ocasiones</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="categoria.php" title="Bautizo">Bautizo</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Bouquet">Bouquet</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Cajas de Rosas">Cajas de Rosas</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Diseños Especiales">Diseños Especiales</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Ekibanas">Ekibanas (Ramos Pequeños)</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Funeral">Funeral</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Matrimonio">Matrimonio</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Primera Comunión">Primera Comunión</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="categoria.php" title="Ramos Fruteros">Ramos Fruteros</a>
                </div>
              </li>
              <!-- Link About Us -->
              <li class="nav-item active">
                <a style="font-weight: bold" class="nav-link" href="nosotros.php" title="Nosotros">Nosotros</a>
              </li>
              <!-- Link Contact -->
              <li class="nav-item">
                <a style="font-weight: bold" class="nav-link" href="contacto.php" title="Contacto">Contacto</a>
              </li>
            </ul>
            <!-- Search Form -->
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0" action="busqueda.php">
              <input style="width: 200px; border-radius: 10px" class="form-control mr-sm-2" type="search"
                placeholder="Buscar" aria-label="Search" title="Ingrese su búsqueda">
              <button style="margin-left: 5px" class="btn  my-2 my-sm-0 nav_search-btn" type="submit"
                title="Buscar"></button>
            </form>
            <!-- Buttons -->
            <!-- User Button  -->
            <div>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" title="Usuario" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                      style="font-size: 30px; color:black" class="fa-solid fa-user"></i></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="autenticacion.php" title="Iniciar Sesión"><i
                        style="font-size: 20px; color:#000000; margin-right: 10px" class="fa-solid fa-user-shield"
                        alt="Icono Inicio Sesión"></i>Iniciar Sesión</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="registro.php" title="Registro"><i
                        style="font-size: 20px; color:black; margin-right: 10px" class="fa-solid fa-user-plus"
                        alt="Icono Registro"></i>Registro</a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- Code for Logged User Button  -->
            <!-- User Logged in Button 
            <div>              
              <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle"id="navbarDropdown" href="" title="Usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size: 30px; color:black" class="fa-solid fa-user"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="editarusuario.php" title="Editar Usuario"><i style="font-size: 20px; color:black; margin-right: 10px" class="fa-solid fa-user-gear" alt="Icono Editar Usuario"></i>Editar Usuario</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="listarpedidos.php" title="Listar Pedidos"><i style="font-size: 20px; color:black; margin-right: 10px" class="fa-solid fa-money-bills" alt="Icono Listar Pedidos"></i>Listar Pedidos</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.php????" title="Cerrar Sesión"><i style="font-size: 20px; color:black; margin-right: 10px" class="fa-solid fa-right-from-bracket" alt="Icono Cerrar Sesión"></i>Cerrar Sesión</a>
                    </div>
                </li>
              </ul>              
            </div> -->
            <!-- Shopping cart button -->
            <form class="d-flex" action="carrito.php"???>
              <button class="btn btn-outline-dark" type="submit" href="carrito.php" title="Carrito de Compras">
                <i class="bi-cart-fill me-1"></i>
                Carrito
                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- End Header Navigation Section -->