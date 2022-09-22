<?php
//var_dump($getEstudiante);
//print_r($getProducto->result())

?>


<div class="tab-pane" id="messages-mon">
                <!-- Form horizontal -->
                <div class="panel panel-flat">

                    <div class="panel-body">
                            <h2>Modificar Producto</h2>
                        <form class="form-horizontal" action="<?php echo base_url('producto/update') ?>"  method="POST">

                            <fieldset class="content-group">
                            <?php foreach ($getProducto->result() as $row) { ?>
                                <input type="hidden" name="txtIdProducto" value="<?php echo $row->idProducto; ?>" >
                                <div class="form-group">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                            
                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xlg" id="txtCodigo" name="txtCodigo" value="<?php echo $row->codigo; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-code"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" id="txtNombreProducto" name="txtNombreProducto" value="<?php echo $row->nombreProducto; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-cube4"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control" id="txtPrecioNormal" name="txtPrecioNormal" value="<?php echo $row->precioNormal; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-coin-dollar"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xs" id="txtStock" name="txtStock" value="<?php echo $row->stock; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-flip-vertical3"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                             
                                              <!-- Default select -->

                                              <div class="form-group">
                                                    <label>Categoria</label>
                                                    <?php 
                                                        $listaCategoria=array();
                                                        foreach ($categorias->result() as $row1) { 
                                                            $listaCategoria[$row1->idCategoria]=$row1->nombreCategoria;
                                                                 } 
                                                          echo form_dropdown('cbxCategoria',$listaCategoria,$row->idCategoria,'class="form-control"');
                                                              ?>

                                                </div>
                                                <!-- /default select -->

                                                
                                               <!-- Default select -->

                                              <div class="form-group">
                                                    <label>Marca</label>
                                                    <?php 
                                                        $listaMarca=array();
                                                        foreach ($marcas->result() as $row1) { 
                                                            $listaMarca[$row1->idMarca]=$row1->nombreMarca;
                                                                 } 
                                                          echo form_dropdown('cbxMarca',$listaMarca,$row->idMarca,'class="form-control"');
                                                              ?>
                                                </div>
                                                <!-- /default select -->
                                                                                             

                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control input-xs" id="txtDescripcion" name="txtDescripcion" value="<?php echo $row->descripcion; ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-openoffice"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </fieldset>

                            <div class="text-right">
                                <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>producto" type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i class="icon-arrow-right14 position-right"></i></button>
                            
                        </form>
                    </div>
                </div>
                <!-- /form horizontal -->

            </div>