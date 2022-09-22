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

function verMas(id) {
    //alert(id);


    //var idDiamante = selectObject.value;
    // var idDiamante = $("#cbxDiamante").val();
    // var cantidad = $("#cbxCantidad").val();
    //alert(cantidad);

    $.ajax({
        url: 'usuario/getUsuario',
        type: 'POST',
        data: {
            id: id
        }
    }).done(function(data) {
        //alert(data);
        $("#modal_form_vertical").modal('show');
        var reg = eval(data);
       
        for (var i = 0; i < reg.length; i++) {
           
            var ruta = '<?php echo base_url();?>' + reg[i]['foto'];
            var img = document.createElement('img');
            img.setAttribute("src", ruta);
            img.setAttribute("width", "120");
            img.setAttribute("height", "150");
            $("#ContenedorImg").empty();
            document.getElementById("ContenedorImg").appendChild(img);

            $('#lblNombre').html(reg[i]['nombres'] + ' ' + reg[i]['primerApellido'] + ' ' + reg[i][
                'segundoApellido'
            ]);
            // aqui ingresar demas datos
            $('#lblCi').html(reg[i]['ci']);
            $('#lblFechaNacimiento').html(reg[i]['fechaNacimiento']);
            $('#lblEmail').html(reg[i]['email']);
        }

    });
    return false;



}
</script>



<?php
//print_r($usuario->result());

?>


<!-- Vertical form modal -->
<div id="modal_form_vertical" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Datos del Usuario</h5>
            </div>

            <form action="#">
                <div class="modal-body">
                    <div class="card">
                        <div id="ContenedorImg" name="ContenedorImg"></div>
                        <h1 id="lblNombre" name="lblNombre"></h1>
                        <h3 id="lblCi" name="lblCi"></h3>
                        <h3 id="lblFechaNacimiento" name="lblFechaNacimiento"></h3>
                        <h3 id="lblEmail" name="lblEmail"></h3>
                        <p class="title">Sistemas Informaticos</p>
                        <p>INCOS Nocturno</p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /vertical form modal -->



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
                                <th>Nombre Completo</th>
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
                            $indice=1;
                            foreach($usuario->result() as $row){
                             ?>
                            <tr>
                                <td><?php echo $indice;?></td>
                                <td><?php echo $row->nombres.' '.$row->primerApellido.' '.$row->segundoApellido;?></td>
                                <td>
                                    <div class="u-img"><img src="<?php echo base_url();?><?php echo $row->foto;?>"
                                            width="75" height="75" alt="user"></div>
                                </td>
                                <td><?php echo $row->login;?></td>
                                <td><?php echo $row->ci;?></td>
                                <td><?php 
                                if($row->tipo==1) {
                                    echo 'Administrador';
                                }else{
                                    echo 'Empleado';
                                }
                                ?></td>
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
                                                        href="<?php echo base_url('usuario/edit')."/".$row->idUsuario; ?>"><i
                                                            class="icon-file-pdf"></i> Modificar</a></li>
                                                <li><a href="#"
                                                        onclick="deleteConfirm(<?php echo $row->idUsuario; ?>)"><i
                                                            class="icon-file-excel"></i> Eliminar</a></li>
                                                <li><a href="#" onclick="verMas(<?php echo $row->idUsuario; ?>)"><i
                                                            class="icon-file-excel"></i> Ver Mas...</a></li>
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

                        <!-- Default select -->

                        <form class="form-horizontal" action="usuario/insert" name="FormDatos" id="FormDatos"
                            method="POST" enctype="multipart/form-data">

                            <fieldset class="content-group">
                                <div class="form-group">
                                    <div class="col-lg-12">

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control input-xlg" placeholder="nombres"
                                                    id="txtNombres" name="txtNombres">
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
                                                <input type="text" class="form-control input-lg"
                                                    placeholder="Fecha Nacimiento" id="txtFechaNacimiento"
                                                    name="txtFechaNacimiento">
                                                <div class="form-control-feedback">
                                                    <i class="icon-calendar52"></i>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="alpha-numeric" class="form-control" placeholder="Numero de carnet"
                                                    id="txtCarnetIdentidad" name="txtCarnetIdentidad">
                                                <div class="form-control-feedback">
                                                    <i class="icon-grid52"></i>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control input-lg" placeholder="Sexo"
                                                    id="txtSexo" name="txtSexo">
                                                <div class="form-control-feedback">
                                                    <i class="icon-make-group"></i>
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

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control"
                                                    placeholder="Correo electronico del cliente" id="txtEmail"
                                                    name="txtEmail">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mail5"></i>
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control" placeholder="Ingrese su Loguin"
                                                    id="txtLogin" name="txtLogin">
                                                <div class="form-control-feedback">
                                                    <i class="icon-droplets"></i>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="text" class="form-control input-xs"
                                                    placeholder="contrasenia" id="txtContrasenia" name="txtContrasenia">
                                                <div class="form-control-feedback">
                                                    <i class="icon-help"></i>
                                                </div>
                                            </div>

                                            <div class="form-group has-feedback has-feedback-left">
                                                <span>Tipo</span>
                                                <select class="bootstrap-select" name="cbxTipo" id="cbxTipo">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Empleado</option>
                                                </select>

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

                            </fieldset>

                            <div class="text-right">
                                <a class="btn btn-primary" id="btnCancelarE" href="<?php echo base_url();?>usuario"
                                    type="submit" name="action"><i class="fa fa-arrow-circle-left"></i>Cancelar</a>
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