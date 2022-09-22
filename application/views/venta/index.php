<!-- <?php
        //if ($this->session->userdata('usuario')) {
        ?> -->

<!---script de confirmacion para delete-->
<script type="text/javascript">
    function deleteConfirm(id) {
        if (confirm('¿Esta realmente segur@ de Eliminar?')) {
            window.location.href = "usuario/delete" + "/" + id;

        }
    }
</script>



<?php
//print_r($usuario->result());

?>
<!-- content-->
<div class="row">

    <div class="col-lg-12">

        <!-- Tabs -->
        <ul class="nav nav-lg nav-tabs nav-left no-margin no-border-radius   border-top border-top-indigo-100">
            <li class="active">
                <a href="#messages-tue" class="text-size-small text-uppercase bg-gray-100" data-toggle="tab">
                    lista
                </a>
            </li>

            <li>

                <button type="button" class="btn bg-gray-100 text-uppercase text-black" data-toggle="modal" data-target="#exampleModal">
                    Agregar Venta
                </button>
                <!-- <a href="#messages-mon" class="text-size-small text-uppercase bg-gray-100" data-toggle="tab">
                    agregar
                </a> -->
            </li>

        </ul>
        <!-- /tabs -->
        <!-- Tabs content -->
        <div class="tab-content">
            <div class="tab-pane active " id="messages-tue">
                <!-- Basic datatable -->
                <div class="panel panel-flat">

                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Usuario</th>
                                <th>Foto</th>
                                <th>Login</th>
                                <th>Nro. Carnet</th>
                                <th>Tipo</th>
                                <th>Creado</th>
                                <th>Modificado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $indice = 1;
                            foreach ($usuario->result() as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $indice; ?></td>
                                    <td><?php echo $row->nombres; ?></td>
                                    <td><?php echo $row->foto; ?></td>
                                    <td><?php echo $row->login; ?></td>
                                    <td><?php echo $row->ci; ?></td>
                                    <td><?php echo $row->tipo; ?></td>
                                    <td><?php echo $row->fechaRegistro; ?></td>
                                    <td><?php echo $row->fechaActualizacion; ?></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="<?php echo base_url('usuario/edit') . "/" . $row->idUsuario; ?>"><i class="icon-file-pdf"></i> Modificar</a></li>
                                                    <li><a href="#" onclick="deleteConfirm(<?php echo $row->idUsuario; ?>)"><i class="icon-file-excel"></i> Eliminar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php
                                $indice++;
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->
            </div>

            <div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">


                    <!-- aqui va el code -->

           
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>



        </div>
        <!-- /tabs content -->

    </div>


</div>
<!-- /content -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="width:95% !important;height:80% !important; ">
        <div class="modal-content" style="height:95% !important; ">
        <form class="form-horizontal" action="" name="FormDatos" id="FormDatos" method="POST">
            <div class="modal-header " style="background-color: #263238;height:90px">
                <h2 class="modal-title text-center text-white " id="exampleModalLabel" style="font-size:50px !important">Generar Venta</h2>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height:100% !important;height:80% !important;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5 " style="margin-top:50px !important">
                            <div class="form-group has-feedback has-feedback-left ">
                                <input type="text" class="form-control input-lg" placeholder="Cliente" id="cliente" name="txtFoto" onkeyup="btn_buscar_cliente();">
                                <div class="form-control-feedback">
                                    <i class="icon-make-group"></i>
                                </div>
                            </div>
                            <div id="seleccionarCliente" style="padding:10px;text-align:right;position:absolute;background-color:white;z-index:9;top:40px"></div>
                            <div class="container-busqueda"></div>
                            <div class="form-group has-feedback has-feedback-left ">
                                <input type="text" class="form-control input-lg" placeholder="Producto" id="producto" name="txtFoto" onkeyup="btn_buscar_producto();">
                                <div class="form-control-feedback">
                                    <i class="icon-make-group"></i>
                                </div>
                            </div>
                            <div id="seleccionarProducto" style="padding:10px;text-align:right;position:absolute;background-color:white;z-index:9;top:100px"></div>

                            <div class="form-group has-feedback has-feedback-left col-md-3" >
                                <p id='txtCantidadProducto' style="margin-bottom:0px">Cantidad</p>
                                <input type="text" class="form-control input-lg" placeholder="Cantidad" id="cantidad" name="txtFoto" onkeyup="btn_calcular_total();" >
                                <div class="form-control-feedback">

                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left col-md-3">
                                Precio Venta
                                <input type="text" class="form-control input-lg" placeholder="Precio" id="precio" name="txtFoto" onkeyup="btn_calcular_total();">
                                <div class="form-control-feedback">

                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left col-md-3">
                                Precio Establecido
                                <input type="text" class="form-control input-lg" placeholder="Precio" id="precioNormal" name="txtFoto" disabled>
                                <div class="form-control-feedback">

                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left col-md-3">
                                Total
                                <input type="text" class="form-control input-lg  " placeholder="Total" id="total"   name="txtFoto" disabled>
                                <div class="form-control-feedback">

                                </div>
                            </div>
                            <div class="col-md-12 mx-auto text-center">
                                <button type="button" onclick="agregarProducto();" style="margin-top:15px; width:150px; height:50px" class="btn btn-success mx-auto">Agregar</button>
                            </div>
                        </div>

                        <div class="col-md-6 " style="margin-left:100px !important">
                            <h2 class="text-center ">Lista De Productos</h2>
                            <div id="carritoB" style="height:300px;overflow-y:scroll">

                                <table class="table datatable-basic" id="listaCarrito">
                                    <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Total</th>

                                            <th class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <!-- <tr>
                                            <td>dwa</td>
                                            <td>dwa</td>
                                            <td>dwa</td>
                                            <td>wda</td>

                                            <td class="text-center">
                                                <a class="text-white" style="background-color: #004038 ;border-radius: 50%;padding: 5px 10px;text-decoration: none;color: white;font-weight: bold;" href="#">X</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>dwa</td>
                                            <td>dwa</td>
                                            <td>dwa</td>
                                            <td>wda</td>

                                            <td class="text-center">
                                                <a class="text-white" style="background-color: #004038 ;border-radius: 50%;padding: 5px 10px;text-decoration: none;color: white;font-weight: bold;" href="#">X</a>
                                            </td>
                                        </tr> -->


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer bg-secondary text-center p-1" style="background-color: #004038 ; height:90px">
                <button type="button" class="btn btn-danger mt-auto" style="margin-top:15px; width:150px; height:50px" data-dismiss="modal">Cancelar Venta</button>
                <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-success" style="margin-top:15px; width:150px; height:50px">Generar Venta</button>
            </div>
        </form>
        </div>
    </div>
</div>



<!-- <?php
        //}else{
        //  redirect('login','refresh');
        //}
        ?> -->