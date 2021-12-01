<?php

include("conexion.php");
$con=conectar();

$idActa=$_GET['id'];

$sql="DELETE FROM tb_acta  WHERE idActa='$idActa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bodas.php");
    }
?>
