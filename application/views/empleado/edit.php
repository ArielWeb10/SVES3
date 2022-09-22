<?php
//var_dump($getEstudiante);
//print_r($getProducto->result())

?>


<div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">

                        <form class="form-horizontal" action="<?php echo base_url('empleado/update') ?>"  method="POST">

                            <fieldset class="content-group">
                            <?php foreach ($getEmpleado->result() as $row) { ?>
                                <input type="hidden" name="txtIdEmpleado" value="<?php echo $row->idEmpleado; ?>" >
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                            
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xlg" id="txtNombres" name="txtNombres" value="<?php echo $row->nombres; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-lock"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtPrimerApellido" name="txtPrimerApellido" value="<?php echo $row->primerApellido; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtSegundoApellido" name="txtSegundoApellido" value="<?php echo $row->segundoApellido; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtFechaNacimiento" name="txtFechaNacimiento" value="<?php echo $row->fechaNacimiento; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-calendar52"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control" id="txtCarnetIdentidad" name="txtCarnetIdentidad" value="<?php echo $row->carnetIdentidad; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-grid52"></i>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtSexo" name="txtSexo" value="<?php echo $row->sexo; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-make-group"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control" id="txtTelefono" name="txtTelefono" value="<?php echo $row->telefono; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-phone-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $row->email; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-mail5"></i>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </fieldset>

                            <div class="text-right">
                                <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>empleado" type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar
                                </a>
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i class="icon-arrow-right14 position-right"></i></button>
                            
                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>