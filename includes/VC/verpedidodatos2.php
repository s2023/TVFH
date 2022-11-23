            <!-- Start Data Order 2 Section -->
            <div id="do_action">
              
              <div class="container">

                <div class="row">

                  <!-- Date, Message and Notes Order -->
                  <div class="col-sm-6">
                    <div class="chose_area">
                    
                      <!-- Order State -->
                      <div class="row">
                        <div class="col-sm-12">
                          <h5 class="marginorder2">Estado del Pedido: <label>Finalizado</label>.</h5>
                        </div>                      
                      </div>

                      <!-- Order Dates -->
                      <div class="row">

                        <div class="col-sm-6">                          
                          <!-- Order Date Purchase (fechaInicioPedido)-->
                          <h5 class="marginorder2">Fecha de Compra:</h5>
                          <input disabled class="marginorder2" type="date" id="datedelivery" name="fechaentrega" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de entrega:" required>
                        </div>      

                        <div class="col-sm-6">
                          <!-- Order Date Delivery -->
                          <h5 class="marginorder2">Fecha de entrega:</h5>
                          <input disabled class="marginorder2" type="date" id="datedelivery" name="fechaentrega" value="<?php echo date("Y-m-d");?>" min="<?php echo date("Y-m-d");?>" title="Fecha de entrega:" required>
                        </div>                        

                      </div>

                      <!-- Order Message -->
                      <h5 class="marginorder2">Mensaje en la tarjeta:</h5>
                      <textarea disabled name="Mensaje Pedido" placeholder="Escriba un mensaje para la tarjeta..." rows="5" maxlength="300"></textarea>

                      <!-- Order Notes -->
                      <h5 class="marginorder2">Notas del Pedido</h5>
                      <textarea disabled name="Mensaje Pedido" placeholder="Escriba una nota para el pedido (indicación, señal, puerta, etc...)" rows="4" maxlength="150"></textarea>
                      
                      </div>
                  </div>
                  
                  <!-- Order Totals -->
                  <div class="col-sm-6">

                    <!-- Order Totals 1 -->
                    <div class="total_area2">

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
                    <div class="total_area">

                      <!-- Order Totals body -->
                      <h5 class="marginorder2 text-center">Totales</h5>  
                      <ul>
                        <li>Sub Total <span>$20.000</span></li>                  
                        <li>Valor envío <span>$12.000</span></li>
                        <li>Total <span>$32.000</span></li>
                      </ul>   

                    </div>

                  </div>
                
                </div>

              </div>

            </div>
            <!-- End Data Order 2 Section -->