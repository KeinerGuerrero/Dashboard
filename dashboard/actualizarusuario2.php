<?php 
    include("conexion2.php");
    $con=conectar();

$id_usu=$_GET['id_usu'];

$sql="SELECT * FROM usuarios WHERE id_usu='$id_usu'";
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
        <title>Actualizar_Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background-color:#f1f1f1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="updateusuario2.php" method="POST">
                    
    <input type="hidden" name="id_usu" value="<?php echo $row['id_usu']?>">


    <label for="nom_usu">Nombre usuario</label>
    <input type="text" class="form-control mb-3" name="nom_usu" id="nom_usu"  value="<?php echo $row['nom_usu']?>">
    <label for="apel_usu">Apellidos usuario</label>
    <input type="text" class="form-control mb-3" name="apel_usu" id="apel_usu"  value="<?php echo $row['apel_usu']?>">
    <label for="pass_usu">Password</label>
    <input type="text" class="form-control mb-3" name="pass_usu" id="pass_usu"  value="<?php echo $row['pass_usu']?>">
    <label for="per_usu">Periodo usuario</label>
    <input type="text" class="form-control mb-3" name="per_usu" id="per_usu"  value="<?php echo $row['per_usu']?>">
    <label for="est_usu">Estado</label>
    <input type="text" class="form-control mb-3" name="est_usu" id="est_usu"  value="<?php echo $row['est_usu']?>">
                               
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="usuario2.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>