<?php

require_once 'conexion.php';
$id =base64_decode($_GET[`id`]);
$datos = "DELETE FROM `Productos` where id=$id";
$datos = $con->query($sql);
//redirecciona luego de borrar el registro
header("location:perfil_diseñador.php");
