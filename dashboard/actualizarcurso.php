<?php 
    include("conexion1.php");
    $con=conectar();

$id_curso=$_GET['id_curso'];

$sql="SELECT * FROM cursos WHERE id_curso='$id_curso'";
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
        <body style="background-color:#F1F1F1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
                <div class="container mt-5">
                <h1 style= "font-family: candy randy"><font color="#FF0000"><b>Actualizar</h1>   
                    <form action="updatecurso.php" method="POST">
                    
                                <input type="hidden" name="id_curso" value="<?php echo $row['id_curso']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nom_curso" placeholder="Nombre Curso"style=style="border: 3px solid; color: #000000;" value="<?php echo $row['nom_curso']  ?>">
                                <input type="text" class="form-control mb-3" name="id_ano_acad" placeholder="Id año Academico" style=style="border: 3px solid; color: #000000;"value="<?php echo $row['id_ano_acad']  ?>">
                                <input type="text" class="form-control mb-3" name="id_doc" placeholder="Id_doc" style=style="border: 3px solid; color: #000000;"value="<?php echo $row['id_doc']  ?>">
                               
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="cursos.php" class="btn btn-info">VOLVER</a></th>
                </div>
    </body>
</html>