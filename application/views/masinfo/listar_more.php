
<div class="page-content">
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            			<div class="card">
              				<div class="card-body">
                				<h6 class="card-title">Mas información del personaje <span style="border: 1px solid black; padding: 8px; margin-left: 15px;"><?=$listado['name'].' '.$listado['surname'];?></span></h6>

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
											<th>Tipo</th>
											<th>Descripción</th>
											<th>Opciones</th>
										</tr>
										</thead>
										<tbody>

											<?php 
											
											foreach ($moreinfo as $value) {
												echo "<tr>";

												echo "<td>".$value['ID']."</td>";
												echo "<td>".$value['Tipo']."</td>";
												echo "<td>".$value['Descripcion']."</td>";
																
											?>

											
											<td>
												<a  href="<?= base_url("index.php/moreinfo/editar/").$value["ID"];?>">
													<i class="link-icon" data-feather="edit"></i>
												</a>

												<a  href="<?= base_url("index.php/moreinfo/borrar/").$value["ID"];?>">
													<i class="link-icon" data-feather="trash"></i>
												</a>
											</td>
											<?php
												echo "</tr>";
												
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
