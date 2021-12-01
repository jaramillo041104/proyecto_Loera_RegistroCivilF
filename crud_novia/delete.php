<?php

include("conexion.php");
$con=conectar();

$idNovio=$_GET['id'];

$sql="DELETE FROM tb_novia  WHERE idNovia='$idNovia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: bodas.php");
    }
?>
