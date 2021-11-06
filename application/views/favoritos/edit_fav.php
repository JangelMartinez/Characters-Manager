
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Personajes Favoritos</a></li>
					</ol>
        		</nav>
        
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">NUEVO FAVORITO</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
										<form method="POST" action="">
											<div class="row">
												
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">ID Personaje</label>
														<input class="form-control" name="id_personaje" value="<?= $listado['ID_personaje'];?>">
													</div>
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Nombre</label>
														<input class="form-control" name="name" value="<?= $personaje['name'];?>">
													</div>
												</div><!-- Col -->
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Notas</label>
														<textarea rows="4" class="form-control" name="notas"><?= $listado['Notas'];?></textarea>
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											
											<div class="mt-3">
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
						
        
        


	
