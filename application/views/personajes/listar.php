
			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Personajes</a></li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            			<div class="card">
              				<div class="card-body">
                				<h6 class="card-title">Personajes creados</h6>
								<?php
									if (@$borrado != null){
										echo '<div class="alert alert-danger" role="alert">
												<strong>'.$borrado.'</strong>
											</div>';
									}
								?>
                				<div class="table-responsive">
									<table id="dataTableExample" class="table">
										<thead>
										<tr>
											<th>ID</th>
											<th>Nombre</th>
											<th>Apellidos</th>
											<th>Profesión</th>
											<th>Opciones</th>
										</tr>
										</thead>
										<tbody>

											<?php 

											foreach ($listado as $value) {

												$listable = (int) $value["listable"];

												if($listable == 0 && $value["ID_user"]!=@USER["data"]["ID"]){
													continue;
												}

												echo '
												<tr>
												<td>'.$value["ID"].'</td>
												<td>'.$value["name"].'</td>
												<td>'.$value["surname"].'</td>
												<td>'.$value["profesion"].'</td>
												<td>
													<a class="'.($value["ID_user"]!=@USER["data"]["ID"]?'invisible':'asd').'" href="'.base_url("index.php/Personajes/editar/").$value["ID"].'">
														<i class="link-icon" data-feather="edit"></i>
													</a>
									
													<a href="'.base_url("index.php/Personajes/ver/").$value["ID"].'">
														<i class="link-icon" data-feather="eye"></i>
													</a>
									
													<a href="'.base_url("index.php/Favoritos/add/").$value["ID"].'">
														<i class="link-icon" data-feather="heart"></i>
													</a>

													<a class="'.($value["ID_user"]!=@USER["data"]["ID"]?'invisible':'asd').'" href="'.base_url("index.php/Personajes/borrar/").$value["ID"].'">
														<i class="link-icon" data-feather="trash"></i>
													</a>
												</td>
												</tr>';
												
											}
											
											?>
								
										</tbody>
									</table>
                				</div>
              				</div>
            			</div>
					</div>
				</div>

			</div>

