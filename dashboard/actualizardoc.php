<?php 
    include("conexion1.php");
    $con=conectar();

$id_doc=$_GET['id_doc'];

$sql="SELECT * FROM docentes WHERE id_doc='$id_doc'";
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
    <body>
        <body style="background-color:#f1f1f1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>
                <form action="updatedoc.php" method="POST">
                    
    <input type="hidden" name="id_doc" value="<?php echo $row['id_doc']  ?>">

<label for="Tipo_doc">Tipo de Documento</label>
    <input type="text" class="form-control mb-3" name="tipo_doc" id="tipo_doc"  value="<?php echo $row['tipo_doc']  ?>">
<label for="nom_doc">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_doc" id="nom_doc"  value="<?php echo $row['nom_doc']  ?>">
<label for="ape_doc">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ap_doc" id="ap_doc" value="<?php echo $row['ap_doc']  ?>">
<label for="gen_doc">GENERO</label>    
    <input type="text" class="form-control mb-3" name="gen_doc" id="gen_doc" value="<?php echo $row['gen_doc']  ?>">
<label for="dir_doc">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="direc_doc" id="direc_doc" value="<?php echo $row['direc_doc']  ?>">
    <label for="ed_doc">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_doc" id="ed_doc" value="<?php echo $row['ed_doc']  ?>">
<label for="tel_doc">TELEFONO</label>    
    <input type="tel" class="form-control mb-3" name="tel_doc" id="tel_doc" value="<?php echo $row['tel_doc']  ?>">
<label for="em_doc">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="emdoc" id="emdoc" value="<?php echo $row['emdoc']  ?>">
<label for="id_pais">PAIS</label>    
    <input type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']  ?>">
<label for="id_ciu">CIUDAD</label>    
    <input type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']  ?>">
<label for="id_area">ÁREA</label>   
    <input type="text" class="form-control mb-3" name="id_area" id="id_area" value="<?php echo $row['id_area']  ?>">
<label for="id_asig">ASIGNATURA</label>  
    <input type="text" class="form-control mb-3" name="id_asig" id="id_asig" value="<?php echo $row['id_asig']  ?>">                               

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="docentes1.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
    </body>
</html>