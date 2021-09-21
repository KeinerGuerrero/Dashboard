<?php 
    include("conexion2.php");
    $con=conectar();

$tipo_doc=$_GET['tipo_doc'];

$sql="SELECT * FROM tipodoc WHERE tipo_doc='$tipo_doc'";
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
        <title>Actualizar_Tipo Documento</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background-color:#f1f1f1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="updatedoc2.php" method="POST">
                    
    <input type="hidden" name="tipo_doc" value="<?php echo $row['tipo_doc']?>">


<label for="nom_doc">Nombre Documento</label>
    <input type="text" class="form-control mb-3" name="nom_doc" id="nom_doc"  value="<?php echo $row['nom_doc']?>">  
                               
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="documento2.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>