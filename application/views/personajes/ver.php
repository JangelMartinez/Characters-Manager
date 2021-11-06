
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Ficha personaje</a></li>
					</ol>
        		</nav>
        
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">FICHA PERSONAJE</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
										<form method="POST" action="../pdf/<?= $listado['ID'] ?>">
											<div class="row">
												<div class="col-sm-3">
													<h6>Imagen</h6>
													<img src="<?= base_url("CDN/Images/uploads/").$listado["photo"];?>" class="img-thumbnail" height="200" width="200" />
												</div><!-- Col -->
												<div class="col-sm-3">
													<div>
														<h6>Nombre :</h6>
														<?= $listado["name"].' '.$listado['surname'];?>	
													</div>	
													<br>
													<div>
														<h6>Fecha Nacimiento :</h6>
														<?php
															if(empty($listado['fecha_nacimiento'])){
																echo '-';
															}else{
																echo $listado["fecha_nacimiento"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Profesión :</h6>
														<?php
															if(empty($listado['profesion'])){
																echo '-';
															}else{
																echo $listado["profesion"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Raza :</h6>
														<?php
															if(empty($listado['raza'])){
																echo '-';
															}else{
																echo $listado["raza"];
															}
														?>	
														
													</div>
													<br>
													<div>
														<h6>Religión :</h6>
														<?php
															if(empty($listado['religion'])){
																echo '-';
															}else{
																echo $listado["religion"];
															}
														?>	
														
													</div>
													<br>
													
																						
												</div><!-- Col -->
												<div class="col-sm-3">
													
													<div>
														<h6>Altura :</h6>
														<?php
															if(empty($listado['altura'])){
																echo '-';
															}else{
																echo $listado["altura"];
															}
														?>	
													</div>	
													<br>
													<div>
														<h6>Complexión :</h6>
														<?php
															if(empty($listado['complexion'])){
																echo '-';
															}else{
																echo $listado["complexion"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Pelo (color) :</h6>
														<?php
															if(empty($listado['color_pelo'])){
																echo '-';
															}else{
																echo $listado["color_pelo"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Pelo (corte) :</h6>
														<?php
															if(empty($listado['corte_pelo'])){
																echo '-';
															}else{
																echo $listado["corte_pelo"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Ojos (color) :</h6>
														<?php
															if(empty($listado['color_ojos'])){
																echo '-';
															}else{
																echo $listado["color_ojos"];
															}
														?>	
													</div>
													<br>
													
												</div><!-- Col -->
												<div class="col-sm-3">
													
													<div>
														<h6>Sexo :</h6>
														<?php
															if(empty($listado['sexo'])){
																echo '-';
															}else{
																echo $listado["sexo"];
															}
														?>	
													</div>	
													<br>
													<div>
														<h6>Orientación Sexual :</h6>
														<?php
															if(empty($listado['ori_sexual'])){
																echo '-';
															}else{
																echo $listado["ori_sexual"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Identidad de género :</h6>
														<?php
															if(empty($listado['identidad_genero'])){
																echo '-';
															}else{
																echo $listado["identidad_genero"];
															}
														?>	
													</div>
													<br>
													<div>
														<h6>Tipo alimentación :</h6>
														<?php
															if(empty($listado['tipo_alimentacion'])){
																echo '-';
															}else{
																echo $listado["tipo_alimentacion"];
															}
														?>	
													</div>
													<br>
												</div><!-- Col -->
												
											</div><!-- Row -->
											<hr>
											<div class="row">
												<div class="col-sm-12">
													<h6>Historia :</h6>
												
													<?php
															if(empty($listado['Historia'])){
																echo '-';
															}else{
																echo '<p>'.$listado["Historia"].'</p>';
															}
													?>	
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Personalidad :</h6>
														<?php
															if(empty($listado['personalidad'])){
																echo '-';
															}else{
																echo '<p>'.$listado["personalidad"].'</p>';
															}
														?>	
													</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Objetivo en la vida :</h6>
														<?php
															if(empty($listado['objetivo'])){
																echo '-';
															}else{
																echo '<p>'.$listado["objetivo"].'</p>';
															}
														?>	
													</div>
													<br>
												</div>
												
											</div><!-- Row -->
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Idiomas :</h6>
														<?php
															if(empty($listado['idiomas'])){
																echo '-';
															}else{
																echo '<p>'.$listado["idiomas"].'</p>';
															}
														?>	
													</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Notas :</h6>
														<?php
															if(empty($listado['Notas'])){
																echo '-';
															}else{
																echo '<p>'.$listado["Notas"].'</p>';
															}
														?>	
													</div>
													<br>
												</div>
											</div><!-- Row -->
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Relaciones :</h6>
														<?php
															foreach ($relacionados as $value) {
																echo '<div class="row">
																	<div class="col-sm-12">'
																		.$value['name'].
																	' -       ('
																		.$value['tipo_relacion'].
																	')</div>
																</div>';
															}
														?>	
													</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Más información :</h6>
														<?php
															foreach ($moreinfo as $value) {
																echo '<div class="row">
																	<div class="col-sm-12">'
																		.$value['Tipo'].
																	' -       ('
																		.$value['Descripcion'].
																	')</div>
																</div>';
															}
														?>	
													</div>
													<br>
												</div>
											</div><!-- Row -->
											<hr>
										
										
											<div class="mt-3">
												<input type="hidden" name="formulario" value="OK">
						  						<input type="submit" value="Descargar PDF" class="btn btn-info">
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
						
        
        


	
