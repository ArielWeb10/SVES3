<?php
//var_dump($getEstudiante);
//print_r($getProducto->result())

?>


<div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">
                            <h2>Modificar Usuario</h2>
                        <form class="form-horizontal" action="<?php echo base_url('usuario/update') ?>"  method="POST">

                            <fieldset class="content-group">
                            <?php foreach ($getUsuario->result() as $row) { ?>
                                <input type="hidden" name="txtIdUsuario" value="<?php echo $row->idUsuario; ?>" >
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-6">

                                              <!-- Default select -->

                                              <div class="form-group">
                                                    <label>Empleado</label>
                                                    <?php 
                                                        $listaEmpleados=array();
                                                        foreach ($empleado->result() as $row1) { 
                                                            $listaEmpleados[$row1->idEmpleado]=$row1->nombres;
                                                                 } 
                                                          echo form_dropdown('cbxEmpleado',$listaEmpleados,$row->idEmpleado,'class="form-control"');
                                                              ?>

                                                </div>
                                            
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xlg" id="txtFoto" name="txtFoto" value="<?php echo $row->foto; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-office"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtLogin" name="txtLogin" value="<?php echo $row->login; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-make-group"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control" id="txtContrasenia" name="txtContrasenia" value="<?php echo $row->contrasenia; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-droplets"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control input-xs" id="txtTipo" name="txtTipo" value="<?php echo $row->tipo; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-help"></i>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </fieldset>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i class="icon-arrow-right14 position-right"></i></button>
                            
                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>