<!-- <?php
        //if ($this->session->userdata('usuario')) {
        ?> -->

<!---script de confirmacion para delete-->
<script type="text/javascript">
    function deleteConfirm(id) {
        if (confirm('¿Esta realmente segur@ de Eliminar?')) {
            window.location.href = "producto/delete" + "/" + id;

        }
    }
</script>



<?php
//print_r($marcas->result());

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
            <?php echo $producto->num_rows(); ?>
            Productos<br>
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
                                <th>Codigo</th>
                                <th>Foto</th>
                                <th>Nombre Producto</th>
                                <th>Precio Normal</th>
                                <th>Stock</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Descripción</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $indice=1;
                            foreach($producto->result() as $row){
                             ?>
                            <tr>
                                <td><?php echo $indice;?></td>
                                <td><?php echo $row->codigo;?></td>
                                <td><?php echo $row->foto;?></td>
                                <td><?php echo $row->nombreProducto;?></td>
                                <td><?php echo $row->precioNormal;?></td>               
                                <td><?php echo $row->stock;?></td>
                                <td><?php echo $row->nombreCategoria;?></td>
                                <td><?php echo $row->nombreMarca;?></td>
                                <td><?php echo $row->descripcion;?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="<?php echo base_url('producto/edit')."/".$row->idProducto; ?>"><i class="icon-file-pdf" ></i> Modificar</a></li>
                                                <li><a href="#" onclick="deleteConfirm(<?php echo $row->idProducto; ?>)"><i class="icon-file-excel"></i> Eliminar</a></li>
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
                                                    <input type="text" class="form-control input-xlg" placeholder="Código" id="txtCodigo" name="txtCodigo">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-code"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-lg" placeholder="Nombre del producto" id="txtNombreProducto" name="txtNombreProducto">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-cube4"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="number" class="form-control" placeholder="Precio Normal" id="txtPrecioNormal" name="txtPrecioNormal">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-coin-dollar"></i>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback has-feedback-left">
                                                    <input type="text" class="form-control input-xs" placeholder="Stock" id="txtStock" name="txtStock">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-flip-vertical3"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                             
                                              <!-- Default select -->

                                              <div class="form-group">
                                                    <label>Categoria</label>
                                                    <select class="bootstrap-select" data-width="100%" id="cbxCategoria" name="cbxCategoria">
                                                        <?php 
                                                        foreach($categorias->result() as $row){
                                                        ?>
                                                        <option value="<?php echo $row->idCategoria;?>"><?php echo $row->nombreCategoria;?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!-- /default select -->

                                                
                                               <!-- Default select -->

                                              <div class="form-group">
                                                    <label>Marca</label>
                                                    <select class="bootstrap-select" data-width="100%" id="cbxMarca" name="cbxMarca">
                                                        <?php 
                                                        foreach($marcas->result() as $row){
                                                        ?>
                                                        <option value="<?php echo $row->idMarca;?>"><?php echo $row->nombreMarca;?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!-- /default select -->                               
                                                

                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control input-xs" placeholder="Descripcion" id="txtDescripcion" name="txtDescripcion">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-file-openoffice"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <div class="text-right">
                            <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>producto" type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
                                <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar <i class="icon-arrow-right14 position-right"></i></button>
                            
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