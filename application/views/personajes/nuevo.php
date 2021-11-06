
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Nuevo personaje</a></li>
					</ol>
        		</nav>
        
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">CREACION DE PERONAJE</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
										<form method="POST" action="" enctype="multipart/form-data">
										<!--<form method="POST" action="<?= base_url("index.php/personajes/nuevo_guardar");?>">-->
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">Imagen</label>
														<img src="<?= base_url();?>" class="img-thumbnail" height="200" width="200" />
													</div>
												</div><!-- Col -->
												<div class="col-sm-3">
													<div class="form-group">
													<label class="control-label ">Selecciona imagen</label>
														<input type="file" name="imagen" class="form-control" >
													</div>
													<div class="form-group">
														<label class="control-label">Nombre</label>
														<input type="text" class="form-control" name="name" placeholder="Introducir Nombre">
													</div>
													
													<div class="form-group">
														<label class="control-label">Fecha Nacimiento</label>
														<input type="date" class="form-control" name="fecha_nacimiento" placeholder="Introducir Apellidos" >
													</div>										
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Profesión</label>
														<input type="text" class="form-control" name="profesion" placeholder="En que trabaja" >
													</div>
													<div class="form-group">	
														<label class="control-label">Apellidos</label>
														<input type="text" class="form-control" name="surname" placeholder="Introducir Apellidos" >
													</div>
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">	
																<label class="control-label">Sexo</label>
																<select class="form-control form-control-lg" name="sexo">
																	<option value="masculino" >Masculino</option>
																	<option value="femenino" >Femenino</option>
																	<option value="no-binario" >No-binario</option>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label class="control-label">Altura (cm)</label>
																<input type="number" class="form-control" name="altura" >
															</div>
														</div>
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											<div class="row">
												
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Pelo (color)</label>
														<input type="text" class="form-control" name="color" placeholder="Castañ@, Rubi@, etc.." >
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Pelo (corte)</label>
														<input type="text" class="form-control" name="corte" placeholder="Largo, corto, melena, etc.." >
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Color Ojos</label>
														<input type="text" class="form-control" name="ojos" placeholder="Marrones, azules, negros, etc.." >
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Orientación sexual</label>
														<input type="text" class="form-control" name="ori_sex" placeholder="Heterosexual, bisexual, etc.." >
													</div>
												</div><!-- Col -->
												
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Identidad de género</label>
														<input type="text" class="form-control" name="id_gen" placeholder="Identidad de género" >
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Complexion</label>
														<input type="text" class="form-control" name="complexion" placeholder="Delgado, Grueso, Fuerte, etc.." >
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Raza</label>
														<input type="text" class="form-control" name="raza" placeholder="Introducir Raza" >
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Religión</label>
														<input type="text" class="form-control" name="religion" placeholder="Introducir religión" >
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Tipo de alimentación</label>
														<input type="text" class="form-control" name="alimentacion" placeholder="Omnivoro, Carnivoro, Vegetariano, etc.." >
													</div>
												</div><!-- Col -->
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Objetivo en la vida</label>
														<textarea rows="7" class="form-control" name="objetivo" placeholder="¿Cúal es su objetivo en la vida?"></textarea>
													</div>
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Personalidad</label>
														<textarea rows="7" class="form-control" name="personalidad" placeholder="¿Cómo és?"></textarea>
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Idiomas</label>
														<textarea rows="7" class="form-control" name="idioma" placeholder="¿Qué idiomas habla y su nivel?"></textarea>
													</div>
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Historia</label>
														<textarea rows="7" class="form-control" name="historia" placeholder="¿Cúal es su historia?"></textarea>
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Notas</label>
														<textarea rows="5" class="form-control" name="notas" placeholder="¿Qúe hay que saber más del personaje?"></textarea>
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
						
        
        


	
