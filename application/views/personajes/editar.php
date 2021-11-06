
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Editando Personaje</a></li>
					</ol>
        		</nav>
        
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">ACTUALIZANDO PERSONAJE</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
										<form method="POST" action="" enctype="multipart/form-data">
											<div class="row">
												<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label">Imagen</label>
														<img src="<?= base_url("CDN/Images/uploads/").$listado["photo"];?>" class="img-thumbnail" height="200" width="200" />
													</div>
												</div><!-- Col -->
												<div class="col-sm-3">
													<div class="form-group">
													<label class="control-label ">Selecciona imagen</label>
														<input type="hidden" name="imagen_defecto" value="<?=$listado["photo"];?>">
														<input type="file" name="imagen" class="form-control" >
													</div>
													<div class="form-group">
														<label class="control-label">Nombre</label>
														<input type="text" class="form-control" name="name" placeholder="Introducir Nombre" value="<?=$listado["name"];?>">
													</div>
													
													<div class="form-group">
														<label class="control-label">Fecha Nacimiento</label>
														<input type="date" class="form-control" name="fecha_nacimiento" placeholder="Introducir Apellidos" value="<?=$listado["fecha_nacimiento"];?>">
													</div>										
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Profesión</label>
														<input type="text" class="form-control" name="profesion" placeholder="En que trabaja" value="<?=$listado["profesion"];?>">
													</div>
													<div class="form-group">	
														<label class="control-label">Apellidos</label>
														<input type="text" class="form-control" name="surname" placeholder="Introducir Apellidos" value="<?=$listado["surname"];?>">
													</div>
													<div class="row">
														<div class="col-sm-6">
															<div class="form-group">	
																<label class="control-label">Sexo</label>
																<select class="form-control form-control-lg" name="sexo">
																	<option value="masculino" <?=($listado["sexo"]=="masculino"?'selected':'');?>>Masculino</option>
																	<option value="femenino" <?=($listado["sexo"]=="femenino"?'selected':'');?>>Femenino</option>
																	<option value="no-binario" <?=($listado["sexo"]=="no-binario"?'selected':'');?>>No-binario</option>
																</select>
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-group">
																<label class="control-label">Altura (cm)</label>
																<input type="number" class="form-control" name="altura" value="<?=$listado["altura"];?>">
															</div>
														</div>
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											<div class="row">
												
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Pelo (color)</label>
														<input type="text" class="form-control" name="color" placeholder="Castañ@, Rubi@, etc.." value="<?=$listado["color_pelo"];?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Pelo (corte)</label>
														<input type="text" class="form-control" name="corte" placeholder="Largo, corto, melena, etc.." value="<?=$listado["corte_pelo"];?>">
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Color Ojos</label>
														<input type="text" class="form-control" name="ojos" placeholder="Marrones, azules, negros, etc.." value="<?=$listado["color_ojos"];?>">
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Orientación sexual</label>
														<input type="text" class="form-control" name="ori_sex" placeholder="Heterosexual, bisexual, etc.." value="<?=$listado["ori_sexual"];?>">
													</div>
												</div><!-- Col -->
												
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Identidad de género</label>
														<input type="text" class="form-control" name="id_gen" placeholder="Identidad de género" value="<?=$listado["identidad_genero"];?>">
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Complexion</label>
														<input type="text" class="form-control" name="complexion" placeholder="Delgado, Grueso, Fuerte, etc.." value="<?=$listado["complexion"];?>">
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Raza</label>
														<input type="text" class="form-control" name="raza" placeholder="Introducir Raza" value="<?=$listado["raza"];?>">
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Religión</label>
														<input type="text" class="form-control" name="religion" placeholder="Introducir religión" value="<?=$listado["religion"];?>">
													</div>
												</div><!-- Col -->
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Tipo de alimentación</label>
														<input type="text" class="form-control" name="alimentacion" placeholder="Omnivoro, Carnivoro, Vegetariano, etc.." value="<?=$listado["tipo_alimentacion"];?>">
													</div>
												</div><!-- Col -->
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Objetivo en la vida</label>
														<textarea rows="7" class="form-control" name="objetivo" placeholder="¿Cúal es su objetivo en la vida?"><?=$listado["objetivo"];?></textarea>
													</div>
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Personalidad</label>
														<textarea rows="7" class="form-control" name="personalidad" placeholder="¿Cómo és?"><?=$listado["personalidad"];?></textarea>
													</div>
												</div><!-- Col -->
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Idiomas</label>
														<textarea rows="7" class="form-control" name="idioma" placeholder="¿Qué idiomas habla y su nivel?"><?=$listado["idiomas"];?></textarea>
													</div>
												</div><!-- Col -->
												<div class="col-sm-6">
													<div class="form-group">
														<label class="control-label">Historia</label>
														<textarea rows="7" class="form-control" name="historia" placeholder="¿Cúal es su historia?"><?=$listado["Historia"];?></textarea>
													</div>
												</div><!-- Col -->
												
											</div><!-- Row -->
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label class="control-label">Notas</label>
														<textarea rows="5" class="form-control" name="notas" placeholder="¿Qúe hay que saber más del personaje?"><?=$listado["Notas"];?></textarea>
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
						
        
        


	
