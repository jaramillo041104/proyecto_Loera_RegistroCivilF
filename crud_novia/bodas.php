<?php include("../headerr.php");?>

<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM tb_novia";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombre ">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="Nombre_papa" placeholder="Nombre del Papa">
                                    <input type="text" class="form-control mb-3" name="Nombre_mama" placeholder="Nombre de la Mama ">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="date" class="form-control mb-3" name="Fecha_nac" placeholder="Fecha de nacimiento">
                                    

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idNovia</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Nombre_papa</th>
                                        <th>Nombre_mama</th>
                                        <th>Direccion</th>
                                        <th>Fecha_nac</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idNovia']?></th>
                                                <th><?php  echo $row['Nombres']?></th>
                                                <th><?php  echo $row['Apellidos']?></th>
                                                <th><?php  echo $row['Nombre_papa']?></th>
                                                <th><?php  echo $row['Nombre_mama']?></th>
                                                <th><?php  echo $row['Direccion']?></th>
                                                <th><?php  echo $row['Fecha_nac']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['idNovia'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idNovia'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
    <br><?php include("../footerr.php");?>
</html>
