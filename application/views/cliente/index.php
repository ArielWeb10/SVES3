<!-- <?php
        //if ($this->session->userdata('usuario')) {
        ?> -->

<!---script de confirmacion para delete-->
<script type="text/javascript">
function deleteConfirm(id) {
    if (confirm('¿Esta realmente segur@ de Eliminar?')) {
        window.location.href = "cliente/delete" + "/" + id;

    }
}
</script>



<?php
//print_r($cliente->result());

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
                <a href="#messages-mon" class="text-size-small text-uppercase bg-gray-100" data-toggle="tab">
                    agregar
                </a>
            </li>

        </ul>

        <br>
        <p class="text-muted font-13 m-b-30">
            Actualmente contamos con
            <?php echo $cliente->num_rows(); ?>
            Clientes<br>
            Hora Actual: <?php echo date('d/m/Y H:i:s')?>
            <br>
            Tipo: <?php echo $this->session->userdata('tipo')?>
            <br>
            ID: <?php echo $this->session->userdata('idusuario')?>
            <br>
            Estos datos no serán visibles en el producto final.
        </p>

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
                                <th>Nombre Completo</th>

                                <th>C.I.</th>
                                <th>F. Nacimiento</th>
                                <th>Sexo</th>
                                <th>Telefono</th>
                                <th>Nit</th>
                                <th>Creado</th>
                                <th>Modificado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $indice=1;
                            foreach($cliente->result() as $row){
                             ?>
                            <tr>
                                <td><?php echo $indice;?></td>
                                <td><?php echo $row->nombres.' '.$row->primerApellido.' '.$row->segundoApellido;?></td>
                                <td><?php echo $row->carnetIdentidad;?></td>
                                <td><?php echo $row->fechaNacimiento;?></td>
                                <td><?php echo $row->sexo;?></td>
                                <td><?php echo $row->telefono;?></td>
                                <td><?php echo $row->nit;?></td>
                                <td><?php echo $row->fechaRegistro; ?></td>
                                <td><?php echo $row->fechaActualizacion; ?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a
                                                        href="<?php echo base_url('cliente/edit')."/".$row->idCliente; ?>"><i
                                                            class="icon-file-pdf"></i> Modificar</a></li>
                                                <li><a href="#"
                                                        onclick="deleteConfirm(<?php echo $row->idCliente; ?>)"><i
                                                            class="icon-file-excel"></i> Eliminar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php 
                            $indice++;
                        }?>
                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->
            </div>

            <div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">

                        <form class="form-horizontal" action="" name="FormDatos" id="FormDatos" method="POST">

                            <fieldset class="content-group">
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xlg"
                                                        placeholder="nombres" id="txtNombres" name="txtNombres">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-lock"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg"
                                                        placeholder="Apellido Paterno" id="txtPrimerApellido"
                                                        name="txtPrimerApellido">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg"
                                                        placeholder="Apellido Materno" id="txtSegundoApellido"
                                                        name="txtSegundoApellido">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="alpha-numeric" class="form-control"
                                                        placeholder="Numero de carnet" id="txtCarnetIdentidad"
                                                        name="txtCarnetIdentidad">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-grid52"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg"
                                                        placeholder="Fecha Nacimiento" id="txtFechaNacimiento"
                                                        name="txtFechaNacimiento">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-calendar52"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" placeholder="Sexo"
                                                        id="txtSexo" name="txtSexo">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-spam"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control"
                                                        placeholder="Numero de telefono" id="txtTelefono"
                                                        name="txtTelefono">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-phone-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control"
                                                        placeholder="Nro. nit del cliente" id="txtNit" name="txtNit">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-calculator4"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="text-right">
                                <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>cliente"
                                    type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar
                                    <i class="icon-arrow-right14 position-right"></i></button>

                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>


        </div>
        <!-- /tabs content -->

    </div>


</div>
<!-- /content -->



<!-- <?php
        //}else{
        //  redirect('login','refresh');
        //}
        ?> -->