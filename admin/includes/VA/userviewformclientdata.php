                <!-- Start Row 2 Form User Client Data Inputs (!!!Form Client que se habilita en selector estado usuario) -->
                <div class="row">

                  <!-- Data Billing -->
                  <div class="col-sm-8">
                    <div class="bill-to">

                      <!-- Data Billing Title-->
                      <h5>
                        Datos de Facturación
                      </h5><br>

                      <!-- Data Billing Column 1-->
                      <div class="form-one">

                        <!-- Form Billing Names -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres de Facturación"></i>
                              <h6>Nombres de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Nombres de Facturación" title="Nombres de la persona a cargo de la facturación del pedido." maxlength="50" value="Nombres de Facturación"
                          required disabled>

                        <!-- Form Billing Last Names -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Facturación"></i>
                              <h6>Apellidos de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Apellidos de Facturación" title="Apellidos de la persona a cargo de la facturación del pedido." maxlength="50" value="Apellidos de Facturación"
                          required disabled>

                        <!-- Form Billing Document Type -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-id-card"
                                title="Tipo de Documento de Facturación"></i>
                              <h6>Tipo de Documento de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Tipo de documento de identidad de la persona a cargo de la facturación del pedido." required disabled>
                          <!-- <option title="Tipo de Documento de Facturación">
                            -- Tipo de Documento de Facturación --
                          </option> -->
                          <option title="CC - Cédula de Ciudadanía">
                            <span>
                              CC - Cédula de Ciudadanía
                            </span>
                          </option>
                          <option title="NIT - Número de Identificación Tributaria">
                            <span>
                              NIT - Número de Identificación Tributaria
                            </span>
                          </option>
                          <!-- <option title="">
                                      <span>
                                        "" - ""
                                      </span>
                                    </option> -->
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
                          title="Número de documento de identidad de la persona a cargo de la facturación del pedido." minlength="5" maxlength="30" value="9999999999" required disabled>

                        <!-- Form Billing Email -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail de Facturación"></i>
                              <h6>E-mail de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="email" placeholder="E-mail de Facturación" title="Correo electrónico de la persona a cargo de la facturación del pedido." maxlength="60" value="correo@correo.com"
                          required disabled>

                      </div>

                      <!-- Data Billing Column 2-->
                      <div class="form-two">

                        <!-- Data Billing Phone -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-phone" title="Teléfono de Facturación"></i>
                              <h6>Teléfono de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="tel" placeholder="Teléfono de Facturación" title="Número de teléfono de la persona a cargo de la facturación del pedido." minlength="5"
                          maxlength="20" value="999-999-999" required disabled>

                        <!-- Data Billing Address -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Facturación"></i>
                              <h6>Dirección de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Dirección de Facturación" title="Dirección de la persona a cargo de la facturación del pedido." maxlength="60" value="Dirección de Facturación"
                          required disabled>

                        <!-- Data Billing Country -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-earth-americas" title="País de Facturación"></i>
                              <h6>País de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select title="País de la persona a cargo de la facturación del pedido." value="" required disabled>
                          <!-- <option title="País de Facturación">
                            -- País de Facturación --
                          </option> -->
                          <option title="Colombia">
                            <span>
                              Colombia
                            </span>
                          </option>
                          <option title="Ecuadora">
                            <span>
                              Ecuador
                            </span>
                          </option>
                          <!-- <option title="">
                                      <span>
                                        ""
                                      </span>
                                    </option> -->
                        </select>

                        <!-- Data Billing Department/Region/Province -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-map"
                                title="Departamento / Provincia / Región de Facturación"></i>
                              <h6>Departamento/Provincia/Región de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Departamento/Provincia/Región de la persona a cargo de la facturación del pedido." value="" required disabled>
                          <!-- <option title=">Departamento / Provincia / Región de Facturación">
                            -- Departamento/Provincia/Región de Facturación --
                          </option> -->
                          <option title="Bogotá D.C.">
                            <span>
                              Bogotá D.C.
                            </span>
                          </option>
                          <option title="Cundinamarca">
                            <span>
                              Cundinamarca
                            </span>
                          </option>
                          <option title="Boyacá">
                            <span>
                              Boyacá
                            </span>
                          </option>
                          <!-- <option title="">
                                      <span>
                                        "" - ""
                                      </span>
                                    </option> -->
                        </select>

                        <!-- Data Billing City -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-city" title="Ciudad de Facturación"></i>
                              <h6>Ciudad de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Ciudad de la persona a cargo de la facturación del pedido." value="" required disabled>
                          <!-- <option title="Ciudad de Facturación">
                            -- Ciudad de Facturación --
                          </option> -->
                          <option title="Bogotá D.C.">
                            <span>
                              Bogotá D.C.
                            </span>
                          </option>
                          <!-- <option title="">
                                      <span>
                                        "" - ""
                                      </span>
                                    </option> -->
                        </select>

                      </div>

                    </div>
                  </div>

                  <!-- Data Shipping -->
                  <div class="col-sm-3 ce-inforight">
                    <div class="bill-to">

                      <!-- Data Shipping Title-->
                      <h5>
                        Datos de Envío
                      </h5><br>

                      <!-- Form Shipping Names -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres de Envío"></i>
                            <h6>Nombres de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Nombres de Envío" title="Nombres de la persona a la cual se le va a enviar del pedido." maxlength="50" value="Nombres de Envío" required disabled>

                      <!-- Form Shipping Last Names -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Envío"></i>
                            <h6>Apellidos de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Apellidos de Envío" title="Apellidos de la persona a la cual se le va a enviar del pedido." maxlength="50" value="Apellidos de Envío" required disabled>

                      <!-- Data Shipping Phone -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-phone" title="Teléfono de Envío"></i>
                            <h6>Teléfono de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="tel" placeholder="Teléfono de Envío" title="Número de teléfono de la persona a la cual se le va a enviar del pedido." minlength="5" maxlength="20" value="999-999-999"
                        required disabled>

                      <!-- Data Shipping Address -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Envío"></i>
                            <h6>Dirección de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Dirección de Envío" title="Dirección de la persona a la cual se le va a enviar del pedido." maxlength="60" value="Dirección de Envío" required disabled>

                      <!-- Data Shipping Country -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-earth-americas" title="País de Envío"></i>
                            <h6>País de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <select title="País de la persona a la cual se le va a enviar del pedido." value="" required disabled>
                        <!-- <option title="País de Envío">
                          -- País de Envío --
                        </option> -->
                        <option title="Colombia">
                          <span>
                            Colombia
                          </span>
                        </option>
                        <option title="Ecuadora">
                          <span>
                            Ecuador
                          </span>
                        </option>
                        <!-- <option title="">
                                    <span>
                                      ""
                                    </span>
                                  </option> -->
                      </select>

                      <!-- Data Shipping Department/Region/Province -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-map"
                              title=">Departamento/Provincia/Región de Envío"></i>
                            <h6>Departamento/Provincia/Región de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Departamento/Provincia/Región de la persona a la cual se le va a enviar del pedido." value="" required disabled>
                        <!-- <option title=">Departamento/Provincia/Región de Envío">
                          -- Departamento/Provincia/Región de Envío --
                        </option> -->
                        <option title="Bogotá D.C.">
                          <span>
                            Bogotá D.C.
                          </span>
                        </option>
                        <option title="Cundinamarca">
                          <span>
                            Cundinamarca
                          </span>
                        </option>
                        <option title="Boyacá">
                          <span>
                            Boyacá
                          </span>
                        </option>
                        <!-- <option title="">
                                    <span>
                                      "" - ""
                                    </span>
                                  </option> -->
                      </select>

                      <!-- Data Shipping City -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-city" title="Ciudad de Envío"></i>
                            <h6>Ciudad de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Ciudad de la persona a la cual se le va a enviar del pedido." value="" required disabled>
                        <!-- <option title="Ciudad de Envío">
                          -- Ciudad de Envío --
                        </option> -->
                        <option title="Bogotá D.C.">
                          <span>
                            Bogotá D.C.
                          </span>
                        </option>
                        <!-- <option title="">
                                    <span>
                                      "" - ""
                                    </span>
                                  </option> -->
                      </select>

                    </div>
                  </div>

                </div>
                <!-- End Row 2 Form User Client Data Inputs -->