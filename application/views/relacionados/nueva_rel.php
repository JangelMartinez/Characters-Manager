

<div class="page-content">

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Relaciones</a></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			  <div class="card-body">
				<h6 class="card-title">Crear relación entre personajes</h6>
				<div class="row">
					<div class="col-md-12 stretch-card">
						<div class="card">
							<div class="card-body">
								<form action="" method="post">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Personaje 1</label>
												<select class="form-control form-control-lg" name="primario">
													<?php
														foreach ($listado as $value) {
																
															if($value['ID'] == $id){
																echo '<option selected>'.$value['name'].' '.$value['surname'].'</option>';
															}else{
																echo '<option value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
															}

																	
														}
														?>
												</select>
											</div>
										</div><!-- Col -->
										<div class="col-sm-4">
											<div class="form-group">
												<label class="control-label">Personaje 2</label>
												<select class="form-control form-control-lg" name="secundario">
													<?php
														foreach ($listado as $value) {
																
															if($value['ID'] == $id){
																echo '<option selected>'.$value['name'].' '.$value['surname'].'</option>';
															}else{
																echo '<option value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
															}

																	
														}
													?>
												</select>
											</div>
										</div><!-- Col -->
										<div class="col-sm-4">
											<div class="form-group">
											<label class="control-label">Tipo de relación</label>
												<input type="text" class="form-control" name="tipo_relacion" id="" placeholder="marido, mujer, hijo@, amig@, etc..">
											</div>
										</div><!-- Col -->
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<input type="hidden" name="formulario" value="OK">
						  						<input type="submit" value="Guardar" class="btn btn-info">
											</div>
										</div><!-- Col -->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>