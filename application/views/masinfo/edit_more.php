

<div class="page-content">

	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Misceláneo</a></li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h6 class="card-title">Crear misceláneo de personaje</h6>
					<div class="row">
						<div class="col-md-12 stretch-card">
							<div class="card">
								<div class="card-body">
									<form action="" method="post">
										<div class="row">
											<div class="col-sm-2">
												<div class="form-group">
													<label class="control-label">ID Información</label>
													<input class="form-control"  value="<?= $moreinfo['ID'];?>" disabled>
												</div>
											</div><!-- Col -->
											<div class="col-sm-5">
												<div class="form-group">
													<label class="control-label">Personaje</label>
													<select class="form-control form-control-lg" name="persona" disabled>
														<?php
															foreach ($listado as $value) {
																	
																if($value['ID'] == $id){
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
													<label class="control-label">Tipo </label>
													<select class="form-control form-control-lg" name="tipo">
														<option value="Objeto"  <?=($moreinfo["Tipo"]=="Objeto"?'selected':'');?>>Objeto</option>
														<option value="Habilidad"  <?=($moreinfo["Tipo"]=="Habilidad"?'selected':'');?>>Habilidad</option>
														<option value="Debilidad" <?=($moreinfo["Tipo"]=="Debilidad"?'selected':'');?>>Debilidad</option>
														<option value="Mascota" <?=($moreinfo["Tipo"]=="Mascota"?'selected':'');?>>Mascota</option>
														<option value="Afición" <?=($moreinfo["Tipo"]=="Afición"?'selected':'');?>>Afición</option>
													</select>
												</div>
											</div><!-- Col -->
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
												<label class="control-label">Descripción</label>
													<input type="text" class="form-control" name="descripcion" placeholder="Haz una pequeña descripción" value="<?=$moreinfo['Descripcion'] ?>">
												</div>
											</div><!-- Col -->
										</div>
										<div class="row">
											<div class="col-sm-3">
											<div class="form-group">
												<input type="hidden" name="id" value="<?= $moreinfo['ID'];?>">
												<input type="hidden" name="persona" value="<?= $moreinfo['ID_personaje'];?>">
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