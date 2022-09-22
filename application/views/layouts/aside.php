<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html"><img
                    src="<?php echo base_url(); ?>Limitless/global_assets/images/logoari.jpeg" width="200" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
                </li>


            </ul>



            <ul class="nav navbar-nav navbar-right">




                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url(); ?><?php echo $this->session->userdata('foto'); ?>" alt="">
                        <span><?php if($this->session->userdata('tipo')==1){echo "Admin";}else{echo "User";}  ?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> Mi perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Ajustes de cuenta</a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout"><i class="icon-switch2"></i> Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img
                                        src="<?php echo base_url(); ?><?php echo $this->session->userdata('foto'); ?>"
                                        class="img-circle img-sm" alt="">
                                    <span><?php if($this->session->userdata('tipo')==1){echo "Admin";}else{echo "User";}  ?></span></a>


                                <div class="media-body">
                                    <span class="media-heading text-semibold">SISTEMA DE VENTAS</span>

                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Menú</span> <i class="icon-menu"
                                        title="Main pages"></i></li>
                                <li class="active"><a href="#"><i class="icon-home4"></i> <span>Inicio</span></a></li>
                                <li>
                                    <a href="#"><i class="icon-user-plus"></i> <span>Usuarios</span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>usuario">Usuarios</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#"><i class="icon-users4"></i> <span>Clientes</span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>cliente">Clientes</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-cube4"></i> <span>Productos</span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>producto">Producto</a></li>
                                        <li><a href="<?php echo base_url(); ?>categoria">Categoria</a></li>
                                        <li><a href="<?php echo base_url(); ?>marca">Marca</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-cart"></i> <span>Ventas</span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>venta">Ventas</a></li>
                                    </ul>
                                </li>



                                <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-default">


                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>


                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">