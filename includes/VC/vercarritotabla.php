            <!-- Start Items Cart -->
            <div class="table-responsive cart_info">

              <!-- Order ID -->
              <div class="review-payment">
                <h5>ID del Pedido #: <label><?php echo $pedido->idPedido ?></label></h5>
              </div>

              <table class="table table-condensed">

                <thead>
                  <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description">Descripción</td>
                    <td class="price">Precio</td>
                    <td class="quantity">Cantidad</td>
                    <td class="total">Total</td>
                    <td></td>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($detallesPedido as $detallePedido) { ?>
                    <tr>
                      <td class="cart_product">
                        <!-- TODO: agregar imagen -->
                        <img src="resources/images/Ekibanas/12ekibanas.png" alt="Img miniatura producto" title="">
                      </td>
                      <td class="cart_description">
                        <h4><a href="producto.php?id=<?php echo $detallePedido->productoId ?>" title="Nombre del Producto"><?php echo $detallePedido->nombreProducto ?></a></h4>
                        <h6><a href="categoria.php?id<?php echo $detallePedido->categoriaId ?>" title="Categoría"><?php echo $detallePedido->nombreCategoria ?></a></h6>
                        <p>SKU: <?php echo $detallePedido->skuProducto ?></p>
                      </td>
                      <td class="cart_price">
                        <p>$<?php echo $detallePedido->valorUnitarioProducto ?></p>
                      </td>
                      <td class="cart_quantity">
                        <div class="cart_quantity_button">                        
                          <input disabled class="cart_quantity_input" type="text" name="quantity" value="<?php echo $detallePedido->cantidadProducto ?>" autocomplete="off" size="2">                        
                        </div>
                      </td>
                      <td class="cart_total">
                        <p class="cart_total_price">$<?php echo $detallePedido->valorUnitarioProducto * $detallePedido->cantidadProducto ?></p>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>

              </table>

            </div>
            <!-- End Items Cart -->

