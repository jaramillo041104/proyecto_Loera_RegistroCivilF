<?php

include("conexion.php");
$con=conectar();

$idEmpleado=$_GET['id'];

$sql="DELETE FROM tb_empleado  WHERE idEmpleado='$idEmpleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
