<?php 
    include("conexion1.php");
    $con=conectar();

$id_matri=$_GET['id_matri'];

$sql="SELECT * FROM matriculas WHERE id_matri='$id_matri'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query); 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Actualizar Datos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body style="background-color: #f1f1f1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>ACTUALIZAR DATOS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">              
                    <form action="updatematri.php" method="POST">
                    
                                <input type="hidden" name="id_matri" value="<?php echo $row['id_matri']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id_est" placeholder="Id Estudiante" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_est']  ?>">
                                <input type="text" class="form-control mb-3" name="id_ano_acad" placeholder="Id Año Academico" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_ano_acad']  ?>">
                                <input type="text" class="form-control mb-3" name="id_curso" placeholder="Id Curso" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_curso']  ?>">
                                <input type="text" class="form-control mb-3" name="id_acud" placeholder="Id Acudiente" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_acud']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="matriculas.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>