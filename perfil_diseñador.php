<?php

//el nombre de la coneccion
require_once 'codigoPHP\conexion.php';

//consultar por id
if(isset($_GET[`accion`])){
    //primero buscamos ese registro con el id
        $id=$_GET[`id`];
        $sql="insert into `productos` where id=$id";
        $datos=$con->query($sql);
        $campo=$datos->fetch_object();
        print_r($campo);
        $nombre=$campo->nombre;
        $precio=$campo->precio;
        $activo=$campo->activo;
}


//guarda la informacion
print_r($_POST);
if(isset($_POST[`accion`])){
    
    if($_post[`accion`]=="Guardar"){
    
        $nombre=$_POST[`nombre`]; 
        $precio=$_POST[`precio`];
        $activo=0;

        if(isset($_POST[`activo`])){
            $activo=1;
        }

        $sql="insert into `productos`(`id`,`nombre`,`precio`,`activo`)
        values (default,`$nombre`,`$precio`,`$activo`)";
        
        //consulta
        $datos=$con->query($sql);

    }else if($_post[`accion`]=="Guardar cambios"){

        $id=$_POST[`id`];
        $nombre=$_POST[`nombre`]; 
        $precio=$_POST[`precio`];
        
        $activo=0;
        if(isset($_POST[`activo`])){
        $activo=1;
        }
        $sql="update `productos`
        set `nombre` = `$nombre`,`precio` = `$precio`,`activo` = `$activo`
        where id=$id";
        $datos=$con->query($sql);
        header("location:perfil_diseñador.php");

    }
}
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
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

                <div class="container">

                    <a class="nav-link active" aria-current="page" href="index.html"> <i class="bi bi-cart"> CARRITO </i> </a>

                </div>

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

            </div>
        </div>

    </nav>

    <!-- FIN DEL NAVEGADOR -->

    <!--PERFIL-->
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">John Smith</h5>
                    <p class="text-muted mb-1">Full Stack Developer</p>
                    <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                    <div class="d-flex justify-content-center mb-2">
                        <button type="button" class="btn btn-primary">Seguir</button>
                        <button type="button" class="btn btn-outline-primary ms-1">Chatear</button>
                    </div>
                </div>
            </div>
            <!--Redes Sociales-->
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0">twitter</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0">instagram</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0">facebook</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Datos Personales-->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nombre completo</p>
                            
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><a href="perfil.php?=nameuser=<?php echo $nombre ; ?> "></a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Correo electrónico</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">example@example.com</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Celular</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">(098) 765-4321</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Dirección</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">registrar producto</h4>
                    
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $id;?>"/>
                        <div class="row">
                            <div class="mb-3">
                              <label for="" class="form-label">nombre</label>
                              <input type="text" class="form-control form-control-sm" name="nombre" value="<php echo @$nombre; ?>" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3 ">
                                <label for="" class="form-label">precio</label>
                                <input type="text" class="form-control form-control-sm" name="precio" value="<php echo @$precio; ?>" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Activo?</label>
                                <input type="checkbox" 
                                 <!-- <?php echo (@$activo==1)?"checked":"";?> -->
                                aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <!-- <?php
                                    if(isset($_GET[`id`])){
                                        ?>
                                        <input type="submit" class="btn btn-success" name="accion" value="Guardar cambios" >

                                        <?php
                                    }else{
                                        ?>
                                        <input type="submit" class="btn btn-success" name="accion" value="Guardar" >

                                        <?php
                                    }
                                ?> -->

                              <input type="reset" class="btn btn-info" name="accion" value="limpiar" >

                          </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        
                        while($campo=$datos->fwtch_object()){
                            ?>

                            <tr class="">
                                <td scope="row">111
                                    <?php echo $campo->$id;?>
                                </td>
                                <td>camisa azul
                                    <?php echo $campo->$nombre-producto;?>
                                </td>
                                <td>40.000
                                    <?php echo number_format($campo->$precio-producto,"0".",",".");?>
                                </td>
                                <td>inactivo

                                    <!-- <?php echo ($campo->activo_producto==1?"Activo":"Inactivo");?> -->

                                </td>
                                <td>
                                    <a href="?id=<?php echo $campo->$id;?>" class="btn btn-info">Editar</a>
                                    <a href="eliminar.php?id=<?php echo base64_encode($campo->$id);?>" class="btn btn-danger">Eliminar</a>
                                    <button class="btn btn-warning">Cambiar Estado</button>
                                </td>
                            </tr>

                            <?php
                        }
                        ?>

                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>