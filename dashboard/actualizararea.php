<?php 
    include("conexion1.php");
    $con=conectar();

$id_area=$_GET['id_area'];

$sql="SELECT * FROM areas WHERE id_area='$id_area'";
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
    <body style="background-color: #F1F1F1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>ACTUALIZAR DATOS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">              
                    <form action="updatearea.php" method="POST">
                    
                                <input type="hidden" name="id_area" value="<?php echo $row['id_area']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nom_area" placeholder="Nombre Area" style="border: 3px solid; color: #000000;"value="<?php echo $row['nom_area']  ?>">
                                <input type="text" class="form-control mb-3" name="est_area" placeholder="Estado" style="border: 3px solid; color: #000000;"value="<?php echo $row['est_area']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="areas.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>