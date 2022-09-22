<!-- <?php
        //if ($this->session->userdata('usuario')) {
        ?> -->

<!---script de confirmacion para delete-->
<script type="text/javascript">
    function deleteConfirm(id) {
        if (confirm('¿Esta realmente segur@ de Eliminar?')) {
            window.location.href = "marca/delete" + "/" + id;

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
                                <th>Nombre Marca</th>
                                <th>Fecha Registro</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $indice=1;
                            foreach($marcas->result() as $row){
                             ?>
                            <tr>
                                <td><?php echo $indice?></td>
                                <td><?php echo $row->nombreMarca?></td>
                                <td><?php echo $row->fechaRegistro?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="<?php echo base_url('marca/edit')."/".$row->idMarca; ?>"><i class="icon-file-pdf" ></i> Modificar</a></li>
                                                <li><a href="#" onclick="deleteConfirm(<?php echo $row->idMarca; ?>)"><i class="icon-file-excel"></i> Eliminar</a></li>
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
                                                    <input type="text" class="form-control input-xlg" placeholder="nombre marca" id="txtNombreMarca" name="txtNombreMarca">
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

                            </fieldset>

                            <div class="text-right">
                            <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>marca" type="submit" name="action"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
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