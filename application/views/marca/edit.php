<?php
//var_dump($getEstudiante);
//print_r($getCategoria->result())

?>


<div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">

                        <form class="form-horizontal" action="<?php echo base_url('marca/update') ?>"  method="POST">

                            <fieldset class="content-group">
                            <?php foreach ($getMarca->result() as $row) { ?>
                                <input type="hidden" name="txtIdMarca" value="<?php echo $row->idMarca; ?>" >
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                            
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xlg" id="txtNombreMarca" name="txtNombreMarca" value="<?php echo $row->nombreMarca; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-list-ordered"></i>
                                                    </div>
                                                </div>

                                                                                            

                                                </div>

                                            <div class="col-md-6">
                                             
                                                                

                                              

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </fieldset>

                            <div class="text-right">
                                <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>marca" type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i class="icon-arrow-right14 position-right"></i></button>
                            
                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>