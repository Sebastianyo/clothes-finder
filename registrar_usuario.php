<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
							<h1 class="fs-4 card-title fw-bold mb-4">REGISTRAR</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off"> 
                                <!-- CASILLA DE NOMBRE-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">NOMBRE</label>
									<input id="name" type="text" class="form-control" name="nombre_u" value="" required autofocus>
									<div class="invalid-feedback">
									</div>
								</div>

                                <!-- CASILLA DE APELLIDOS-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">APELLIDO</label>
									<input id="name" type="text" class="form-control" name="apellido_u" value="" required autofocus>
									<div class="invalid-feedback">
									</div>
								</div>

                                 <!-- CASILLA DE NUMERO DE CELULAR-->
                                 <div class="mb-3">
									<label class="mb-2 text-muted" for="name">NUMERO DE CELULAR</label>
									<input id="name" type="tel" class="form-control" name="celular_u" value="" required autofocus maxlength="11">
									<div class="invalid-feedback">
									</div>
								</div>

                                 <!-- CASILLA DE NUMERO DE TELEFONO-->
                                 <div class="mb-3">
									<label class="mb-2 text-muted" for="name">NUMERO DE TELEFONO</label>
									<input id="name" type="tel" class="form-control" name="telefono_u" value="" required autofocus maxlength="11">
									<div class="invalid-feedback">
									</div>
								</div>

                                <!-- CASILLA DE TIPO DE DOCUMENTO-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">TIPO DE DOCUMENTO</label>
                                    <select name="tipo_documento_u" class="form-select" aria-label="Default select example">
                                        <option selected>SELECCIONE UNO</option>
                                        <option value="cc">CEDULA</option>
                                        <option value="ti">TARJETA DE INDENTIDAD</option>
                                        <option value="ce">CEDULA DE EXTRAJERIA</option>
                                      </select>
									<div class="invalid-feedback">
									</div>
								</div>

                                    <!-- CASILLA DE NUMERO DE DOCUMENTO-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">NUMERO DE DOCUMENTO</label>
									<input id="name" type="number" class="form-control" name="documento_u" value="" required autofocus>
									<div class="invalid-feedback">
									</div>
								</div>

                                    <!-- CASILLA DE FECHA DE NACIMIENTO-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">FECHA DE NACIMIENTO</label>
									<input id="name" type="date" class="form-control" name="fecha_naci_u" value="" required autofocus>
									<div class="invalid-feedback">
									</div>
								</div>

                                    <!-- CASILLA DE COMUNA
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">COMUNA</label>
                                    <input id="name" type="text" class="form-control" name="comuna" value="" required autofocus>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                  CASILLA DE DIRECCION
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="name">BARRIO</label>
                                    <input id="name" type="text" class="form-control" name="barrio" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        
                                    </div>
                                </div> -->

                                  <!--CASILLA DE DIRECCION-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">DIRECCION</label>
									<input id="name" type="text" class="form-control" name="direccion_u" value="" required autofocus>
                                    <div class="invalid-feedback">
									</div>
								</div>
                                

                        
                                <!--CASILLA DE CORREO ELECTRONICO-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">CORREO ELECTRONICO</label>
									<input id="email" type="email" class="form-control" name="email_u" value="" required autofocus>
									<div class="invalid-feedback">
										El correo es invalido
									</div>
								</div>
                                <!--CASILLA DE CONTRASEÑA-->
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">CONTRASEÑA</label>
									<input id="password" type="password" class="form-control" name="password_u" required>
								    <div class="invalid-feedback">
								    	se requiere contraseña
							    	</div>
								</div>
                                 <!-- CASILLA DE GENEROS-->
                                 <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hombre_u" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">HOMBRE</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mujer_u" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">MUJER</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="otros_u" value="option3" >
                                    <label class="form-check-label" for="inlineCheckbox3">OTROS</label>
                                  </div>

								<p class="form-text text-muted mb-3">
									
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto" name="register">
										REGISTRAR	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								YA TIENE CUENTA? <a href="login.php" class="text-dark">INICIAR SESION</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>

</body>

</html>

<?PHP


if ($_POST){
   $error_encontrado="";
   if (validar_clave($_POST["password_u"], $error_encontrado)){
      echo "CLAVE VÁLIDA";
include("codigoPHP/conexion.php");
      

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre_u']) >=1 &&
    strlen($_POST['apellido_u']) >=1 &&
    strlen($_POST['celular_u']) >=1 &&
    strlen($_POST['telefono_u']) >=1 &&
    strlen($_POST['tipo_documento_u']) >=1 &&
    strlen($_POST['documento_u']) >=1 &&
    strlen($_POST['fecha_naci_u']) >=1 &&
    strlen($_POST['direccion_u']) >=1 &&
    strlen($_POST['email_u']) >=1 &&
    strlen($_POST['password_u']) >=1){

   $nombre_u = trim($_POST['nombre_u']);
   $apellido_u = trim($_POST['apellido_u']);
   $celular_u = trim($_POST['celular_u']);
   $telefono_u = trim($_POST['telefono_u']);
   $tipo_documento_u = trim($_POST['tipo_documento_u']);
   $documento_u = trim($_POST['documento_u']);
   $fecha_naci_u = trim($_POST['fecha_naci_u']);
   $direccion_u = trim($_POST['direccion_u']);
   $email_u = trim($_POST['email_u']);
   $password_u = trim($_POST['password_u']);
   
   
   $consulta = "INSERT INTO usuario(nombre_u, apellido_u, celular_u, telefono_u, tipo_documento_u, documento_u, fecha_naci_u, direccion_u, email_u, password_u) 
   VALUES ('$nombre_u','$apellido_u','$celular_u','$telefono_u','$tipo_documento_u','$documento_u','$fecha_naci_u','$direccion_u','$email_u','$password_u')";
   $resultado = mysqli_query($conex,$consulta);
     if ($resultado) {
        //header("Location: clothes_finder_0.0.4/login.php", TRUE, 301);
        //exit();
    }else{
      ?>
      <h3 class="bad">ha ocurrido un error</h3>
      <?php
    }

  }else{
    ?>
    <h3 class="bad">porfavor complete los campos</h3>
    <?php
   }
}

   }else{
      echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
   }
}

function validar_clave($password_u,&$error_clave){
   if(strlen($password_u) < 6){
      $error_clave = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($password_u) > 20){
      $error_clave = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$password_u)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$password_u)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$password_u)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;
}


?>