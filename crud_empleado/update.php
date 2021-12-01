<?php

include("conexion.php");
$con=conectar();

$idEmpleado=$_POST['idEmpleado'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$correo=$_POST['correo'];
$Telefono=$_POST['Telefono'];
$Fecha_nac=$_POST['Fecha_nac'];

$sql="UPDATE tb_empleado SET  Nombres='$Nombres',Apellidos='$Apellidos',Direccion='$Direccion',correo='$correo',Telefono='$Telefono',Fecha_nac='$Fecha_nac' WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>