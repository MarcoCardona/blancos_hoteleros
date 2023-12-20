<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin/sistema/head', $page['head']); ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php $this->load->view('admin/sistema/menu'); ?>

            <!-- top navigation -->
            <?php $this->load->view('admin/sistema/header', $page['header']); ?>

            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><?php echo $page['head']['titulo']; ?></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="redes" class="table table-striped table-hover table-sm">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th class="text-center" scope="col">No.</th>
                                                            <th scope="col">Red Social</th>
                                                            <th scope="col">Url</th>
                                                            <th scope="col">Icono</th>
                                                            <th scope="col">Status</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="lista_redes">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Desarrollado por - Marco A. Cardona
                    <a href="https://colorlib.com">CreandoPixeles</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <?php $this->load->view('admin/sistema/footer', $page['footer']); ?>

</body>

</html>