          <!-- Start Options Form -->
          <form action="#">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button name="Botón Cancelar" class="btn btn-danger btn-circle" type="button" value="Cancelar"
                  onclick="location.href='index.php'" href="" title="Cancelar">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button name="Botón Guardar cambios" class="btn btn-danger btn-circle" type="button"
                  value="Guardar cambios" onclick="location.href='" href="#" title="Guardar cambios">
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
                  <div class="col-sm-12">
                    <div class="bill-to">

                      <!-- Data User Title-->
                      <h5>
                        Datos del Usuario Administrador
                      </h5><br>

                      <!-- Data User 1 Column 1 -->
                      <div class="form-one">

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

                        <!-- Data User Password Confirm -->
                        <div class="row mt-2">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fa-solid fa-lock" title="Confirmar Contraseña del Usuario"></i>
                              <h6>Confirmar Contraseña del Usuario</h6>
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

                </div>

              </div>
            </div>

          </form>
          <!-- End Options Form -->