          <!-- Start Edit User Form -->
          <div class="shopper-informations">

            <!-- Edit User Form Body -->
            <form action="#">

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
                      minlength="4" maxlength="10"><label></label> <!-- ??? -- >

                    < !-- Data User Email -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex">
                          <i style="margin-right: 10px" class="fa-solid fa-at" title="E-mail del Usuario"></i>
                          <h6>E-mail del Usuario</h6>
                        </div>
                      </div>
                    </div>
                    <input type="email" placeholder="E-mail del Usuario" title="E-mail del Usuario" maxlength="60"
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
                      minlength="6" maxlength="15" >

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
                      minlength="6" maxlength="15" >

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
                    <select >
                      <option title="Tipo de Documento del Usuario">
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
                      <!-- <option title="">
                        <span>
                          "" - ""
                        </span>
                      </option> -->
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
                      title="Número de Documento del Usuario" minlength="5" maxlength="30" >

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
                      <select >
                        <option title="Tipo de Documento de Facturación">
                          -- Tipo de Documento de Facturación --
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
                      title="Número de Documento de Facturación" minlength="5" maxlength="30" >

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
                        minlength="5" maxlength="20" >

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
                      <select >
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
                              title=">Departamento/Provincia/Región de Facturación"></i>
                            <h6>Departamento/Provincia/Región de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select >
                        <option title=">Departamento/Provincia/Región de Facturación">
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
                            <i style="margin-right: 10px" class="fa-solid fa-city"
                              title="Ciudad de Facturación"></i>
                            <h6>Ciudad de Facturación</h6>
                          </div>
                        </div>
                      </div>
                      <select >
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
                      minlength="5" maxlength="20">

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
                    <select >
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
                    <select >
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
                          <i style="margin-right: 10px" class="fa-solid fa-city"
                            title="Ciudad de Envío"></i>
                          <h6>Ciudad de Envío</h6>
                        </div>
                      </div>
                    </div>
                    <select >
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