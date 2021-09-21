<?php 
    include("conexion1.php");
    $con=conectar();

$id_ano_acad=$_GET['id_ano_acad'];

$sql="SELECT * FROM ano_academico WHERE id_ano_acad='$id_ano_acad'";
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
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background-color:#f1f1f1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="updateaca.php" method="POST">

<input type="hidden" name="id_ano_acad" value="<?php echo $row['id_ano_acad']  ?>">
                            
<input type="text" class="form-control mb-3" name="nom_ano_acad" placeholder="Nombre Pais" style="border: 3px solid; color: #000000;"value="<?php echo $row['nom_ano_acad']?>">                             

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="academico.php" class="btn btn-primary btn-block">VOLVER</a></th>
                    
                </div>
    </body>
</html>