<?php
//var_dump($getEstudiante);
//print_r($getProducto->result())

?>

<div class="tab-pane" id="messages-mon">
    <!-- Form horizontal -->
    <div class="panel panel-flat">

        <div class="panel-body">
            <h2>Modificar Usuario</h2>
            <form class="form-horizontal" action="<?php echo base_url('usuario/update') ?>" method="POST" enctype="multipart/form-data">

                <fieldset class="content-group">
                    <?php foreach ($getUsuario->result() as $row) { ?>
                    <input type="hidden" name="txtIdUsuario" value="<?php echo $row->idUsuario; ?>">
                    <div class="form-group">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Default select  -->


                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>nombres</label>
                                        <input type="text" class="form-control input-lg" id="txtNombres"
                                            name="txtNombres" value="<?php echo $row->nombres; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-lock"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Apellido Paterno</label>
                                        <input type="text" class="form-control input-lg" id="txtPrimerApellido"
                                            name="txtPrimerApellido" value="<?php echo $row->primerApellido; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Apellido Materno</label>
                                        <input type="text" class="form-control input-lg" id="txtSegundoApellido"
                                            name="txtSegundoApellido" value="<?php echo $row->segundoApellido; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-check"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Fecha de Nacimiento</label>
                                        <input type="text" class="form-control input-lg" id="txtFechaNacimiento"
                                            name="txtFechaNacimiento" value="<?php echo $row->fechaNacimiento; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-calendar52"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Nro. Carnet</label>
                                        <input type="text" class="form-control input-lg" id="txtCarnetIdentidad"
                                            name="txtCarnetIdentidad" value="<?php echo $row->ci; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-grid52"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Género</label>
                                        <input type="text" class="form-control input-lg" id="txtSexo" name="txtSexo"
                                            value="<?php echo $row->genero; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-make-group"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Teléfono</label>
                                        <input type="text" class="form-control input-lg" id="txtTelefono"
                                            name="txtTelefono" value="<?php echo $row->telefono; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-phone-plus"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Correo electrónico</label>
                                        <input type="text" class="form-control input-lg" id="txtEmail" name="txtEmail"
                                            value="<?php echo $row->email; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-mail5"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Login</label>
                                        <input type="text" class="form-control input-lg" id="txtLogin" name="txtLogin"
                                            value="<?php echo $row->login; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Contraseña</label>
                                        <input type="text" class="form-control" id="txtContrasenia"
                                            name="txtContrasenia" value="<?php echo $row->contrasenia; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-lock"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <label>Tipo</label>
                                        <input type="number" class="form-control input-xs" id="cbxTipo" name="cbxTipo"
                                            value="<?php echo $row->tipo; ?>">
                                        <div class="form-control-feedback">
                                            <i class="icon-grid"></i>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback has-feedback-left">
                                        <div class="bootstrap-select">
                                            <span>Foto</span>
                                            <input type="file" id="imagen" name="imagen">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="txtImagen"
                                                id="txtImagen">
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                    <?php }?>
                </fieldset>

                <div class="text-right">
                    <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>usuario" type="submit"
                        name="action"><i class="fa fa-arrow-circle-left"></i>Cancelar</a>
                    <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i
                            class="icon-arrow-right14 position-right"></i></button>

            </form>
        </div>
    </div>
    <!-- /form horizontal -->

</div>