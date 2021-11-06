
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Personajes Relacionados</a></li>
					</ol>
        		</nav>
        
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Editando relacionados</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
										<form method="POST" action="">
											<div class="row">
												
												<div class="col-sm-2">
													<div class="form-group">
														<label class="control-label">ID Relacionado</label>
														<input class="form-control"  value="<?= $relacionado['ID'];?>" disabled>
													</div>
												</div><!-- Col -->
												<div class="col-sm-5">
													<div class="form-group">
														<label class="control-label">Personaje principal</label>

														<select class="form-control form-control-lg" disabled>
													
															<?php
																
																foreach ($listado as $value) {
																	# code...
																	if($value['ID'] == $relacionado['ID_personaje_principal']){
																		echo '<option selected value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
																	}else{
																		echo '<option value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
																	}

																	
																}
	
															?>
														</select>
													</div>
												</div><!-- Col -->
												<div class="col-sm-5">
													<div class="form-group">
														<label class="control-label">Personaje secundario</label>
														<select class="form-control form-control-lg" name="secundario">
													
															<?php
																
																foreach ($listado as $value) {
																	# code...
																	if($value['ID'] == $relacionado['ID_personaje_secundario']){
																		echo '<option selected value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
																	}else{
																		echo '<option value="'.$value['ID'].'">'.$value['name'].' '.$value['surname'].'</option>';
																	}

																	
																}
	
															?>
														</select>
												
													</div>
												</div><!-- Col -->
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Tipo Relación</label>
														<input class="form-control" name="tipo_relacion" value="<?= $relacionado['tipo_relacion'];?>">
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											
											<div class="mt-3">
												<input type="hidden" name="id" value="<?= $relacionado['ID'];?>">
												<input type="hidden" name="primario" value="<?= $relacionado['ID_personaje_principal'];?>">
												<input type="hidden" name="formulario" value="OK">
						  						<input type="submit" value="Guardar" class="btn btn-info">
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
						
        
        


	
