<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$sql = " SELECT * FROM usuarios ";
$guardar = mysql_query($sql);
while($datos = mysql_fetch_assoc($guardar))
{
$nombre = $datos['nombre'];
$apellido  = $datos['apellido'];
$email  = $datos['email'];
$celular = $datos['celular'];
}

$aquinombre = $_GET['nameuser'];

$consulta = " SELECT * FROM usuarios WHERE nombre = '$aquinombre' " ;
$guardo = mysql_query($consulta);
 
while($user = mysql_fetch_assoc($guardo))
{
$nombre = $user['nombre'];
$apellido = $user['apellido'];
$emaul = $user['email'];
$celular = $user['celular'];
}
?>    
</body>
</html>