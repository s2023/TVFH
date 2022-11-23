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
                      - Nombre de Usuario (Apodo): ""<br>
                      - E-mail del Usuario: ""<br>
                      - Nombres del Usuario: ""<br>
                      - Apellidos del Usuario: ""<br>
                      - Tipo de Documento del Usuario: ""<br>
                      - Número de Documento del Usuario: ""<br>
                    </p>
                  </div>
                
                  <!-- Data Billing & Shipping-->
                  <div class="col-6">
                    <p>
                      <strong>Datos de Facturación</strong><br>             
                      - Nombres de Facturación: ""<br>
                      - Apellidos de Facturación: ""<br>
                      - Tipo de Documento de Facturación: ""<br>
                      - Número de Documento de Facturación: ""<br>
                      - E-mail de Facturación: ""<br>
                      - Teléfono de Facturación: ""<br>
                      - Dirección de Facturación: ""<br>
                      - País de Facturación: ""<br>
                      - Departamento / Provincia / Región de Facturación: ""<br>
                      - Ciudad de Facturación: ""<br><br> 

                      <strong>Datos de Envío</strong><br>  
                      - Nombres de Envío: ""<br>
                      - Apellidos de Envío: ""<br>
                      - Teléfono de Envío: ""<br>
                      - Dirección de Envío: ""<br>
                      - País de Envío: ""<br>
                      - Departamento / Provincia / Región de Envío: ""<br>
                      - Ciudad de Envío: ""<br>
                    </p>
                  </div>  

                </div>

              </div>
            </div>

            <!-- Log Out Button Form -->
            <div style="margin: auto;" class="col-sm-4 col-sm-offset-1">
              <div class="login-form">

                <!-- Form body -->             
                <form action="#"> 

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