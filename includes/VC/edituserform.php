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
  $ciudadFacturacion = $ciudadRepository->buscarPorId($usuario->ciudadFacturacionId);
  $ciudadEnvio = $ciudadRepository->buscarPorId($usuario->ciudadEnvioId);
  $depProvRegFacturacion = $depProvRegRepository->buscarPorId($ciudadFacturacion->depProvRegId);
  $depProvRegEnvio = $depProvRegRepository->buscarPorId($ciudadEnvio->depProvRegId);
  $paisFacturacion = $paisRepository->buscarPorId($depProvRegFacturacion->paisId);
  $paisEnvio = $paisRepository->buscarPorId($depProvRegEnvio->paisId);
  
  $ciudadesFacturacion = $ciudadRepository->listarCiudadesByDepProvReg($depProvRegFacturacion->idDepProvReg);
  $ciudadesEnvio = $ciudadRepository->listarCiudadesByDepProvReg($depProvRegEnvio->idDepProvReg);

  $depProvRegsFacturacion = $depProvRegRepository->listarDepProvRegPorPais($paisFacturacion->idPais);
  $depProvRegsEnvio = $depProvRegRepository->listarDepProvRegPorPais($paisEnvio->idPais);

  $paisesFacturacion = $paisRepository->listarTodos();
  $paisesEnvio = $paisRepository->listarTodos();

  $tiposDeDocumento = $tipoDocumentoRepository->listarTodos();
?>
          <!-- Start Edit User Form -->
          <div class="shopper-informations">

            <!-- Edit User Form Body -->
            <form action="acciones/editarusuario.php" method="post">
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
                            title="Nombre de Usuario (Apodo)"></i>
                          <h6>Nombre de Usuario (Apodo)</h6>
                        </div>
                      </div>
                    </div>
                    <input disabled type="text" placeholder="Nombre de Usuario (Apodo)"
                      title="Nombre de Usuario (Apodo). Máximo 10 carácteres. El nombre de usuario es único, irrepetible y no se podrá modificar más adelante."
                      minlength="4" maxlength="10" id="apodoUsuario" name="apodoUsuario" value="<?php echo $usuario->apodoUsuario; ?>">

                    <!-- Data User Email -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail del Usuario"></i>
                          <h6>E-mail del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="email" placeholder="E-mail del Usuario" title="E-mail del Usuario" maxlength="60"
                      id="correoElectronicoUsuario" name="correoElectronicoUsuario" value="<?php echo $usuario->correoElectronicoUsuario ?>"
                      >

                    <!-- Data User Password -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-lock" title="Contraseña"></i>
                          <h6>Contraseña</h6>
                        </div>
                      </div>
                    </div>
                    <input type="password" placeholder="Contraseña"
                      title="Contraseña. La contraseña debe ser de mínimo 6 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo."
                      minlength="6" maxlength="15" id="contrasenaUsuario" name="contrasenaUsuario" >

                    <!-- Data User Confirm Password -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-lock" title="Confirmar Contraseña"></i>
                          <h6>Confirmar Contraseña</h6>
                        </div>
                      </div>
                    </div>
                    <input type="password" placeholder="Confirmar contraseña"
                      title="Confirmar Contraseña. La contraseña debe ser de mínimo 6 caracteres y debe contener mínimo una letra mayúscula, mínimo una letra minúscula, mínimo un número y mínimo un símbolo."
                      minlength="6" maxlength="15" id="confirmacionContrasenaUsuario" name="confirmacionContrasenaUsuario" >

                    <!-- Data User Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres del Usuario"></i>
                          <h6>Nombres del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Nombres del Usuario" title="Nombres del Usuario" maxlength="50"
                      id="nombresUsuario" name="nombresUsuario" value="<?php echo $usuario->nombresUsuario ?>"
                      >

                    <!-- Data User Last Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos del Usuario"></i>
                          <h6>Apellidos del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Apellidos del Usuario" title="Apellidos del Usuario" maxlength="50"
                      id="apellidosUsuario" name="apellidosUsuario" value="<?php echo $usuario->apellidosUsuario ?>"
                      >

                    <!-- Data User Document Type -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-id-card"
                            title="Tipo de Documento del Usuario"></i>
                          <h6>Tipo de Documento del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <select id="tipoDocumentoUsuarioId" name="tipoDocumentoUsuarioId">
                      <option title="Tipo de Documento del Usuario" value>
                        -- Tipo de Documento del Usuario --
                      </option>

                      <?php foreach ($tiposDeDocumento as $tipoDeDocumento) { ?>
                        <?php if ($tipoDeDocumento['idTipoDocumento'] == $usuario->tipoDocumentoUsuarioId) { ?>
                          <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                            value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>" selected>
                            <?php
                              echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                            ?>
                          </option>
                        <?php } else { ?>
                          <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                            value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>">
                            <?php
                              echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                            ?>
                          </option>
                        <?php } ?>
                      <?php } ?>
                    </select>

                    <!-- Data User Document Number -->
                    <div class="row mt-3">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                            title="Número de Documento del Usuario"></i>
                          <h6>Número de Documento del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Número de Documento del Usuario"
                      title="Número de Documento del Usuario" minlength="5" maxlength="30"
                      id="numeroDocumentoUsuario" name="numeroDocumentoUsuario" value="<?php echo $usuario->numeroDocumentoUsuario ?>">

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
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres de Facturación"></i>
                            <h6>Nombres de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Nombres de Facturación" title="Nombres de Facturación" maxlength="50"
                        id="nombresFacturacion" name="nombresFacturacion" value="<?php echo $usuario->nombresFacturacion ?>"
                        >

                      <!-- Form Billing Last Names -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Facturación"></i>
                            <h6>Apellidos de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Apellidos de Facturación" title="Apellidos de Facturación" maxlength="50"
                        id="apellidosFacturacion" name="apellidosFacturacion" value="<?php echo $usuario->apellidosFacturacion ?>"
                        >

                      <!-- Form Billing Document Type -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-id-card"
                              title="Tipo de Documento de Facturación"></i>
                            <h6>Tipo de Documento de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="tipoDocumentoFacturacionId" name="tipoDocumentoFacturacionId">
                        <option title="Tipo de Documento de Facturación" value>
                          -- Tipo de Documento de Facturación --
                        </option>
                        <?php foreach ($tiposDeDocumento as $tipoDeDocumento) { ?>
                          <?php if ($tipoDeDocumento['idTipoDocumento'] == $usuario->tipoDocumentoFacturacionId) { ?>
                            <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                              value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>" selected>
                              <?php
                                echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                              ?>
                            </option>
                          <?php } else { ?>
                            <option title="<?php echo $tipoDeDocumento['nombreTipoDocumento'] ?>"
                              value="<?php echo $tipoDeDocumento['idTipoDocumento'] ?>">
                              <?php
                                echo $tipoDeDocumento['abvTipoDocumento'] . ' - ' . $tipoDeDocumento['nombreTipoDocumento']
                              ?>
                            </option>
                          <?php } ?>
                        <?php } ?>
                      </select>

                      <!-- Form Billing Document Number -->
                      <div class="row mt-3">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                            title="Número de Documento de Facturación"></i>
                          <h6>Número de Documento de Facturación</h6>
                        </div>
                      </div>
                      </div>
                      <input type="text" placeholder="Número de Documento de Facturación"
                      title="Número de Documento de Facturación" minlength="5" maxlength="30"
                      id="numeroDocumentoFacturacion" name="numeroDocumentoFacturacion" value="<?php echo $usuario->numeroDocumentoFacturacion ?>">

                      <!-- Form Email -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail de Facturación"></i>
                            <h6>E-mail de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="email" placeholder="E-mail de Facturación" title="E-mail de Facturación" maxlength="60"
                        id="correoElectronicoFacturacion" name="correoElectronicoFacturacion" value="<?php echo $usuario->correoElectronicoFacturacion ?>"
                        >

                    </div>

                    <!-- Data Billing Column 2-->
                    <div class="form-two">

                      <!-- Data Billing Phone -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-phone"
                              title="Teléfono de Facturación"></i>
                            <h6>Teléfono de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="tel" placeholder="Teléfono de Facturación"
                        title="Teléfono de Facturación"
                        minlength="5" maxlength="20"
                        id="numeroTelefonoFacturacion" name="numeroTelefonoFacturacion" value="<?php echo $usuario->numeroTelefonoFacturacion ?>">

                      <!-- Data Billing Address -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">                            
                            <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Facturación"></i>
                            <h6>Dirección de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Dirección de Facturación" title="Dirección de Facturación" maxlength="60"
                        id="direccionFacturacion" name="direccionFacturacion" value="<?php echo $usuario->direccionFacturacion ?>"
                        >

                      <!-- Data Billing Country -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">                            
                            <i style="margin-right: 10px" class="fa-solid fa-earth-americas"
                              title="País de Facturación"></i>
                            <h6>País de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="paisFacturacionId" name="paisFacturacionId">
                        <option title="País de Facturación" value>
                          -- País de Facturación --
                        </option>
                        <?php foreach ($paisesFacturacion as $pais) { ?>
                          <?php if ($pais['idPais'] == $paisFacturacion->idPais) { ?>
                            <option title="<?php echo $pais['nombrePais'] ?>"
                              value="<?php echo $pais['idPais'] ?>" selected>
                              <?php
                                echo $pais['nombrePais']
                              ?>
                            </option>
                          <?php } else { ?>
                            <option title="<?php echo $pais['nombrePais'] ?>"
                              value="<?php echo $pais['idPais'] ?>">
                              <?php
                                echo $pais['nombrePais']
                              ?>
                            </option>
                          <?php } ?>
                        <?php } ?>
                      </select>

                      <!-- Data Billing Department/Region/Province -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-map"
                              title="Departamento/Provincia/Región de Facturación"></i>
                            <h6>Departamento/Provincia/Región de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="depRegProvFacturacionId" name="depRegProvFacturacionId">
                        <option title="Departamento/Provincia/Región de Facturación" value>
                          -- Departamento/Provincia/Región de Facturación --
                        </option>
                        <?php foreach ($depProvRegsFacturacion as $depProvReg) { ?>
                          <?php if ($depProvReg['idDepProvReg'] == $depProvRegFacturacion->idDepProvReg) { ?>
                            <option title="<?php echo $depProvReg['nombreDepProvReg'] ?>"
                              value="<?php echo $depProvReg['idDepProvReg'] ?>" selected>
                              <?php
                                echo $depProvReg['nombreDepProvReg']
                              ?>
                            </option>
                          <?php } else { ?>
                            <option title="<?php echo $depProvReg['nombreDepProvReg'] ?>"
                              value="<?php echo $depProvReg['idDepProvReg'] ?>">
                              <?php
                                echo $depProvReg['nombreDepProvReg']
                              ?>
                            </option>
                          <?php } ?>
                        <?php } ?>
                      </select>

                      <!-- Data Billing City -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-city"
                              title="Ciudad de Facturación"></i>
                            <h6>Ciudad de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select id="ciudadFacturacionId" name="ciudadFacturacionId">
                        <option title="Ciudad de Facturación">
                          -- Ciudad de Facturación --
                        </option>
                        <?php foreach ($ciudadesFacturacion as $ciudad) { ?>
                          <?php if ($ciudad['idCiudad'] == $ciudadFacturacion->idCiudad) { ?>
                            <option title="<?php echo $ciudad['nombreCiudad'] ?>"
                              value="<?php echo $ciudad['idCiudad'] ?>" selected>
                              <?php
                                echo $ciudad['nombreCiudad']
                              ?>
                            </option>
                          <?php } else { ?>
                            <option title="<?php echo $ciudad['nombreCiudad'] ?>"
                              value="<?php echo $ciudad['idCiudad'] ?>">
                              <?php
                                echo $ciudad['nombreCiudad']
                              ?>
                            </option>
                          <?php } ?>
                        <?php } ?>
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
                          <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres de Envío"></i>
                          <h6>Nombres de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Nombres de Envío" title="Nombres de Envío" maxlength="50"
                      id="nombresEnvio" name="nombresEnvio" value="<?php echo $usuario->nombresEnvio ?>"
                      >

                    <!-- Form Shipping Last Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Envío"></i>
                          <h6>Apellidos de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Apellidos de Envío" title="Apellidos de Envío" maxlength="50"
                      id="apellidosEnvio" name="apellidosEnvio" value="<?php echo $usuario->apellidosEnvio ?>"
                      >

                    <!-- Data Shipping Address -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Envío"></i>
                          <h6>Dirección de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="text" placeholder="Dirección de Envío" title="Dirección de Envío" maxlength="60"
                      id="direccionEnvio" name="direccionEnvio" value="<?php echo $usuario->direccionEnvio ?>"
                      >

                    <!-- Data Shipping Phone -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-phone"
                            title="Teléfono de Envío"></i>
                          <h6>Teléfono de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input type="tel" placeholder="Teléfono de Envío"
                      title="Teléfono de Envío."
                      minlength="5" maxlength="20"
                      id="numeroTelefonoEnvio" name="numeroTelefonoEnvio" value="<?php echo $usuario->numeroTelefonoEnvio ?>">

                    <!-- Data Shipping Country -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-earth-americas"
                            title="País de Envío"></i>
                          <h6>País de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="paisEnvioId" name="paisEnvioId">
                      <option title="País de Envío">
                        -- País de Envío --
                      </option>
                      <?php foreach ($paisesEnvio as $pais) { ?>
                        <?php if ($pais['idPais'] == $paisEnvio->idPais) { ?>
                          <option title="<?php echo $pais['nombrePais'] ?>"
                            value="<?php echo $pais['idPais'] ?>" selected>
                            <?php
                              echo $pais['nombrePais']
                            ?>
                          </option>
                        <?php } else { ?>
                          <option title="<?php echo $pais['nombrePais'] ?>"
                            value="<?php echo $pais['idPais'] ?>">
                            <?php
                              echo $pais['nombrePais']
                            ?>
                          </option>
                        <?php } ?>
                      <?php } ?>
                    </select>

                    <!-- Data Shipping Department/Region/Province -->
                    <div class="row mt-4">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fas fa-map"
                            title="Departamento/Provincia/Región de Envío"></i>
                          <h6>Departamento/Provincia/Región de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="depRegProvEnvioId" name="depRegProvEnvioId">
                      <option title="Departamento/Provincia/Región de Envío">
                        -- Departamento/Provincia/Región de Envío --
                      </option>
                      <?php foreach ($depProvRegsEnvio as $depProvReg) { ?>
                        <?php if ($depProvReg['idDepProvReg'] == $depProvRegEnvio->idDepProvReg) { ?>
                          <option title="<?php echo $depProvReg['nombreDepProvReg'] ?>"
                            value="<?php echo $depProvReg['idDepProvReg'] ?>" selected>
                            <?php
                              echo $depProvReg['nombreDepProvReg']
                            ?>
                          </option>
                        <?php } else { ?>
                          <option title="<?php echo $depProvReg['nombreDepProvReg'] ?>"
                            value="<?php echo $depProvReg['idDepProvReg'] ?>">
                            <?php
                              echo $depProvReg['nombreDepProvReg']
                            ?>
                          </option>
                        <?php } ?>
                      <?php } ?>
                    </select>

                    <!-- Data Shipping City -->
                    <div class="row mt-4">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-city"
                            title="Ciudad de Envío"></i>
                          <h6>Ciudad de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select id="ciudadEnvioId" name="ciudadEnvioId">
                      <option title="Ciudad de Envío">
                        -- Ciudad de Envío --
                      </option>
                      <?php foreach ($ciudadesEnvio as $ciudad) { ?>
                        <?php if ($ciudad['idCiudad'] == $ciudadEnvio->idCiudad) { ?>
                          <option title="<?php echo $ciudad['nombreCiudad'] ?>"
                            value="<?php echo $ciudad['idCiudad'] ?>" selected>
                            <?php
                              echo $ciudad['nombreCiudad']
                            ?>
                          </option>
                        <?php } else { ?>
                          <option title="<?php echo $ciudad['nombreCiudad'] ?>"
                            value="<?php echo $ciudad['idCiudad'] ?>">
                            <?php
                              echo $ciudad['nombreCiudad']
                            ?>
                          </option>
                        <?php } ?>
                      <?php } ?>
                    </select>

                  </div>
                </div>

              </div>

              <?php
                if (isset($_GET['success'])) {
                  if ($_GET['success'] == 'true') {
                    // Start Advise OK Edit User Article
                    include_once 'includes/VC/avisoeditarok.php';
                    // End Advise OK Edit User Article
                  } elseif ($_GET['success'] == 'false') {
                    // Start Advise Error Article
                    include_once 'includes/VC/avisoerror.php';
                    // End Advise Error Article
                  }
                }
              ?>

              <!-- Form Row 2 Button Update-->
              <div class="row mt-5">
                <div class="col-12">
                  <div class="d-flex justify-content-center">
                    <!-- Update Button -->
                    <button type="submit" class="btn btn-default add-to-cart" title="Actualizar" href="registro2.php"
                      value="Actualizar">
                      <i class="fa-solid fa-user-check"></i> Actualizar
                    </button>
                  </div>
                </div>
              </div><br>            

            </form>

          </div>
          <!-- End Edit User Form -->