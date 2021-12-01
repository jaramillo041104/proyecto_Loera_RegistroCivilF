<?php

include("conexion.php");
$con=conectar();

$idNovia=$_POST['idNovia'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Nombre_papa=$_POST['Nombre_papa'];
$Nombre_mama=$_POST['Nombre_mama'];
$Direccion=$_POST['Direccion'];
$Fecha_nac=$_POST['Fecha_nac'];

$sql="UPDATE tb_novia SET  Nombres='$Nombres',Apellidos='$Apellidos',Nombre_papa='$Nombre_papa',Nombre_mama='$Nombre_mama',Direccion='$Direccion',Fecha_nac='$Fecha_nac' WHERE idNovia='$idNovia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bodas.php");
    }
?>