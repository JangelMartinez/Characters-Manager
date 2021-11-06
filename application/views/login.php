<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resources - Login</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?=CDN?>vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
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
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">

                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Resour<span>CES</span></a>
                    <h5 class="text-muted font-weight-normal mb-4">!Bienvenido de nuevo! Accede a tu cuenta.</h5>
                    <form class="forms-sample" method="POST" action="">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="login" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input">
                          Recuerdame
                        </label>
                      </div>

					  <?php
					  	if(@$_GET["act"]=="error"){
							  echo '<div class="alert alert-danger">Usuario y contraseña incorrectos</div>';
						}
					  ?>
                      <div class="mt-3">
						  <input type="hidden" name="formulario" value="OK">
						  <input type="submit" value="Entrar" class="btn btn-info">
                      </div>
                      <a href="<?= base_url("index.php/Usuario/registrar");?>" class="d-block mt-3 text-muted">¿No eres usuario? Registrate</a>
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

	<!-- core:js -->
	<script src="<?=CDN?>vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?=CDN?>vendors/feather-icons/feather.min.js"></script>
	<script src="<?=CDN?>js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>