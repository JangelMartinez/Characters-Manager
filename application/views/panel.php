<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resources - Personajes</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?=CDN?>vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?=CDN?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?=CDN?>vendors/jquery-steps/jquery.steps.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?=CDN?>fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?=CDN?>vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?=CDN?>css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?=CDN?>images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
      		<div class="sidebar-header">
        		<a href="#" class="sidebar-brand">
          			Resour<span>CES</span>
        		</a>
        		<div class="sidebar-toggler not-active">
          			<span></span>
          			<span></span>
          			<span></span>
        		</div>
      		</div>
      		<div class="sidebar-body">
				<ul class="nav">
					<li class="nav-item nav-category">Personajes</li>
						<li class="nav-item">
							<a href="<?=base_url('index.php/personajes/listar_all');?>" class="nav-link">
								<i class="link-icon" data-feather="users"></i>
								<span class="link-title">Listar Todos</span>
							</a>
						</li>	
						<li class="nav-item">
							<a href="<?=base_url('index.php/personajes/listar');?>" class="nav-link">
								<i class="link-icon" data-feather="user"></i>
								<span class="link-title">Listar Mios</span>
							</a>
						</li>   
								<li class="nav-item">
									<a href="<?=base_url('index.php/favoritos/listar');?>" class="nav-link">
										<i class="link-icon" data-feather="heart"></i>
										<span class="link-title">favoritos</span>
									</a>
								</li>  
						 
								<li class="nav-item">
									<a class="nav-link" href="<?=base_url('index.php/personajes/nuevo');?>">
										<i class="link-icon" data-feather="user-plus"></i>
										<span class="link-title">Nuevo</span>
									</a>
								</li>
						
								</li>	
								<li class="nav-item nav-category">Relaciones</li>
									<li class="nav-item">
									<a href="<?=base_url('index.php/relaciones');?>" class="nav-link">
										<i class="link-icon" data-feather="search"></i>
										<span class="link-title">Buscar</span>
									</a>
									</li>          
									<li class="nav-item">
										<a class="nav-link" href="<?=base_url('index.php/relaciones/add');?>">
											<i class="link-icon" data-feather="link"></i>
											<span class="link-title">Nueva</span>
										</a>
									</li>
								</li>
								<li class="nav-item nav-category">Misceláneo</li>
									<li class="nav-item">
									<a href="<?=base_url('index.php/moreinfo');?>" class="nav-link">
										<i class="link-icon" data-feather="search"></i>
										<span class="link-title">Buscar</span>
									</a>
									</li>          
									<li class="nav-item">
										<a class="nav-link" href="<?=base_url('index.php/moreinfo/add');?>">
											<i class="link-icon" data-feather="shield"></i>
											<span class="link-title">Nuevo</span>
										</a>
									</li>
									
								</li>
				</ul>
      		</div>
    	</nav>
    
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
					<?php 
							if(USER['status'] == true ){ ?>
								<li class="nav-item dropdown nav-profile">
									<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="https://via.placeholder.com/30x30" alt="profile">
									</a>
									<div class="dropdown-menu" aria-labelledby="profileDropdown">
										<div class="dropdown-header d-flex flex-column align-items-center">
											<div class="figure mb-3">
												<img src="https://via.placeholder.com/80x80" alt="">
											</div>
								<!--		<div class="info text-center">
												<p class="name font-weight-bold mb-0">José Ángel</p>
												<p class="email text-muted mb-3">jangel.martinezs@gmail.com</p>
											</div>	-->
										</div>
										<div class="dropdown-body">
											<ul class="profile-nav p-0 pt-3">
												<li class="nav-item">
													<a href="<?=base_url('index.php/Usuario/perfil');?>" class="nav-link">
														<i data-feather="user"></i>
														<span>Perfil</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="<?=base_url('index.php/Usuario/edit_perfil');?>" class="nav-link">
														<i data-feather="edit"></i>
														<span>Editar Perfil</span>
													</a>
												</li>
												<li class="nav-item">
													<a href="<?= base_url("index.php/Usuario/salir");?>" class="nav-link">
														<i data-feather="log-out"></i>
														<span>Salir</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
						<?php }else{ ?>
							<li class="nav-item">
								<form action="<?= base_url("index.php/Usuario/login");?>" method="post">
									<input type="hidden" name="formulario" value="NO">
									<input class="btn btn-primary" type="submit" value="Log in">
								</form>
							</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<?=@$contenido?>
			<?=@$contenido2?>

			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2021 <a href="https://jangelmartinez.es" target="_blank">JangelMartinez</a>. All rights reserved</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="<?=CDN?>vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?=CDN?>vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?=CDN?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?=CDN?>vendors/feather-icons/feather.min.js"></script>
	<script src="<?=CDN?>js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="<?=CDN?>js/data-table.js"></script>
	<!-- end custom js for this page -->
	<!-- plugin js for this page -->
<script src="<?=CDN?>vendors/jquery-steps/jquery.steps.min.js"></script>
	<!-- end plugin js for this page -->

  <!-- custom js for this page -->
  <script src="<?=CDN?>js/wizard.js"></script>
	<!-- end custom js for this page -->
</body>
</html>