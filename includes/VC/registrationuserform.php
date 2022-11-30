<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/PaisRepository.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/tvfh/datos/repositorios/TipoDocumentoRepository.php';

  $paisRepository = new PaisRepository();
  $tipoDocumentoRepository = new TipoDocumentoRepository();

  $tiposDeDocumento = $tipoDocumentoRepository->listarTodos();
  $paises = $paisRepository->listarTodos();
?>
          <!-- Registration Form -->
          <div class="shopper-informations">

            <!-- Registration Form Body -->
            <form action="acciones/registrar.php" method="post">

              <!-- Form Row 1 Main Inputs -->
              <div class="row">

                <!-- Data User -->
                <div class="col-sm-3">
                  <div class="shopper-info">

                    <!-- Data User Title -->
                    <h5>
                      Datos del Usuario
                    </h5><br>

                    <!-- Data User Nickname -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-user-lock"
                            title="Nombre de Usuario (Apodo)" aria-hidden="true"></i>
                          <h6>Nombre de Usuario (Apodo)</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Nombre de Usuario (Apodo)"
                      title="Nombre de Usuario (Apodo). Máximo 10 carácteres. El nombre de usuario es único, irrepetible y no se podrá modificar más adelante."
                      minlength="4"
                      maxlength="10"
                      id="apodoUsuario"
                      name="apodoUsuario"
                      required>

                    <!-- Data User Email -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-at"
                            title="E-mail del Usuario"></i>
                          <h6>E-mail del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="email"
                      placeholder="E-mail del Usuario"
                      title="E-mail del Usuario"
                      maxlength="60"
                      id="correoElectronicoUsuario"
                      name="correoElectronicoUsuario"
                      required>

                    <!-- Data User Password -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-lock"
                            title="Contraseña"></i>
                          <h6>Contraseña</h6>
                        </div>
                      </div>
                    </div>
                    <input type="password"
                      placeholder="Contraseña"
                      title="Contraseña. La contraseña debe ser de mínimo 6 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo."
                      minlength="6"
                      maxlength="15"
                      id="contrasenaUsuario"
                      name="contrasenaUsuario"
                      required>

                    <!-- Data User Confirm Password -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-lock"
                            title="Confirmar Contraseña"></i>
                          <h6>Confirmar Contraseña</h6>
                        </div>
                      </div>
                    </div>
                    <input type="password"
                      placeholder="Confirmar contraseña"
                      title="Confirmar Contraseña. La contraseña debe ser de mínimo 6 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo."
                      minlength="6"
                      maxlength="15"
                      id="confirmacionContrasenaUsuario"
                      name="confirmacionContrasenaUsuario"
                      required>

                    <!-- Data User Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-user"
                            title="Nombres del Usuario"></i>
                          <h6>Nombres del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Nombres del Usuario"
                      title="Nombres del Usuario"
                      maxlength="50"
                      id="nombresUsuario"
                      name="nombresUsuario"
                      required>

                    <!-- Data User Last Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-user"
                            title="Apellidos del Usuario"></i>
                          <h6>Apellidos del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Apellidos del Usuario"
                      title="Apellidos del Usuario"
                      maxlength="50"
                      id="apellidosUsuario"
                      name="apellidosUsuario"
                      required>

                    <!-- Data User Document Type -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-id-card"
                            title="Tipo de Documento del Usuario"></i>
                          <h6>Tipo de Documento del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <select id="tipoDocumentoUsuarioId" name="tipoDocumentoUsuarioId" required>
                      <option title="Tipo de Documento del Usuario" value>
                        -- Tipo de Documento del Usuario --
                      </option>

                      <?php foreach ($tiposDeDocumento as $tipoDeDocumento) { ?>
                        <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                          value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>">
                          <?php
                            echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                          ?>
                        </option>
                      <?php } ?>
                    </select>

                    <!-- Data User Document Number -->
                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-hashtag"
                            title="Número de Documento del Usuario"></i>
                          <h6>Número de Documento del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Número de Documento del Usuario"
                      title="Número de Documento del Usuario"
                      minlength="5"
                      maxlength="30"
                      id="numeroDocumentoUsuario"
                      name="numeroDocumentoUsuario"
                      required>

                  </div>
                </div>

                <!-- Data Billing -->
                <div class="col-sm-6">
                  <div class="bill-to">

                    <!-- Data Billing Title-->
                    <h5>
                      Datos de Facturación
                    </h5><br>

                    <!-- Data Billing Column 1-->
                    <div class="form-one">

                      <!-- Form Billing Names -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-user"
                              title="Nombres de Facturación"></i>
                            <h6>Nombres de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text"
                        placeholder="Nombres de Facturación"
                        title="Nombres de Facturación"
                        maxlength="50"
                        id="nombresFacturacion"
                        name="nombresFacturacion"
                        required>

                      <!-- Form Billing Last Names -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-user"
                              title="Apellidos de Facturación"></i>
                            <h6>Apellidos de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text"
                        placeholder="Apellidos de Facturación"
                        title="Apellidos de Facturación"
                        maxlength="50"
                        id="apellidosFacturacion"
                        name="apellidosFacturacion"
                        required>

                      <!-- Form Billing Document Type -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-id-card"
                              title="Tipo de Documento de Facturación"></i>
                            <h6>Tipo de Documento de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="tipoDocumentoFacturacionId" name="tipoDocumentoFacturacionId" required>
                        <option title="Tipo de Documento de Facturación" value>
                          -- Tipo de Documento de Facturación --
                        </option>
                        <?php foreach ($tiposDeDocumento as $tipoDeDocumento) { ?>
                        <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                          value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>">
                          <?php
                            echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                          ?>
                        </option>
                      <?php } ?>
                      </select>

                      <!-- Form Billing Document Number -->
                      <div class="row mt-3">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-hashtag"
                            title="Número de Documento de Facturación"></i>
                          <h6>Número de Documento de Facturación</h6>
                        </div>
                      </div>
                      </div>
                      <input type="text"
                        placeholder="Número de Documento de Facturación"
                        title="Número de Documento de Facturación"
                        minlength="5"
                        maxlength="30"
                        id="numeroDocumentoFacturacion"
                        name="numeroDocumentoFacturacion"
                        required>

                      <!-- Form Email -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-at"
                              title="E-mail de Facturación"></i>
                            <h6>E-mail de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="email"
                        placeholder="E-mail de Facturación"
                        title="E-mail de Facturación"
                        maxlength="60"
                        id="correoElectronicoFacturacion"
                        name="correoElectronicoFacturacion"
                        required>

                    </div>

                    <!-- Data Billing Column 2-->
                    <div class="form-two">

                      <!-- Data Billing Phone -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-phone"
                              title="Teléfono de Facturación"></i>
                            <h6>Teléfono de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="tel"
                        placeholder="Teléfono de Facturación"
                        title="Teléfono de Facturación"
                        minlength="5"
                        maxlength="20"
                        id="numeroTelefonoFacturacion"
                        name="numeroTelefonoFacturacion"
                        required>

                      <!-- Data Billing Address -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-address-card"
                              title="Dirección de Facturación"></i>
                            <h6>Dirección de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text"
                        placeholder="Dirección de Facturación"
                        title="Dirección de Facturación"
                        maxlength="60"
                        id="direccionFacturacion"
                        name="direccionFacturacion"
                        required>

                      <!-- Data Billing Country -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true"
                              style="margin-right: 10px"
                              class="fa-solid fa-earth-americas"
                              title="País de Facturación"></i>
                            <h6>País de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="paisFacturacionId"
                        name="paisFacturacionId"
                        required>
                        <option title="País de Facturación" value>
                          -- País de Facturación --
                        </option>
                        <?php foreach ($paises as $pais) { ?>
                          <option title="<?php echo $pais['nombrePais'] ?>"
                            value="<?php echo $pais['idPais'] ?>">
                            <?php
                              echo $pais['nombrePais']
                            ?>
                          </option>
                        <?php } ?>
                      </select>

                      <!-- Data Billing Department/Region/Province -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true" style="margin-right: 10px" class="fas fa-map"
                              title="Departamento/Provincia/Región de Facturación"></i>
                            <h6>Departamento/Provincia/Región de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="depRegProvFacturacionId" name="depRegProvFacturacionId" required>
                        <option title="Departamento/Provincia/Región de Facturación" value>
                          -- Departamento/Provincia/Región de Facturación --
                        </option>
                      </select>

                      <!-- Data Billing City -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-city"
                              title="Ciudad de Facturación"></i>
                            <h6>Ciudad de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select  id="ciudadFacturacionId" name="ciudadFacturacionId" required>
                        <option title="Ciudad de Facturación" value>
                          -- Ciudad de Facturación --
                        </option>
                      </select>

                    </div>
                  </div>
                </div>

                <!-- Data Shipping -->
                <div class="col-sm-3">
                  <div class="bill-to">

                    <!-- Data Shipping Title-->
                    <h5>
                      Datos de Envío
                    </h5><br>

                    <!-- Form Shipping Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-user"
                            title="Nombres de Envío"></i>
                          <h6>Nombres de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Nombres de Envío"
                      title="Nombres de Envío"
                      maxlength="50"
                      id="nombresEnvio"
                      name="nombresEnvio"
                      required>

                    <!-- Form Shipping Last Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-user"
                            title="Apellidos de Envío"></i>
                          <h6>Apellidos de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Apellidos de Envío"
                      title="Apellidos de Envío"
                      maxlength="50"
                      id="apellidosEnvio"
                      name="apellidosEnvio"
                      required>

                    <!-- Data Shipping Phone -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-phone"
                            title="Teléfono de Envío"></i>
                          <h6>Teléfono de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="tel"
                      placeholder="Teléfono de Envío"
                      title="Teléfono de Envío."
                      minlength="5"
                      maxlength="20"
                      id="numeroTelefonoEnvio"
                      name="numeroTelefonoEnvio"
                      required>

                    <!-- Data Shipping Address -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-address-card"
                            title="Dirección de Envío"></i>
                          <h6>Dirección de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text"
                      placeholder="Dirección de Envío"
                      title="Dirección de Envío"
                      maxlength="60"
                      id="direccionEnvio"
                      name="direccionEnvio"
                      required>

                    <!-- Data Shipping Country -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true"
                            style="margin-right: 10px"
                            class="fa-solid fa-earth-americas"
                            title="País de Envío"></i>
                          <h6>País de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="paisEnvioId" name="paisEnvioId" required>
                      <option title="País de Envío" value>
                        -- País de Envío --
                      </option>
                      <?php foreach ($paises as $pais) { ?>
                        <option title="<?php echo $pais['nombrePais'] ?>"
                          value="<?php echo $pais['idPais'] ?>">
                          <?php
                            echo $pais['nombrePais']
                          ?>
                        </option>
                      <?php } ?>
                    </select>

                    <!-- Data Shipping Department/Region/Province -->
                    <div class="row mt-4">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true" style="margin-right: 10px" class="fas fa-map"
                            title="Departamento/Provincia/Región de Envío"></i>
                          <h6>Departamento/Provincia/Región de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="depRegProvEnvioId" name="depRegProvEnvioId" required>
                      <option title="Departamento/Provincia/Región de Envío">
                        -- Departamento/Provincia/Región de Envío --
                      </option>
                    </select>

                    <!-- Data Shipping City -->
                    <div class="row mt-4">
                      <div class="col-12">
                        <div class="d-flex">
                          <i aria-hidden="true" style="margin-right: 10px" class="fa-solid fa-city"
                            title="Ciudad de Envío"></i>
                          <h6>Ciudad de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="ciudadEnvioId" name="ciudadEnvioId" required>
                      <option title="Ciudad de Envío">
                        -- Ciudad de Envío --
                      </option>
                    </select>

                  </div>
                </div>

              </div>

              <!-- Form Row 2 Terms Check -->
              <div class="d-flex justify-content-center mt-5">
                <div class="text-center p-1" title="He leído y acepto los Términos y
                Condiciones y la Política de Privacidad.">
                  <input type="checkbox" class="checkbox">
                  He leído y acepto los
                  <a href="#"
                    data-toggle="modal"
                    data-target="#myModal">
                    Términos y Condiciones y la Política de Privacidad.
                  </a>
                  <!-- Modal Terms -->
                  <?php include_once 'includes/VC/modal-terms.php'?>
                </div>
              </div>

              <!-- Form Row 3 Button Sign Up-->
              <div class="row mt-5">
                <div class="col-12">
                  <div class="d-flex justify-content-center">
                    <!-- Sign up Button -->
                    <button type="submit"
                      class="btn btn-default add-to-cart"
                      title="Registrarse"
                      href="autenticacion.php"
                      value="Registrarse">
                      <i aria-hidden="true" class="fa-solid fa-user-plus"></i> Registrarse
                    </button>
                  </div>
                </div>
              </div><br>

            </form>

            <!-- Autentication Button -->
            <div class="text-center">
              ¿Ya está registrado? <br>
              <a href="autenticacion.php" title="Iniciar Sesión">
                <i aria-hidden="true" class="fa-solid fa-user-shield"></i> Iniciar Sesión
              </a>
            </div>

          </div>