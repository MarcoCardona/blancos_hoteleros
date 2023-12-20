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
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputEmail4">Producto</label>
														<input type="email" class="form-control form-control-sm" id="producto" placeholder="Nombre del producto">
													</div>
													<div class="form-group col-md-6">
														<label for="inputEmail4">Número de modelo</label>
														<input type="email" class="form-control form-control-sm" id="modelo" placeholder="716HK2UB-1100">
													</div>
													<div class="form-group col-md-12">
														<label for="inputState">Categoria</label>
														<select id="categorias" class="form-control form-control-sm">
															<option value="0">Categorias</option>
															<?php foreach ($categorias as $c) { ?>
																<option value=<?php echo $c->id; ?>><?php echo $c->categoria; ?></option>
															<?php } ?>
														</select>
													</div>

													<div class="form-group col-md-12" id="lista_categorias">
													</div>
												</div>




												<div class="form-row">
													<div class="col-md-12">
														<label for="inputState">Tamaño</label>
													</div>
													<div class="col">
														<input type="text" class="form-control form-control-sm" id="tamano" placeholder="Agregar tamaño del producto (50cm x 70cm)">
													</div>
													<div class="col-auto">
														<div class="form-check mb-2">
															<input class="form-check-input" type="checkbox" id="check_tamano">
															<label class="form-check-label" for="autoSizingCheck">
																Mostrar
															</label>
														</div>
													</div>
													<div class="col">
														<i class="fa-solid fa-circle-plus fa-2x" id="agregar_tamano"></i>
													</div>

													<div class="form-group col-md-12 mt-3 pl-4" id="group-list-tamanos">
														<ul id="lista_tamanos">
														</ul>
													</div>
												</div>

												<div class="form-row">
													<div class="col-md-12">
														<label for="inputState">Características</label>
													</div>
													<div class="col">
														<input type="text" class="form-control form-control-sm" id="caracteristica" placeholder="Caracteristica">
													</div>
													<div class="col-auto">
														<div class="form-check mb-2">
															<input class="form-check-input" type="checkbox" id="check_caracteristica">
															<label class="form-check-label" for="autoSizingCheck">
																Mostrar
															</label>
														</div>
													</div>
													<div class="col">
														<i class="fa-solid fa-circle-plus fa-2x" id="agregar_caracteristicas"></i>
													</div>
													<div class="form-group col-md-12 mt-3 pl-4" id="group-list-carateristicas">
														<ul id="lista_caracteristicas">
														</ul>
													</div>
												</div>

												<div class="form-row">
													<div class="col-md-12">
														<label for="inputState">Colores</label>
													</div>
													<div class="col">
														<input type="text" class="form-control form-control-sm" id="color" placeholder="Color">
													</div>

													<div class="col-auto">
														<div class="form-check mb-2">
															<input class="form-check-input" type="checkbox" id="check_colores">
															<label class="form-check-label" for="autoSizingCheck">
																Mostrar
															</label>
														</div>
													</div>
													<div class="col">
														<i class="fa-solid fa-circle-plus fa-2x" id="agregar_color"></i>
													</div>
													<div class="form-group col-md-12 mt-3 pl-4" id="group-list-colores">
														<ul id="lista_colores">
														</ul>
													</div>
												</div>


												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="inputEmail4">Imagenes</label>
														<input type="file" class="form-control form-control-sm" id="imagen" placeholder="Nombre del producto">
													</div>
													<div class="form-group col-md-12 mt-3 pl-3" >
														<div class="row" id="imageList">
															
														</div>
													</div>
												</div>

												<div class="form-group">
													<label for="exampleFormControlTextarea1">Descripcion del producto</label>
													<textarea class="form-control" id="descripcion" rows="3"></textarea>
												</div>
												<button class="btn btn-info btn-sm" id="agregar_producto">Agregar producto</button>
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