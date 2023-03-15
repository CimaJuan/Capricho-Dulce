<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "proveedores";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $proveedores) or die("Upps! Error en conectar a la Base de Datos");

?>