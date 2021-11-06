<link rel="stylesheet" href="style.css">
<?php			

function getTemplate($listado,$relacionados,$moreinfo){
	
	/*$plantilla = '
				<!DOCTYPE html>
				<html lang="en">
				<head>
					<meta charset="UTF-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Document</title>
					<link href="bootstrap.css" rel="stylesheet" >
				</head>
				<body>
				
				
        		<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">FICHA PERSONAJE</h4>
								<div class="row">
							<div class="col-md-12 stretch-card">
								<div class="card">
									<div class="card-body">
											<div class="row">
												<div class="col-sm-1">
													<h6>Imagen</h6>
													<img src="'. base_url("CDN/Images/uploads/").$listado["photo"].'" class="img-thumbnail" height="200" width="200" />
												</div>
												<div class="col-sm-1">
													<div>
														<h6>Nombre :</h6>
														'.$listado["name"].' '.$listado['surname'].'
													</div>	
													<br>
													<div>
														<h6>Fecha Nacimiento :</h6> ';
														
															if(empty($listado['fecha_nacimiento'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["fecha_nacimiento"];
															}
															
										$plantilla .=	'</div>
													<br>
													<div>
														<h6>Profesión :</h6>';
														
															if(empty($listado['profesion'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["profesion"];
															}
															
										$plantilla .=		'</div>
													<br>
													<div>
														<h6>Raza :</h6>';
														
															if(empty($listado['raza'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["raza"];
															}
															
														
										$plantilla .= '	</div>
													<br>
													<div>
														<h6>Religión :</h6>';
														
															if(empty($listado['religion'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["religion"];
															}
															
														
										$plantilla .= '	</div>
													<br>
													
																						
												</div>
												<div class="col-sm-3">
													
													<div>
														<h6>Altura :</h6>';
														
															if(empty($listado['altura'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["altura"];
															}
															
										$plantilla .='			</div>	
													<br>
													<div>
														<h6>Complexión :</h6>';
														
															if(empty($listado['complexion'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["complexion"];
															}
															
										$plantilla .='	</div>
													<br>
													<div>
														<h6>Pelo (color) :</h6>';
														
															if(empty($listado['color_pelo'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["color_pelo"];
															}
															
										$plantilla .='	</div>
													<br>
													<div>
														<h6>Pelo (corte) :</h6>';
														
															if(empty($listado['corte_pelo'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["corte_pelo"];
															}
															
										$plantilla .='	</div>
													<br>
													<div>
														<h6>Ojos (color) :</h6>';
														
															if(empty($listado['color_ojos'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["color_ojos"];
															}
															
										$plantilla .='	</div>
													<br>
													
												</div><!-- Col -->
												<div class="col-sm-3">
													
													<div>
														<h6>Sexo :</h6>';
														
															if(empty($listado['sexo'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["sexo"];
															}
															
									$plantilla .='</div>	
													<br>
													<div>
														<h6>Orientación Sexual :</h6>';
														
															if(empty($listado['ori_sexual'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["ori_sexual"];
															}
															
									$plantilla .='</div>
													<br>
													<div>
														<h6>Identidad de género :</h6>';
														
															if(empty($listado['identidad_genero'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["identidad_genero"];
															}
															
									$plantilla .='</div>
													<br>
													<div>
														<h6>Tipo alimentación :</h6>';
														
															if(empty($listado['tipo_alimentacion'])){
																$plantilla .= '-';
															}else{
																$plantilla .= $listado["tipo_alimentacion"];
															}
										
									$plantilla .='</div>
													<br>
												</div>
												
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-12">
													<h6>Historia :</h6>';
												
													
															if(empty($listado['Historia'])){
																$plantilla .= '-';
															}else{
																$plantilla .= '<p>'.$listado["Historia"].'</p>';
															}
														
									$plantilla .='</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Personalidad :</h6>';
														
															if(empty($listado['personalidad'])){
																$plantilla .= '-';
															}else{
																$plantilla .= '<p>'.$listado["personalidad"].'</p>';
															}
														
									$plantilla .='</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Objetivo en la vida :</h6>';
														
															if(empty($listado['objetivo'])){
																$plantilla .= '-';
															}else{
																$plantilla .= '<p>'.$listado["objetivo"].'</p>';
															}
															
										$plantilla .='</div>
													<br>
												</div>
												
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Idiomas :</h6>';
														
															if(empty($listado['idiomas'])){
																$plantilla .= '-';
															}else{
																$plantilla .= '<p>'.$listado["idiomas"].'</p>';
															}
															
										$plantilla .='</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Notas :</h6>';
														
															if(empty($listado['Notas'])){
																$plantilla .= '-';
															}else{
																$plantilla .= '<p>'.$listado["Notas"].'</p>';
															}
															
									$plantilla .='</div>
													<br>
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-sm-6">
													<div>
														<h6>Relaciones :</h6>';
														
															foreach ($relacionados as $value) {
																$plantilla .= '<div class="row">
																	<div class="col-sm-12">'
																		.$value['name'].
																	' -       ('
																		.$value['tipo_relacion'].
																	')</div>
																</div>';
															}
														
											$plantilla .='</div>
												</div>
												<div class="col-sm-6">
													<div>
														<h6>Más información :</h6>';
												
															foreach ($moreinfo as $value) {
																$plantilla .= '<div class="row">
																	<div class="col-sm-12">'
																		.$value['Tipo'].
																	' -       ('
																		.$value['Descripcion'].
																	')</div>
																</div>';
															}
														
										$plantilla .='</div>
													<br>
												</div>
											</div>
											<hr>
										
										
											
										
									</div>
								</div>
							</div>
						</div>
  
							</div>
						</div>  
					</div>
                </div>
			
	</body>	
	</html>';	*/
	
	$plantilla = '
	
	';
	
	return $plantilla;
        
}


	
