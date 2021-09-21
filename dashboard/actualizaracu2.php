<?php 
    include("conexion2.php");
    $con=conectar();

$id_acud=$_GET['id_acud'];

$sql="SELECT * FROM acudiente WHERE id_acud='$id_acud'";
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
        <title>Actualizar_Acudiente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background-color:#F1f1f1;">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="updateacu2.php" method="POST">
                    
    <input type="hidden" name="id_acud" value="<?php echo $row['id_acud']?>">

<label for="tipo_doc">Tipo de Documento</label>
    <input type="text" class="form-control mb-3" name="tipo_doc" id="tipo_doc"  value="<?php echo $row['tipo_doc']?>">
<label for="nom_acu">Nombres</label>
    <input type="text" class="form-control mb-3" name="nom_acu" id="nom_acu"  value="<?php echo $row['nom_acu']?>">
<label for="apel_acu">Apellidos</label>
    <input type="text" class="form-control mb-3" name="apel_acu" id="apel_acu" value="<?php echo $row['apel_acu']?>">
<label for="parentesco">Parentesco</label>    
    <input type="text" class="form-control mb-3" name="parentesco" id="parentesco" value="<?php echo $row['parentesco']?>">
<label for="dir_acu">Direccion</label>    
    <input type="text" class="form-control mb-3" name="dir_acu" id="dir_acu" value="<?php echo $row['dir_acu']?>">
 <label for="id_pais">Pais</label>    
    <input type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']?>">
<label for="id_ciu">Ciudad</label>    
    <input type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']?>">
<label for="tel_acu">Telefono</label>   
    <input type="text" class="form-control mb-3" name="tel_acu" id="tel_acu" value="<?php echo $row['tel_acu']?>">
<label for="id_est">Id Estudiante</label>  
    <input type="text" class="form-control mb-3" name="id_est" id="id_est" value="<?php echo $row['id_est']?>">                               
                            <h1 align="center" > 
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="acudiente2.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>