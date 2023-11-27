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
														<input type="text" class="form-control form-control-sm" id="categoria" placeholder="Agregar tamaño del producto">
													</div>
													<div class="col">
														<i class="fa-solid fa-circle-plus fa-2x" id="agregar_tamano"></i>
													</div>
													<div class="form-group col-md-12 mt-3" id="lista_tamanos">
													</div>
												</div>





												<div class="form-group">
													<label for="exampleFormControlTextarea1">Descripcion del producto</label>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
												</div>
												<button type="submit" class="btn btn-primary">Agregar producto</button>
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