<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM matriculas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
<body style="background-color: #f1f1f1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>INGRESAR DATOS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">
 <form action="insertarmatri.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_matri" placeholder="Id Matricula"style="border: 3px solid; color: black;">
                                    <label for="id_est"></label>         
                                        <select class="form-control mb-3" name="id_est" style="border: 3px solid; color: black;" id="id_est">
                                        <option value="">Estudiante</option>
                                        <option value="1">Keiner Santiago Guerrero Guzman</option>
                                        <option value="2">Cristian David Guerrero Vargas</option>
                                    </select>
                                    <label for="id_ano_acad"></label>         
                                        <select class="form-control mb-3" name="id_ano_acad" style="border: 3px solid; color: black;" id="id_ano_acad">
                                        <option value="">Id Año Academico</option>
                                        <option value="1">2021</option>
                                        <option value="2">2022</option>
                                        <option value="3">2023</option>
                                        <option value="4">2024</option>
                                        <option value="5">2025</option>
                                    </select>
                                    <label for="id_curso"></label>         
                                        <select class="form-control mb-3" name="id_curso" style="border: 3px solid; color: black;" id="id_curso">
                                        <option value="">Id Curso</option>
                                        <option value="1">1102</option>
                                        <option value="2">1101</option>
                                    </select>
                                    <label for="id_acud"></label>         
                                        <select class="form-control mb-3" name="id_acud" style="border: 3px solid; color: black;" id="id_acud">
                                        <option value="">Id Acudiente</option>
                                        <option value="1">Yonh Kerin Guerrero Perdomo</option>
                                        <option value="2">Leydi Viviana Guzman Cortez</option>
                                    </select>
                                    
                                  <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    <th><label for="busqueda"></label><br><a href="matriculas.php" class="btn btn-info">VOLVER</a></th>
                                </form>
                        </div>