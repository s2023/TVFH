<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Menú (Ver) Usuario.">
  <!-- 16. Ver (Menú) Usuario - VC -->
  <title>Menú Usuario - Florideas Holanda</title>

  <!-- Head -->
  <?php include_once 'includes/VC/head.php'?>

</head>

<body>

  <!-- Start Header Navigation Section -->
  <?php include_once 'includes/VC/headernav.php'?>
  <!-- End Header Navigation Section -->

  <?php
    @session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/UsuarioRepository.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/PaisRepository.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/DepProvRegRepository.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/CiudadRepository.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/TipoDocumentoRepository.php';

    $usuarioRepository = new UsuarioRepository();
    $paisRepository = new PaisRepository();
    $depProvRegRepository = new DepProvRegRepository();
    $ciudadRepository = new CiudadRepository();
    $tipoDocumentoRepository = new TipoDocumentoRepository();

    $usuario = $usuarioRepository->buscarPorId($_SESSION['idUsuario']);
    $tipoDocumentoUsuario = $tipoDocumentoRepository->buscarPorId($usuario->tipoDocumentoUsuarioId);
    $tipoDocumentoFacturacion = $tipoDocumentoRepository->buscarPorId($usuario->tipoDocumentoFacturacionId);
    $ciudadFacturacion = $ciudadRepository->buscarPorId($usuario->ciudadFacturacionId);
    $ciudadEnvio = $ciudadRepository->buscarPorId($usuario->ciudadEnvioId);
    $depProvRegFacturacion = $depProvRegRepository->buscarPorId($ciudadFacturacion->depProvRegId);
    $depProvRegEnvio = $depProvRegRepository->buscarPorId($ciudadEnvio->depProvRegId);
    $paisFacturacion = $paisRepository->buscarPorId($depProvRegFacturacion->paisId);
    $paisEnvio = $paisRepository->buscarPorId($depProvRegEnvio->paisId);
  ?>

  <main>
    
    <!-- Start Breadcrumb Article-->
    <article>

      <!-- Start Breadcrumb Section -->
      <section class="container mt-4">
        <div class="row">
          <div class="btn-group btn-breadcrumb">
            <a href="index.php" class="btn btn-default"><i class="fa-solid fa-house"></i></a>
            <a href="verusuario.php" class="btn btn-default">Menú Usuario</a>            
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->
    
    <!-- Start Article: View User -->
    <article>
      
      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Menú Usuario</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start View User Section -->
      <section>
        <div class="container">
          <div class="row">

            <!-- View User Principal Sign -->
            <div class="register-req">
              <h5 class="mb-5">Bienvenido "Nombre de Usuario"</h5>
              <div class="row">

                <!-- Column 1 Bottons -->
                <div style="margin-top: auto; margin-bottom: auto;" class="col-4">
                  <ul>
                    <li class="pb-3">
                      <a href="editarusuario.php" title="Editar Usuario"><i class="fa-solid fa-user-pen"></i> Editar Usuario</a>
                    </li>
                    <li class="pb-3">
                      <a href="listarpedidos.php" title="Listar Pedidos"><i class="fa-solid fa-money-bills"></i> Listar Pedidos</a>
                    </li>
                  </ul>
                </div>   

                <!-- Column 2 Data User -->
                <div style="text-align: left; font-size: 14px;" class="col-8 row">
                  
                  <!-- Data User -->
                  <div class="col-6">
                    <p>
                      <strong>Datos del Usuario</strong><br>
                      - Nombre de Usuario (Apodo): <?php echo $usuario->apodoUsuario ?><br>
                      - E-mail del Usuario: <?php echo $usuario->correoElectronicoUsuario ?><br>
                      - Nombres del Usuario: <?php echo $usuario->nombresUsuario ?><br>
                      - Apellidos del Usuario: <?php echo $usuario->apellidosUsuario ?><br>
                      - Tipo de Documento del Usuario: <?php echo $tipoDocumentoUsuario->nombreTipoDocumento ?><br>
                      - Número de Documento del Usuario: <?php echo $usuario->numeroDocumentoUsuario ?><br>
                    </p>
                  </div>
                
                  <!-- Data Billing & Shipping-->
                  <div class="col-6">
                    <p>
                      <strong>Datos de Facturación</strong><br>
                      - Nombres de Facturación: <?php echo $usuario->nombresFacturacion ?><br>
                      - Apellidos de Facturación: <?php echo $usuario->apellidosFacturacion ?><br>
                      - Tipo de Documento de Facturación: <?php echo $tipoDocumentoFacturacion->nombreTipoDocumento ?><br>
                      - Número de Documento de Facturación: <?php echo $usuario->numeroDocumentoFacturacion ?><br>
                      - E-mail de Facturación: <?php echo $usuario->correoElectronicoFacturacion ?><br>
                      - Teléfono de Facturación: <?php echo $usuario->numeroTelefonoFacturacion ?><br>
                      - Dirección de Facturación: <?php echo $usuario->direccionFacturacion ?><br>
                      - País de Facturación: <?php echo $paisFacturacion->nombrePais ?><br>
                      - Departamento / Provincia / Región de Facturación: <?php echo $depProvRegFacturacion->nombreDepProvReg ?><br>
                      - Ciudad de Facturación: <?php echo $ciudadFacturacion->nombreCiudad ?><br><br>

                      <strong>Datos de Envío</strong><br>
                      - Nombres de Envío:  <?php echo $usuario->nombresEnvio ?><br>
                      - Apellidos de Envío: <?php echo $usuario->apellidosEnvio ?><br>
                      - Teléfono de Envío: <?php echo $usuario->numeroTelefonoEnvio ?><br>
                      - Dirección de Envío: <?php echo $usuario->direccionEnvio ?><br>
                      - País de Envío: <?php echo $paisEnvio->nombrePais ?><br>
                      - Departamento / Provincia / Región de Envío: <?php echo $depProvRegEnvio->nombreDepProvReg ?><br>
                      - Ciudad de Envío: <?php echo $ciudadEnvio->nombreCiudad ?><br><br>
                    </p>
                  </div>

                </div>

              </div>
            </div>

            <!-- Log Out Button Form -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->
                <form action="acciones/cerrarsesion.php">

                  <!-- Log Out Button -->
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default add-to-cart" title="Cerrar Sesión">
                          <i class="fa-solid fa-right-from-bracket"></i>
                          Cerrar Sesión
                        </button>
                      </div>
                    </div>
                  </div>

                </form>

              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End View User Section -->

    </article>
    <!-- End Article: View User -->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php'?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php'?>

</body>

</html>