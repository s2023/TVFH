            <!-- Start Data Order 1 -->
            <div class="shopper-informations">

              <!-- Data Customer Title -->
              <div class="review-payment text-center">
                <h2>Datos del Cliente</h2>
              </div>

              <!-- Form Row 1 Main Inputs -->
              <div style="margin-bottom: 80px" class="row d-flex justify-content-center">

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
                      <input disabled type="text" placeholder="Nombres de Facturación" title="Nombres de Facturación" maxlength="50"
                        required value="<?php echo $usuario->nombresFacturacion ?>">

                      <!-- Form Billing Last Names -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Facturación"></i>
                            <h6>Apellidos de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input disabled type="text" placeholder="Apellidos de Facturación" title="Apellidos de Facturación" maxlength="50"
                        required value="<?php echo $usuario->apellidosFacturacion ?>">

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
                      <select disabled required>
                        <option title="Tipo de Documento de Facturación">
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
                      <input disabled type="text" placeholder="Número de Documento de Facturación"
                      title="Número de Documento de Facturación" minlength="5" maxlength="30" required
                      value="<?php echo $usuario->numeroDocumentoFacturacion ?>">

                      <!-- Form Email -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail de Facturación"></i>
                            <h6>E-mail de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input disabled type="email" placeholder="E-mail de Facturación" title="E-mail de Facturación" maxlength="60"
                        required value="<?php echo $usuario->correoElectronicoFacturacion ?>">

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
                      <input disabled type="tel" placeholder="Teléfono de Facturación"
                        title="Teléfono de Facturación"
                        minlength="5" maxlength="20" required value="<?php echo $usuario->numeroTelefonoFacturacion ?>">

                      <!-- Data Billing Address -->
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex">                            
                            <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Facturación"></i>
                            <h6>Dirección de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <input disabled type="text" placeholder="Dirección de Facturación" title="Dirección de Facturación" maxlength="60"
                        required value="<?php echo $usuario->direccionFacturacion ?>">

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
                      <select disabled required>
                        <option title="País de Facturación">
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
                            <i style="margin-right: 10px" class="fa-solid fa-id-card"
                              title=">Departamento/Provincia/Región de Facturación"></i>
                            <h6>Departamento/Provincia/Región de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select disabled required>
                        <option title=">Departamento/Provincia/Región de Facturación">
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
                      <select disabled required>
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
                    <input disabled type="text" placeholder="Nombres de Envío" title="Nombres de Envío" maxlength="50"
                      required value="<?php echo $usuario->nombresEnvio ?>">

                    <!-- Form Shipping Last Names -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Envío"></i>
                          <h6>Apellidos de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input disabled type="text" placeholder="Apellidos de Envío" title="Apellidos de Envío" maxlength="50"
                      required value="<?php echo $usuario->apellidosEnvio ?>">

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
                    <input disabled type="tel" placeholder="Teléfono de Envío"
                      title="Teléfono de Envío."
                      minlength="5" maxlength="20" required value="<?php echo $usuario->numeroTelefonoEnvio ?>">

                    <!-- Data Shipping Address -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Envío"></i>
                          <h6>Dirección de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <input disabled type="text" placeholder="Dirección de Envío" title="Dirección de Envío" maxlength="60"
                      required value="<?php echo $usuario->direccionEnvio ?>">

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
                    <select disabled required>
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
                          <i style="margin-right: 10px" class="fa-solid fa-id-card"
                            title=">Departamento/Provincia/Región de Envío"></i>
                          <h6>Departamento/Provincia/Región de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select disabled required>
                      <option title=">Departamento/Provincia/Región de Envío">
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
                    <select disabled required>
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

                    <label><input disabled class="mt-5" type="checkbox">
                      Enviar pedido a la dirección de facturación.
                    </label>

                  </div>
                </div>

              </div>

              <!-- Data Order Title -->
              <div class="review-payment text-center">
                <h2>Datos del Pedido</h2>
              </div>

            </div>
            <!-- End Data Order 1 -->