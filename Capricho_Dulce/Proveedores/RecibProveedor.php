<?php
include('config.php');
$nombre      = $_REQUEST['nombre'];
$gmail  	 = $_REQUEST['gmail'];
$número telefónico 	 = $_REQUEST['número telefónico'];
$dirección   = $_REQUEST['dirección'];
$producto      = $_REQUEST['producto'];
$instrucción especial = $_REQUEST['instrucción especial'];


$QueryInsert = ("INSERT INTO proveedores(
    nombre,
    gmail,
    número telefónico,
    dirección,
    producto, 
    instrucción especial

)
VALUES (
    '".$nombre. "',
    '".$gmail. "',
    '".$número telefónico."', 
    '".$dirección. "',
    '".$producto. "',
    '".instrucción especial. "',
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:Proveedores.php");
?>
