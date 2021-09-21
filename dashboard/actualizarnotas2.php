<?php 
    include("conexion2.php");
    $con=conectar();

$id_per_aca=$_GET['id_per_aca'];

$sql="SELECT * FROM notas WHERE id_per_aca='$id_per_aca'";
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
        <title>Actualizar_Notas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body style="background-color: #f1f1f1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>ACTUALIZAR NOTAS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">              
                    <form action="updatenotas2.php" method="POST">
                    
                                <input type="hidden" name="id_per_aca" value="<?php echo $row['id_per_aca']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id_est" placeholder="Id Estudiante" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_est']  ?>">
                                <input type="text" class="form-control mb-3" name="id_asig" placeholder="Id Asignatura" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_asig']  ?>">
                                <input type="text" class="form-control mb-3" name="v_nota" placeholder="Valor Nota" style="border: 3px solid; color: #000000;"value="<?php echo $row['v_nota']  ?>">
                                <input type="text" class="form-control mb-3" name="id_notas" placeholder="Id Notas" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_notas']  ?>">
                                <input type="text" class="form-control mb-3" name="id_logro" placeholder="Id Logro" style="border: 3px solid; color: #000000;"value="<?php echo $row['id_logro']  ?>">
                              
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="notas2.php" class="btn btn-info">VOLVER</a></th>
                   
                    
                </div>
    </body>
</html>