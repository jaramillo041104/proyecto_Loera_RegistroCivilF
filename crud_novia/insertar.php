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

$sql="INSERT INTO tb_novia VALUES('$idNovia','$Nombres','$Apellidos','$Nombre_papa','$Nombre_mama','$Direccion','$Fecha_nac')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: bodas.php");
    
}else {
}
?>