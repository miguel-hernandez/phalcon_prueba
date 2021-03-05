<?php echo $this->partial('layouts/head'); ?>

	<main>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-3">

					<div class="card">
						<h5 class="card-header">Buscador de precios de gasolina</h5>
						<div class="card-body">
							<form id="form_buscador">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="slc_estado">Estado *</label>
											<select id="slc_estado" name="slc_estado" class="form-control">
												<option value="">Seleccione</option>
												<?php foreach ($arrayEstados as $itemEstado) { ?>
												<option value="<?php echo $itemEstado->estado; ?>"><?php echo $itemEstado->estado; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div><!-- .row -->
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="slc_municipio">Municipio *</label>
											<select id="slc_municipio" name="slc_municipio" class="form-control">
												<option value="">Seleccione</option>
											</select>
										</div>
									</div>
								</div><!-- .row -->
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="slc_ordenamiento">Ordenamiento *</label>
											<select id="slc_ordenamiento" name="slc_ordenamiento" class="form-control">
												<option value="asc_regular">De menor a mayor precio Regular</option>
												<option value="asc_premium">De menor a mayor precio Premium</option>
												<option value="asc_diesel">De menor a mayor precio Dieasel</option>
											</select>
										</div>
									</div>
								</div><!-- .row -->

								<div class="row">
									<div class="col-12 col-md-6">
										<small class="text-info">Los campos marcados con * son obligatorios</small>
									</div>
									<div class="col-12 col-md-6">
										<button id="btn_buscar" type="button" class="btn btn-primary btn-block">Buscar</button>
									</div>
								</div><!-- .row -->


							</form>
						</div>
					</div>
				</div><!-- .col -->

				<div class="col-12 col-md-9">
					<div class="row">
						<div class="col-12">
							<div id="map"></div>
						</div>
					</div><!-- .row -->

					<div class="row">
						<div class="col-12">
							<label id="resultados_conteo" class="text-info font-weight-bold text-uppercase mb-0"></label>
							<div id="tabla_resultados" class="table-responsive">
								<table class="table table-bordered table-sm table-striped ">
									<thead>
										<tr class="text-center bg-secondary text-white">
											<th rowspan="2">Razón social</th>
											<th colspan="3">Precio</th>
											<th rowspan="2">Dirección (calle y colonia)</th>
										</tr>
										<tr class="text-center bg-secondary text-white">
											<th>Regular</th>
											<th>Premium</th>
											<th>Dieasel</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div><!-- .row -->

				</div><!-- .col -->
			</div><!-- row -->

		</div><!-- .container-fluid -->
	</main>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmBPvmZcfeVQ5MBbTJEYxhmRBZ0BIS4no" async defer></script>
	<?php echo $this->tag->javascriptInclude('js/app/principal.js'); ?>

<?php echo $this->partial('layouts/footer'); ?>
