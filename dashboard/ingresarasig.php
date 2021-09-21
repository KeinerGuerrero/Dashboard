<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM asignaturas";
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
    
<body style="background-color: #F1F1F1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>INGRESAR DATOS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">
 <form action="insertarasig.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_asig" placeholder="Id"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="nom_asig" placeholder="Nombre Asignatura"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="int_horaria" placeholder="Intensidad horaria"style="border: 3px solid; color: black;">
                                    <label for="est_asig"></label>         
                                        <select class="form-control mb-3" name="est_asig" style="border: 3px solid; color: black;" id="est_asig">
                                        <option value="">Estado</option>
                                        <option value="A">Activo</option>
                                        <option value="I">Inactivo</option>
                                    </select>
                                    <label for="id_area"></label>         
                                        <select class="form-control mb-3" name="id_area" style="border: 3px solid; color: black;" id="id_area">
                                        <option value="">AREA</option>
                                        <option value="1">HUMANIDADES</option>
                                        <option value="2">CIENCIAS NATURALES Y AMBIENTAL</option>
                                        <option value="3">CIENCIAS POLITICAS Y ECONOMICAS</option>
                                        <option value="4">MATEMATICAS</option>
                                        <option value="5">EDUCACION RELIGIOSA</option>
                                        <option value="6">EDUCACION ETICA Y VALORES</option>
                                        <option value="7">EDUCACION ARTISTICA</option>
                                        <option value="8">EDU.FISICA RECREACION Y DEPORTES</option>
                                        <option value="9">TECNOLOGIA E INFORMATICA</option>
                                        <option value="10">FUNDAMENTACION</option>
                                        <option value="11">FILOSOFIA</option>
                                        </select> 
                                    
                                    
                                  <input type="submit" class="btn btn-primary btn-block" value="INGRESAR">
                    </form>
                    <th><label for="busqueda"></label><br><a href="asignaturas.php" class="btn btn-info">VOLVER</a></th>
                        </div>