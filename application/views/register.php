<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resources - Registro</title>
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
                    <h5 class="text-muted font-weight-normal mb-4">Crear un nuevo usuario.</h5>
                    <form class="forms-sample" action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="current-password" placeholder="Password">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
						  <input type="hidden" name="formulario" value="OK">
						  <input type="submit" value="Registrarse" class="btn btn-danger">
                      </div>
                      <a href="http://localhost/formacion/3.bbdd/resources/" class="d-block mt-3 text-muted">¿Eres usuario?.Accede.</a>
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