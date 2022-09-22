<?php if ($opcion == 'buscadorCliente') { ?>
    <button class="btn btn-danger " onclick="btn_cerrar();">Cerrar</button>
    <table style="text-align:center;background-color:white" border=1 cellspacing=1 cellpadding=3 bordercolor="666633">
        <tr>
            <th style="padding:10px">Nombre</th>
            <th style="padding:10px">Nit</th>
            <th style="padding:10px">Agregar</th>
        </tr>
        <?php foreach ($clientes->result() as $row) { ?>
            <tr>
                <td style="padding:10px"><?php echo $row->nombres . ' ' . $row->primerApellido . ' ' . $row->segundoApellido ?></td>
                <td style="padding:10px"><?php echo $row->nit ?></td>
                <td style="padding:10px"><a class="text-white" data-id='' onclick="agregarClienteInput(<?php echo $row->idCliente ?>,'<?php echo $row->nombres . ' ' . $row->primerApellido . ' ' . $row->segundoApellido ?>',<?php echo $row->nit ?>)" style="background-color: #004038 ;border-radius: 50%;padding: 5px 10px;text-decoration: none;color: white;font-weight: bold;" href="#">+</a></td>

            </tr>
        <?php } ?>


    </table>
<?php } ?>
<?php if ($opcion == 'buscadorProducto') { ?>
    <button class="btn btn-danger " onclick="btn_cerrar_producto();">Cerrar</button>
    <table style="text-align:center;background-color:white" border=1 cellspacing=1 cellpadding=3 bordercolor="666633">
        <tr>
            <th style="padding:10px">Producto</th>
            <th style="padding:10px">Código</th>
            <th style="padding:10px">Stock</th>
            <th style="padding:10px">Agregar</th>
        </tr>
        <?php foreach ($productos->result() as $row) { ?>
            <tr>
                <td style="padding:10px"><?php echo $row->nombreProducto ?></td>
                <td style="padding:10px"><?php echo $row->codigo ?></td>
                <td style="padding:10px"><?php echo $row->stock ?></td>
                <td style="padding:10px"><a class="text-white" data-id='' onclick="agregarProductoInput(<?php echo $row->idProducto?>,'<?php echo $row->nombreProducto?>',<?php echo $row->precioNormal?>,'<?php echo $row->codigo?>',<?php echo $row->stock?>)" style="background-color: #004038 ;border-radius: 50%;padding: 5px 10px;text-decoration: none;color: white;font-weight: bold;" href="#">+</a></td>

            </tr>
        <?php } ?>


    </table>
<?php } ?>