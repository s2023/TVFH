          <!-- Start Order Edit Form -->
          <form action="#">

            <!-- Buttons Form -->
            <div class="card mb-4">
              <div class="card-body">

                <button name="Botón Volver a la lista" class="btn btn-danger btn-circle" type="button" value="Volver a la lista"
                  onclick="location.href='orderslist.php'" href="" title="Volver a la lista">
                  <i class="fas fa-chevron-left"></i>
                </button>

                <button name="Botón Editar Pedido" class="btn btn-danger btn-circle" type="button" value="Editar Pedido"
                  onclick="location.href='orderedit.php'" href="" title="Editar Pedido">
                  <i class="fas fa-edit"></i>
                </button>

              </div>
            </div>

            <!-- Body Form -->
            <div class="card mb-4 p-5">
              <div class="shopper-informations">

                <!-- Row 1 Form Order Admin Inputs -->
                <div class="row mb-5">

                  <!-- Data Order 1-->
                  <div class="col-sm-8">
                    <div class="bill-to">

                      <!-- Data Order Title-->
                      <h5>
                        Datos del Pedido
                      </h5><br>

                      <!-- Data Order 1 Column 1 -->
                      <div class="form-one">

                        <!-- Data Order ID -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-shield-alt" title="ID del Pedido"></i>
                              <h6>ID del Pedido</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="9999999999"
                          title="Identificador único del pedido registrado en la tienda."
                          maxlength="10" required disabled>

                        <!-- Data Client ID -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-shield-alt" title="ID del Cliente"></i>
                              <h6>ID del Cliente</h6>
                            </div>
                          </div>
                        </div>
                        <input type="text" placeholder="9999999999"
                          title="ID del Cliente. Identificador único del usuario registrado en la tienda." minlength="4"
                          maxlength="10" required disabled>

                      </div>

                      <!-- Data Order 1 Column 2 -->
                      <div class="form-two">

                        <!-- Data Order Message  -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-envelope-open-text"
                                title="Mensaje del Pedido"></i>
                              <h6>Mensaje del Pedido</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text" placeholder="Mensaje del Pedido" title="Mensaje personalizado del cliente para la tarjeta del pedido." rows="3" maxlength="300" value="Mensaje del Pedido" disabled></textarea>

                        <!-- Data Order Note  -->
                        <div class="row mt-3">
                          <div class="col-12">
                            <div class="d-flex">
                              <i style="margin-right: 10px" class="fas fa-sticky-note"
                                title="Mensaje del Pedido"></i>
                              <h6>Notas del Pedido</h6>
                            </div>
                          </div>
                        </div>
                        <textarea type="text" placeholder="Notas del Pedido" title="Notas, observaciones o indicaciones del cliente para el pedido." rows="3" maxlength="150" value="Notas del Pedido" disabled></textarea>

                      </div>
                    
                    </div>                                        
                  </div>

                  <!-- Data Order 2-->
                  <div class="col-sm-3 ce-inforight mb-5">
                    <div class="bill-to"><br>

                      <!-- Data Order State -->
                      <div class="row mt-5">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-check-circle" title="Estado del Pedido"></i>
                            <h6>Estado del Pedido</h6>
                          </div>
                        </div>
                      </div>
                      <select title="Estado del pedido creado por el cliente: Creado, Pagado, Enviado, Anulado, Devuelto o Finalizado. Explicación Estados del Pedido: - Creado: Pedido creado por un cliente sin pagar. - Pagado: Pedido que ya fue pagado y confirmado por la pasarela de pagos. - Enviado: Pedido que ya fue confirmado y enviado de existencias de bodega. - Anulado: Pedido que supero el plazo máximo para pago (24 horas), abandonado, anulado o cancelado por el cliente, pago sin procesar, no fue entregado aún. - Devuelto: Pedido que fue entregado correctamente pero que el cliente lo devolvió, se debe hacer devolución de dinero. - Reemplazado: Pedido entregado pero se realizó un cambio de producto del mismo lote por daño en producto o solicitado por el cliente. - Finalizado: Pedido entregado correctamente sin inconvenientes." required disabled>
                        <option title="Creado">
                          <span>
                          Creado
                          </span>
                        </option>
                        <option title="Pagado">
                          <span>
                          Pagado
                          </span>
                        </option>
                        <option title="Enviado">
                          <span>
                          Enviado
                          </span>
                        </option>
                        <option title="Anulado">
                          <span>
                          Anulado
                          </span>
                        </option>
                        <option title="Devuelto">
                          <span>
                          Devuelto
                          </span>
                        </option>
                        <option title="Finalizado">
                          <span>
                          Finalizado
                          </span>
                        </option>
                      </select>

                      <!-- Form User Date Start -->
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-plus" title="Fecha de Alta del Pedido"></i>
                            <h6>Fecha de Alta del Pedido</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="date" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha del registro o la creación del pedido registrado en la tienda." required disabled>

                      <!-- Form User Date Delivery -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha de Entrega del Pedido"></i>
                            <h6>Fecha de Entrega del Pedido</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" placeholder="" title="Fecha ingresada por el cliente para la entrega del pedido registrado en la tienda." required disabled>


                      <!-- Form User Date End -->
                      <div class="row mt-3">
                        <div class="col-12">
                          <div class="d-flex">
                            <i style="margin-right: 10px" class="fas fa-calendar-times" title="Fecha Fin del Pedido"></i>
                            <h6>Fecha Fin del Pedido</h6>
                          </div>
                        </div>
                      </div>
                      <!-- Falta Configurar horafecha -->
                      <input type="datetime-local" placeholder="" title="Fecha de la finalización del pedido registrado en la tienda." required disabled>

                    </div>
                  </div>

                  <!-- Start Data Order Products Main Table -->
                  <?php include_once 'includes/VA/orderdetailstable.php'?>
                  <!-- End Data Order Products Main Table -->

                  <!-- Order Totals -->
                  <div class="row">

                    <!-- Order Totals 1 -->
                    <div class="col-6 total_area2">

                      <!-- Order Payment Method -->
                      <h5 class="marginorder2">Método de Pago</h5>
                      <ul class="user_option">
                        <li>
                          <label><input disabled type="radio" id="tarjeta" value="tarjeta" name="metodopago" title="">
                          Tarjeta Crédito/Débito</label>
                        </li>
                        <li>
                          <label><input disabled type="radio" id="payu" value="payu" name="metodopago" title="PayU" checked>
                          PayU</label>
                        </li>
                        <li>
                          <label><input disabled type="radio" id="googlepay" value="googlepay" name="metodopago" title="Google Pay">
                          Google Pay</label>
                        </li>
                        <li>
                          <label><input disabled type="radio" id="paypal" value="paypal" name="metodopago" title="Paypal">
                          Paypal</label>
                        </li>
                        <li>
                          <label><input disabled type="radio" id="tb" value="tb" name="metodopago" title="Transferencia bancaria">
                          Transferencia bancaria</label>
                        </li>
                      </ul>
                    
                    </div>

                    <!-- Order Totals 2 -->
                    <div class="col-6 total_area">

                      <!-- Order Totals body -->
                      <h5 class="marginorder2 text-center">Totales</h5>  
                      <ul>
                        <li>Sub Total <span>$85.000</span></li> 
                        <!-- Pedidos superiores a $80000 es con envio gratis -->
                        <li>Valor envío <span>$0</span></li>
                        <li>Total <span>$85.000</span></li>
                      </ul>   

                    </div>

                  </div>

                </div>

                <!-- Start Row 2 Form User Client Data Inputs -->
                <?php include_once 'includes/VA/userviewformclientdata.php'?>
                <!-- End Row 2 Form User Client Data Inputs -->

              </div>
            </div>

          </form>
          <!-- End Order Edit Form -->