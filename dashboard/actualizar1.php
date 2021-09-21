<?php 
    include("conexion1.php");
    $con=conectar();

$id_est=$_GET['id_est'];

$sql="SELECT * FROM estudiantes WHERE id_est='$id_est'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background-color:#4C7FFF;">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="update1.php" method="POST">

        <input type="hidden" name="id_est" value="<?php echo $row['id_est']  ?>">

<label for="tipo_doc">Tipo de Documento</label>
    <input type="text" class="form-control mb-3" name="tipo_doc" id="tipo_doc"  value="<?php echo $row['tipo_doc']  ?>">
<label for="nom_est">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_est" id="nom_est"  value="<?php echo $row['nom_est']  ?>">
<label for="ape_est">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ape_est" id="ape_est" value="<?php echo $row['ape_est']  ?>">
<label for="ed_est">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_est" id="ed_est" value="<?php echo $row['ed_est']  ?>">
<label for="fecnac_est">FECHA DE NACIMIENTO</label>
    <input type="text" class="form-control mb-3" name="fecnac_est" id="fecnac_est" value="<?php echo $row['fecnac_est']  ?>">
<label for="gen_est">GENERO</label>    
    <input type="text" class="form-control mb-3" name="gen_est" id="gen_est" value="<?php echo $row['gen_est']  ?>">
<label for="dir_est">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="dir_est" id="dir_est" value="<?php echo $row['dir_est']  ?>">
<label for="tel_est">TELEFONO</label>    
    <input type="tel" class="form-control mb-3" name="tel_est" id="tel_est" value="<?php echo $row['tel_est']  ?>">
<label for="em_est">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="em_est" id="em_est" value="<?php echo $row['em_est']  ?>">
<label for="id_pais">PAIS</label>    
    <input type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']  ?>">
<label for="id_ciu">CIUDAD</label>    
    <input type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']  ?>">
<label for="id_curso">CURSO</label>   
    <input type="text" class="form-control mb-3" name="id_curso" id="id_curso" value="<?php echo $row['id_curso']  ?>">                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="estudiantes.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>
                    
                        
</html>