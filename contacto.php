<!DOCTYPE html>
<html lang="es">

<head>

  <!-- Site Metas -->
  <meta name="description"
    content="Tienda Virtual Florideas Holanda (TVFH). Envío a domicilio a toda Hispanoamérica. Contacto.">
  <!-- 3. Contacto / VC -->
  <title>Contacto - Florideas Holanda</title>

  <!-- Head -->
  <?php include_once 'includes/VC/head.php' ?>

</head>

<body>

  <!-- Start Header Navigation Section -->
  <?php include_once 'includes/VC/headernav.php' ?>
  <!-- End Header Navigation Section -->

  <main>

    <!-- Start Breadcrumb Article-->
    <article>

      <!-- Start Breadcrumb Section -->
      <section class="container mt-4">
        <div class="row">
          <div class="btn-group btn-breadcrumb">
            <a href="index.php" class="btn btn-default"><i class="fa-solid fa-house"></i></a>
            <a href="contacto.php" class="btn btn-default">Contacto</a>
          </div>
        </div>
      </section>
      <!-- End Breadcrumb Section -->

    </article>
    <!-- End Breadcrumb Article-->

    <!-- Start Article: Contact -->
    <article>

      <!-- Start Header Article -->
      <header>
        <div class="container">
          <!-- Title Article -->
          <div style="margin-bottom: 40px; margin-top: 40px" class="col-12 text-center">
            <h1>Contacto</h1>
          </div>
        </div>
      </header>
      <!-- End Header Article -->

      <!-- Start Contact Section -->
      <section class="container">
        <div class="row layout_padding2">

          <!-- Left Column-->
          <div class="contact_section col-md-6">
            <div class="container">
              
              <!-- Form Contact Subtitle-->
              <h2 class="font-weight-bold">
                Comuniquese con nosotros
              </h2>
              
              <!-- Form Contact -->
              <div style="width: 150%" class="row">
                <div class="col-md-8">
                  <form action="row">
                    <div class="contact_form-container">
                      <div>
                        <div>
                          <input type="text" placeholder="Nombres" required>
                        </div>
                        <div>
                          <input type="text" placeholder="Apellidos" required>
                        </div>
                        <div>
                          <input type="text" placeholder="Número de teléfono">
                        </div>
                        <div>
                          <input type="email" placeholder="Correo electrónico" required>
                        </div>
                        <div>
                          <input type="text" placeholder="Asunto">
                        </div>
                        <div class="mt-4">
                          <input type="text" placeholder="Mensaje" required>
                        </div>
                        <div class="mt-5">
                          <button style="background-color: #eb4034" type="submit" title="Enviar mensaje">
                            Enviar mensaje
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div><br><br>
              <img src="resources/images/Paginas/3.ContactoVC/1.png" width="480" height="300" alt="fotomatrimonio"
                title="Contáctenos"><br><br>

            </div>
          </div>
          
          <!-- Right Column-->
          <div class="col-md-6">
            <div class="fruit_detail-box">
              <p class="text-center">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2106.530133593424!2d-74.07683113078015!3d4.665305470363759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ac20576f6af%3A0x8d57f5db6afc8292!2sFlorideas%20Holanda!5e0!3m2!1ses-419!2sco!4v1666161391507!5m2!1ses-419!2sco"
                  width="480" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe><br><br>
                <img src="resources/images/Paginas/3.ContactoVC/fhtiendafoto.png" width="480" height="250" alt="fototienda"
                  title="Florideas Holanda - sucursal principal."><br><br>
                Oneidis Ozuna H.<br>
                Teléfono: 57+13115310<br>
                Celular: 57+3208897209<br>
                Dirección: Carrera 51 # 69-00 (esquina).<br>
                Horario:<br>
                Lunes a Sábado: 8:00 am - 8:30 pm<br>
                Domingos y Festivos: 8:30 am - 6:30 pm<br>
                Ciudad: Bogotá D.C., Colombia.
              </p>
            </div>
          </div>
        
        </div>
      </section>
      <!-- End Contact Section -->

    </article>
    <!-- End Article: Contact -->

  </main>

  <!-- Footer -->
  <?php include_once 'includes/VC/footer.php' ?>

  <!-- SCRIPTS -->
  <?php include_once 'includes/VC/scripts.php' ?>

</body>

</html>