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
											<div class="alert alert-success pb-0" role="alert">
												<h4 class="alert-heading"><i class="fa-solid fa-circle-check"></i> Categoria creada correctamente</h4>
											</div>

											<div class="col-md-12 pt-4 pb-5">
												<div class="row">
													<div class="col">
														<input type="text" class="form-control form-control-sm" id="categoria" placeholder="Ingrese el nombre de la categoria">
													</div>
													<div class="col">
														<select class="form-control form-control-sm" id="favorito">
															<option value="x">Seleccione favorito</option>
															<option value="1">Si</option>
															<option value="0">No</option>
														</select>
													</div>
													<div class="col">
														<button class="btn btn-info btn-sm" id="agregar_categoria"><i class="fa-solid fa-circle-plus"></i> Agregar</button>
														<button class="btn btn-info btn-sm" id="editar_categoria" data-id="" style="display: none;"><i class="fa-solid fa-pen-to-square"></i> Editar</button>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<table id="categorias" class="table table-striped table-hover table-sm">
													<thead class="thead-dark">
														<tr>
															<th class="text-center" scope="col">No.</th>
															<th scope="col">Categoria</th>
															<th scope="col">Favorito</th>
															<th scope="col">Status</th>
															<th></th>
														</tr>
													</thead>
													<tbody id="lista_categorias">
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