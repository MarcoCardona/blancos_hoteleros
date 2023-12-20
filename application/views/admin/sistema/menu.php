<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Administracion</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-home"></i> Usuarios
                            <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.html">Lista de usuarios</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Herramientas
                            <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="form.html">Redes sociales</a></li>
                            <li><a href="form.html">Pagina de contacto</a></li>
                            <li><a href="form.html">Diseño</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Contenido Web</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-home"></i> Categorias
                            <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url();?>/administrador/categorias/lista"">Lista de categorias</a></li>

                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-edit"></i> Productos
                            <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo base_url();?>/administrador/productos/lista">Lista de productos</a></li>
                            <li><a href="<?php echo base_url();?>/administrador/productos/nuevo">Nuevo producto</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>