<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM logros";
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
 <form action="insertarlogro.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_logro" placeholder="Id"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="nom_logro" placeholder="Nombre Logro"style="border: 3px solid; color: black;">
                                    <label for="per_logro"></label>         
                                        <select class="form-control mb-3" name="per_logro" style="border: 3px solid; color: black;" id="per_logro">
                                        <option value="">Periodo Academico</option>
                                        <option value="1">Primer Periodo</option>
                                        <option value="2">Segundo Periodo</option>
                                        <option value="3">Tercer Periodo</option>
                                        <option value="4">Cuarto Periodo</option>
                                    </select>
                                    <label for="id_ano_esc"></label>         
                                        <select class="form-control mb-3" name="id_ano_esc" style="border: 3px solid; color: black;" id="id_ano_esc">
                                        <option value="">Año Academico</option>
                                        <option value="1">2021</option>
                                        <option value="2">2022</option>
                                        <option value="3">2023</option>
                                        <option value="4">2024</option>
                                    </select>
                                    
                                    <input type="submit" class="btn btn-primary btn-block" value="INGRESAR">
                    </form>
                    <th><label for="busqueda"></label><br><a href="logro.php" class="btn btn-info">VOLVER</a></th>
                                
                    
                                </form>
                        </div>