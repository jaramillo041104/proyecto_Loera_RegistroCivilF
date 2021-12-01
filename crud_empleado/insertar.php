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

$sql="INSERT INTO tb_empleado VALUES('$idEmpleado','$Nombres','$Apellidos','$Direccion','$correo','$Telefono','$Fecha_nac')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>