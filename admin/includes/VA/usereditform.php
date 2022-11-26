          <!-- Start User Edit Form -->
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
                              <i style="margin-right: 10px" class="fas fa-shield-alt" title="ID del Usuario"></i>
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
                          minlength="4" maxlength="10" required disabled>

                        <!-- Data User Email -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail del Usuario"></i>
                              <h6>E-mail del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="email" placeholder="E-mail del Usuario" title="E-mail del Usuario. Correo electrónico del usuario registrado en la tienda." maxlength="60" value="correo@correo.com" required>

                        <!-- Data User Password -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-lock" title="Contraseña del Usuario"></i>
                              <h6>Contraseña del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="password" placeholder="Contraseña"
                          title="Contraseña del usuario que se registra en la tienda. Mínimo 6 carácteres, mínimo una letra mayúscula, mínimo una letra minuscula, mínimo un número y mínimo un símbolo."
                          minlength="6" maxlength="15" value="Contraseña" required>

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
                        <input type="text" placeholder="Nombres del Usuario" title="Nombres del usuario registrado en la tienda." maxlength="50" value="Nombres del Usuario" required>

                        <!-- Data User Last Names -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-user" title="Apellidos del Usuario"></i>
                              <h6>Apellidos del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="Apellidos del Usuario" title="Apellidos del Usuario registrado en la tienda." maxlength="50" value="Apellidos del Usuario" required>

                        <!-- Data User Document Type -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-id-card" title="Tipo de Documento del Usuario"></i>
                              <h6>Tipo de Documento del Usuario</h6>
                            </div>
                          </div>
                        </div>
                        <select title="Tipo de documento de identidad del usuario registrado en la tienda." value="1" required>
                          <!-- <option >
                            -- Tipo de Documento del Usuario --
                          </option> -->
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
                          minlength="5" maxlength="30" value="9999999999" required>

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
                      <select title="Tipo de Usuario del sistema: Cliente o Administrador. No se puede modificar más adelante." required disabled>
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
                            <i style="margin-right: 10px" class="fas fa-check-circle" title="Estado del Usuario"></i>
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
                        <option title="Eliminado">
                          <span>
                          Eliminado
                          </span>
                        </option>
                      </select>

                      <!-- Form User Date High -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-plus" title="Fecha de Alta del Usuario"></i>
                            <h6>Fecha de Alta del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="date" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de registro del usuario registrado en la tienda." required disabled>

                      <!-- Form User Date Low -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha de Baja del Usuario"></i>
                            <h6>Fecha de Baja del Usuario</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" placeholder="" title="Fecha de eliminación del usuario registrado en la tienda." required disabled>

                    </div>
                  </div>

                </div>

                <!-- Start Row 2 Form User Client Data Inputs (!!!Form Client que se habilita en selector estado usuario) -->
                <?php include_once 'includes/VA/usereditformclientdata.php'?>
                <!-- End Row 2 Form User Client Data Inputs -->

              </div>
            </div>

          </form>
          <!-- End User Edit Form -->