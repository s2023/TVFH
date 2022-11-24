          <!-- Start User Create Form -->
          <form action="#">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button name="Botón Volver a la lista" class="btn btn-danger btn-circle" type="button" value="Volver a la lista"
                  onclick="location.href='userslist.php'" href="" title="Volver a la lista">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button name="Botón Guardar y cerrar" class="btn btn-danger btn-circle" type="button" value="Guardar y cerrar"
                  onclick="location.href='userslist.php'" href="" title="Guardar y cerrar">
                  <i class="fas fa-check"></i>
                </button>

                <button name="Botón Guardar y permanecer" class="btn btn-danger btn-circle" type="button"
                  value="Guardar y permanecer" onclick="location.href='" href="#" title="Guardar y permanecer">
                  <i class="fas fa-save"></i>
                </button>

              </div>
            </div>

            <!-- Body Form -->
            <div class="card mb-4 p-5">
              <div class="shopper-informations">

                <!-- Row 1 Form User Admin Inputs -->
                <div class="row mb-5">

                  <!-- Data User 1-->
                  <div class="col-sm-8">
                    <div class="bill-to">

                      <!-- Data User Title-->
                      <h5>
                        Datos del Usuario
                      </h5><br>

                      <!-- Data User 1 Column 1 -->
                      <div class="form-one">

                        <!-- Data User ID -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-id-badge" title="ID del Usuario"></i>
                              <h6>ID del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="9999999999"
                          title="ID del Usuario. Identificador único del usuario registrado en la tienda." minlength="4"
                          maxlength="10" required disabled>

                        <!-- Data User Nickname -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user-lock" title="Nombre de Usuario (Apodo)"></i>
                              <h6>Nombre de Usuario (Apodo)</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="apodoUsuario"
                          title="Nombre de Usuario (Apodo). Máximo 10 carácteres. Nombre de usuario único que se crea con la cuenta para la tienda. El nombre de usuario es único, irrepetible y no se podrá modificar más adelante."
                          minlength="4" maxlength="10" required>

                        <!-- Data User Email -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail del Usuario"></i>
                              <h6>E-mail del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="email" placeholder="E-mail del Usuario" title="E-mail del Usuario. Correo electrónico del usuario registrado en la tienda." maxlength="60" required>

                        <!-- Data User Password -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-lock" title="Contraseña"></i>
                              <h6>Contraseña</h6>
                            </div>
                          </div>
                        </div>
                        <input type="password" placeholder="Contraseña"
                          title="Contraseña del usuario que se registra en la tienda. Mínimo 6 carácteres, mínimo una letra mayúscula, mínimo una letra minuscula, mínimo un número y mínimo un símbolo."
                          minlength="6" maxlength="15" required>

                      </div>

                      <!-- Data User 1 Column 2 -->
                      <div class="form-two">

                        <!-- Data User Names -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Nombres del Usuario"></i>
                              <h6>Nombres del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Nombres del Usuario" title="Nombres del usuario registrado en la tienda." maxlength="50" required>

                        <!-- Data User Last Names -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos del Usuario"></i>
                              <h6>Apellidos del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Apellidos del Usuario" title="Apellidos del Usuario registrado en la tienda." maxlength="50"
                          required>

                        <!-- Data User Document Type -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-id-card" title="Tipo de Documento del Usuario"></i>
                              <h6>Tipo de Documento del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Tipo de documento de identidad del usuario registrado en la tienda." required>
                          <option >
                            -- Tipo de Documento del Usuario --
                          </option>
                          <option title="Cédula de Ciudadanía">
                            <span>
                              CC - Cédula de Ciudadanía
                            </span>
                          </option>
                          <option title="NIT - Número de Identificación Tributaria">
                            <span>
                              NIT - Número de Identificación Tributaria
                            </span>
                          </option>
                          <option title="TI - Tarjeta de Identidad">
                            <span>
                              TI - Tarjeta de Identidad
                            </span>
                          </option>
                        </select>

                        <!-- Data User Document Number -->
                        <div class="row mt-4">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-hashtag"
                                title="Número de Documento del Usuario"></i>
                              <h6>Número de Documento del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Número de Documento del Usuario" title="Número de Documento del Usuario registrado en la tienda."
                          minlength="5" maxlength="30" required>

                      </div>

                    </div>
                  </div>

                  <!-- Data User 2-->
                  <div class="col-sm-3 ce-inforight">
                    <div class="bill-to"><br>

                      <!-- Data User Type -->
                      <div class="row mt-5">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-user-tag" title="Tipo de Usuario"></i>
                            <h6>Tipo de Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Tipo de Usuario del sistema: Cliente o Administrador." required>
                        <option title="Administrador">
                          <span>
                            Administrador
                          </span>
                        </option>
                        <option title="Cliente">
                          <span>
                            Cliente
                          </span>
                        </option>
                      </select>

                      <!-- Data User State -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-user-check" title="Estado del Usuario"></i>
                            <h6>Estado del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Estado actual del usuario: Activado, Desactivado, Eliminado." required>
                        <option title="Activado">
                          <span>
                          Activado
                          </span>
                        </option>
                        <option title="Desactivado">
                          <span>
                          Desactivado
                          </span>
                        </option>
                      </select>

                      <!-- Form User Date High -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-plus" title="Fecha de Alta"></i>
                            <h6>Fecha de Alta del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="date" id="datehigh" name="fechaentrega" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de registro del usuario registrado en la tienda." required disabled>

                      <!-- Form User Date Low -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha de Baja"></i>
                            <h6>Fecha de Baja del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" id="datelow" name="fechaentrega" placeholder="" title="Fecha de eliminación del usuario registrado en la tienda." required disabled>

                    </div>
                  </div>

                </div>

                <!-- Row 2 Form User Client Inputs (!!!Form Client que se habilita) -->
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
                        <input type="text" placeholder="Nombres de Facturación" title="Nombres de la persona a cargo de la facturación del pedido." maxlength="50"
                          required>

                        <!-- Form Billing Last Names -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Facturación"></i>
                              <h6>Apellidos de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Apellidos de Facturación" title="Apellidos de la persona a cargo de la facturación del pedido." maxlength="50"
                          required>

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
                        <select required title="Tipo de documento de identidad de la persona a cargo de la facturación del pedido.">
                          <option title="Tipo de Documento de Facturación">
                            -- Tipo de Documento de Facturación --
                          </option>
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
                          title="Número de documento de identidad de la persona a cargo de la facturación del pedido." minlength="5" maxlength="30" required>

                        <!-- Form Billing Email -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail de Facturación"></i>
                              <h6>E-mail de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="email" placeholder="E-mail de Facturación" title="Correo electrónico de la persona a cargo de la facturación del pedido." maxlength="60"
                          required>

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
                          maxlength="20" required>

                        <!-- Data Billing Address -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Facturación"></i>
                              <h6>Dirección de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Dirección de Facturación" title="Dirección de la persona a cargo de la facturación del pedido." maxlength="60"
                          required>

                        <!-- Data Billing Country -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-earth-americas" title="País de Facturación"></i>
                              <h6>País de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select required title="País de la persona a cargo de la facturación del pedido.">
                          <option title="País de Facturación">
                            -- País de Facturación --
                          </option>
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
                              <i style="margin-right: 10px" class="fa-solid fa-id-card"
                                title="Departamento / Provincia / Región de Facturación"></i>
                              <h6>Departamento/Provincia/Región de Facturación</h6>
                            </div>
                          </div>
                        </div>
                        <select required title="Departamento/Provincia/Región de la persona a cargo de la facturación del pedido.">
                          <option title=">Departamento / Provincia / Región de Facturación">
                            -- Departamento/Provincia/Región de Facturación --
                          </option>
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
                        <select required title="Ciudad de la persona a cargo de la facturación del pedido.">
                          <option title="Ciudad de Facturación">
                            -- Ciudad de Facturación --
                          </option>
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
                      <input type="text" placeholder="Nombres de Envío" title="Nombres de la persona a la cual se le va a enviar del pedido." maxlength="50" required>

                      <!-- Form Shipping Last Names -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos de Envío"></i>
                            <h6>Apellidos de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Apellidos de Envío" title="Apellidos de la persona a la cual se le va a enviar del pedido." maxlength="50" required>

                      <!-- Data Shipping Phone -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-phone" title="Teléfono de Envío"></i>
                            <h6>Teléfono de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="tel" placeholder="Teléfono de Envío" title="Número de teléfono de la persona a la cual se le va a enviar del pedido." minlength="5" maxlength="20"
                        required>

                      <!-- Data Shipping Address -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-address-card" title="Dirección de Envío"></i>
                            <h6>Dirección de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <input type="text" placeholder="Dirección de Envío" title="Dirección de la persona a la cual se le va a enviar del pedido." maxlength="60" required>

                      <!-- Data Shipping Country -->
                      <div class="row mt-2">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fa-solid fa-earth-americas" title="País de Envío"></i>
                            <h6>País de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <select required title="País de la persona a la cual se le va a enviar del pedido.">
                        <option title="País de Envío">
                          -- País de Envío --
                        </option>
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
                            <i style="margin-right: 10px" class="fa-solid fa-id-card"
                              title=">Departamento/Provincia/Región de Envío"></i>
                            <h6>Departamento/Provincia/Región de Envío</h6>
                          </div>
                        </div>
                      </div>
                      <select required title="Departamento/Provincia/Región de la persona a la cual se le va a enviar del pedido.">
                        <option title=">Departamento/Provincia/Región de Envío">
                          -- Departamento/Provincia/Región de Envío --
                        </option>
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
                      <select required title="Ciudad de la persona a la cual se le va a enviar del pedido.">
                        <option title="Ciudad de Envío">
                          -- Ciudad de Envío --
                        </option>
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

              </div>
            </div>

          </form>
          <!-- End User Create Form -->