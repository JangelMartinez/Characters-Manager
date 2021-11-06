

	<div class="page-content">

        <div class="profile-page tx-13">
          <div class="row">
            <div class="col-12 grid-margin">
							<div class="profile-header">
								<div class="cover">
									<div class="gray-shade"></div>
									<figure>
										<img src="<?= CDN?>/images/avatar.png" class="img-fluid" alt="profile cover">
									</figure>
									<div class="cover-body d-flex justify-content-between align-items-center">
										<div>
											<img class="profile-pic" src="<?= CDN?>/images/imagen.png" alt="profile">
											<span class="profile-name"><?= $usuario['Nombre']; ?></span>
										</div>
										<div class="d-none d-md-block">
											<a class="btn btn-primary btn-icon-text btn-edit-profile" href="<?=base_url('index.php/Usuario/edit_perfil');?>">
												<i data-feather="edit" class="btn-icon-prepend"></i> Editar perfil
											</a>
										</div>
									</div>
								</div>
								<div class="header-links">
									<ul class="links d-flex align-items-center mt-3 mt-md-0">
										
										<li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
											<i class="mr-1 icon-md" data-feather="users"></i>
											<a class="pt-1px d-none d-md-block" href="<?=base_url('index.php/Personajes/listar');?>">Personajes <span class="text-muted tx-12"><?=$num_per?></span></a>
										</li>
										
									</ul>
								</div>
            	</div>
            </div>
					</div>
					<div class="row profile-body">
						
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">E-mail</label>
									<input type="email" class="form-control" disabled value="<?= $usuario['email']?>">
								</div>
							</div><!-- Col -->
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label">Password</label>
									<input type="password" class="form-control" disabled value="<?= $usuario['password']?>">
							</div>
					</div><!-- Col -->
					
					</div>
        </div>

			</div>
