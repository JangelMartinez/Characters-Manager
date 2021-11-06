

<div class="page-content">

<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Relaciones</a></li>
	</ol>
</nav>


						<div class="card">
							<div class="card-body">
								<h6 class="card-title">Personajes relacionados</h6>
								<form action="" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<select class="form-control form-control-lg" name="personaje">
													
													<?php
														
														foreach ($listado as $value) {
															# code...
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
										<div class="col-sm-3">
											<div class="form-group">
												<input type="hidden" name="formulario" value="OK">
						  						<input type="submit" value="Buscar" class="btn btn-info">
											</div>
										</div><!-- Col -->
									</div>
								</form>

							</div>
						</div>

</div>