<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tb_novia WHERE idNovia='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idNovia" value="<?php echo $row['idNovia']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['Nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_papa" placeholder="Nombres del papa" value="<?php echo $row['Nombre_papa']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre_mama" placeholder="Nombres de la Mama" value="<?php echo $row['Nombre_mama']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="date" class="form-control mb-3" name="Fecha_nac" placeholder="Fecha de nacimiento" value="<?php echo $row['Fecha_nac']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>