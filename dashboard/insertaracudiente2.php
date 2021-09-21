<?php 
    include("conexion2.php");
    $con=conectar();


    $sql="SELECT *  FROM acudiente";
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
    
<body style="background-color: #F1f1f1;">

    <h1 align="center" > 
        <p> 
        <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
       </p>INGRESAR DATOS
    </h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->
 <div style="width: 50%; margin-left: 25%;background-color:; ">
 <form action="insertaracu2.php" method="POST">

                                    <input type="text" class="form-control mb3" name="id_acud" placeholder="ID"style="border: 3px solid; color: black;">
                                    <label for="tipo_doc"></label>         
                                        <select class="form-control mb-3" name="tipo_doc" style="border: 3px solid; color: black;" id="tipo_doc">
                                        <option value="">Tipo de Documento</option>
                                        <option value="1">Tajeta de Identidad</option>
                                        <option value="2">Cedula de Ciudadania</option>
                                        <option value="3">Registro Civil</option>
                                        <option value="4">Cedula de Extranjeria</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="nom_acu" placeholder="Nombres"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="apel_acu" placeholder="Apellidos"style="border: 3px solid; color: black;">
                                    <label for="parentesco"></label>         
                                        <select class="form-control mb-3" name="parentesco" style="border: 3px solid; color: black;" id="parentesco">
                                        <option value="">Parentesco</option>
                                        <option value="Mama">Mama</option>
                                        <option value="Papa">Papa</option>
                                        <option value="Papa">Tio</option>
                                        <option value="Papa">Abuela</option>
                                        <option value="Papa">Tia</option>
                                        <option value="Papa">Abuelo</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="dir_acu" placeholder="Direccion"style="border: 3px solid; color: black;">                                                            
                                    <label for="id_pais"></label>         
                                        <select class="form-control mb-3" name="id_pais" style="border: 3px solid; color: black;" id="id_pais">
                                        <option value="">Pais</option>
                                        <option value="1">Colombia</option>
                                        <option value="2">Venezuela</option>
                                        <option value="3">Chile</option>
                                        <option value="4">Argentina</option>
                                        <option value="5">Brasil</option>
                                        <option value="6">Ecuador</option>
                                        <option value="7">Bolivia</option>
                                        <option value="8">Peru</option>
                                        <option value="9">Paraguay</option>
                                        <option value="10">Uruguay</option>
                                    </select>
                                    <label for="id_ciu"></label>         
                                        <select class="form-control mb-3" name="id_ciu" style="border: 3px solid; color: black;" id="id_ciu">
                                        <option value="">Ciudad</option>
                                        <option value="1">Girardot</option>
                                        <option value="2">Bogota</option>
                                        <option value="3">Medellin</option>
                                        <option value="4">Cali</option>
                                        <option value="5">Ibague</option>
                                        <option value="6">Santa Marta</option>
                                        <option value="7">Villavicencio</option>
                                        <option value="8">Nariño</option>
                                        <option value="9">Pasto</option>
                                        <option value="10">Armenia</option>
                                        <option value="11">Barranquilla</option>
                                   <input type="text" class="form-control mb-3" name="tel_acu" placeholder="Telefono"style="border: 3px solid; color: black;">
                                   <label for="id_est"></label>         
                                        <select class="form-control mb-3" name="id_est" style="border: 3px solid; color: black;" id="id_est">
                                        <option value="">Estudiante</option>
                                        <option value="1">Keiner Santiago Guerrero Guzman</option>
                                        <option value="2">Cristian David Guerrero Vargas</option>
                                    </select>
                                  <input class="btn btn-primary btn-block" type="submit" class="btn btn-primary btn-block" value=INGRESAR>

                                  <b><label for="busqueda"></label><br><a href="acudiente2.php" class="btn btn-info">VOLVER</a></b>
                                </form>
                        </div>