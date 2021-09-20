<!--Header-->
<header class="app-header app-header-1 boxed" >
    <div class="container" >
        <div class="header-wrap">
            <button class="button button-menu button-open-sidenav">
                <span></span>
            </button>
            <div class="header-menu">
                <ul>
                    <li class="has-menu" data-megamenu-link="mega-menu-1">
                        <div class="mega-menu-link">
                            <span class="title">Alumnos</span>
                            <span class="icon fa fa-angle-left"></span>
                        </div>
                        <div data-megamenu-id="mega-menu-1" class="mega-menu mega-menu-1">
                            <div class="mega-menu-inner">
                                <div>
                                    <div class="megamenu-info mb-15">
                                        <p class="text-center mb-30">Seleccione un establecimiento para inscribir</p>
                                    </div>
                                    <div class="row row-lg-5 row-xl-5">
                                        <div class="col el-flag">
                                            <div class="inner">
                                                <a href="<?php echo base_url(); ?>alumno/alumno_new">
                                                    <img src="<?php echo base_url(); ?>assets/images/gatito.svg"
                                                        alt="alt">
                                                    <span class="title">Ingresar Estudiante</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col el-flag">
                                            <div class="inner">
                                                <a href="<?php echo base_url('alumno/'); ?>">
                                                    <img src="<?php echo base_url(); ?>assets/images/gatito2.png"
                                                        alt="alt">
                                                    <span class="title">Ver Estudiantes</span>
                                                </a>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="has-menu" data-megamenu-link="mega-menu-2">
                        <div class="mega-menu-link">
                            <span class="title">Cursos</span>
                            <span class="icon fa fa-angle-left"></span>
                        </div>
                        <div data-megamenu-id="mega-menu-2" class="mega-menu mega-menu-2">
                            <div class="mega-menu-inner">
                                <div>
                                    <div class="espard-menu">
                                        <div class="row row-xl-5">
                                            <!--Col-->
                                            <div class="col">
                                                <p class="title">Datos de los cursos</p>
                                                <ul>
                                                    <li>
                                                        <a href="page-blog.html">
                                                            <span class="text">Ver Cursos</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="page-single-post.html">
                                                            <span class="text">Agregar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--/-->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="page-cooperation.html">
                            <span class="text">Maestros</span>
                            <span class="icon fa fa-angle-left"></span>
                        </a>
                    </li>
                    <li>
                        <a href="page-cooperation.html">
                            <span class="text">Usuarios</span>
                            <span class="icon fa fa-angle-left"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-logo">
                <a href="index.html" class="primary-logo">
                    <span class="text-1"><?php echo $this->session->userdata('name_user'); ?></span>
                    <span class="text-2"></span>
                </a>
            </div>
            <div class="header-links">
                <a href="<?php echo base_url();?>login/logout" class="button button-md button-primary">
                    <span class="title">Cerrar Sesion</span>
                </a>
            </div>
        </div>
    </div>
</header>