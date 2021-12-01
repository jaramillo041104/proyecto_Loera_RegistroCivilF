<?php

include("conexion.php");
$con=conectar();

$idNovio=$_POST['idNovio'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Nombre_papa=$_POST['Nombre_papa'];
$Nombre_mama=$_POST['Nombre_mama'];
$Direccion=$_POST['Direccion'];
$Fecha_nac=$_POST['Fecha_nac'];

$sql="UPDATE tb_novio SET  Nombres='$Nombres',Apellidos='$Apellidos',Nombre_papa='$Nombre_papa',Nombre_mama='$Nombre_mama',Direccion='$Direccion',Fecha_nac='$Fecha_nac' WHERE idNovio='$idNovio'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bodas.php");
    }
?>