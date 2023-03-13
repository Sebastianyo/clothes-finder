<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>index</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/icons/font/bootstrap-icons.css">
</head>

<body>

	<!-- navbar barra buscadora login y demas -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CLOTHES FINDER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MUJER
            </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PRENDAS DE CUERO</a></li>
                            <li><a class="dropdown-item" href="#">CHAQUETAS</a></li>
                            <li><a class="dropdown-item" href="#">BUZOS</a></li>
                            <li><a class="dropdown-item" href="#">CAMISAS</a></li>
                            <li><a class="dropdown-item" href="#">JEANS Y PANTALONES</a></li>
                            <li><a class="dropdown-item" href="#">FALDAS Y VESTIDOS</a></li>
                            <li><a class="dropdown-item" href="#">CAMISETAS</a></li>
                            <li><a class="dropdown-item" href="#">BUFANDAS</a></li>
                            <li><a class="dropdown-item" href="#">SHORTS</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">VER TODO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HOMBRE
          </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PRENDAS DE CUERO</a></li>
                            <li><a class="dropdown-item" href="#">CAMISETAS Y POLOS</a></li>
                            <li><a class="dropdown-item" href="#">CHAQUETAS</a></li>
                            <li><a class="dropdown-item" href="#">CAMISAS</a></li>
                            <li><a class="dropdown-item" href="#">JEANS Y PANTALONES</a></li>
                            <li><a class="dropdown-item" href="#">BERMUDAS</a></li>
                            <li><a class="dropdown-item" href="#">BUZOS</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">VER TODO</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">INICIAR SESION</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="register.html">REGISTRAR</a>
                    </li>

                    <li class="nav-item">
                        <div class="container">
                            <a class="nav-link active" aria-current="page" href="index.html"> <i class="bi bi-cart"> CARRITO </i> </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                            <i class="bi bi-person"></i>Mi Usuario
                        </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="perfil.html"> Mi Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
        </div>

    </nav>

    <!-- FIN DEL NAVEGADOR -->

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <br><br>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Acceso</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Dirección de correo electrónico</label>
									<input id="email" type="email" class="form-control" name="email_l" value="" required autofocus>
									<div class="invalid-feedback">
										el correo electrónico es invalido
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Clave</label>
										<a href="forgot.html" class="float-end">
											Has olvidado tu contraseña?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password_l" required>
								    <div class="invalid-feedback">
								    	se requiere contraseña
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Recuérdame</label>
									</div>
									<button name="register" type="submit" class="btn btn-primary ms-auto">
										Iniciar
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿No tienes una cuenta? <a href="register.html" class="text-dark">Crea una</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>


<?php

include("codigoPHP/conexion.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['password_l']) >=1 &&
        strlen($_POST['email_l']) >=1){

        $password_l = trim(($_POST['password_l']));
        $email_l = trim($_POST['email_l']);
            
            
        $consulta = mysqli_query($conex,"SELECT* FROM usuario WHERE email_u = '$email_l' and password_u = '$password_l'");
        $resultado = $consulta->num_rows;
            
        if ($resultado!=0){
            
            echo "Bienvenido";
        }else{
            echo "no esta registrado";
        }
    }
}