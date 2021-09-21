<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM estudiantes";
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
 <form action="insertar1.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_est" placeholder="ID"style="border: 3px solid; color: black;">
                                    <label for="tipo_doc"></label>         
                                        <select class="form-control mb-3" name="tipo_doc" style="border: 3px solid; color: black;" id="tipo_doc">
                                        <option value="">Tipo de Documento</option>
                                        <option value="1">Tajeta de Identidad</option>
                                        <option value="2">Cedula de Ciudadania</option>
                                        <option value="3">Registro Civil</option>
                                        <option value="4">Cedula de Extranjeria</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="nom_est" placeholder="Nombres"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="ape_est" placeholder="Apellidos"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="ed_est" placeholder="Edad"style="border: 3px solid; color: black;">
                                    <input type="date" class="form-control mb-3" name="fecnac_est" placeholder="Fecha Nacimiento"style="border: 3px solid; color: black;">
                                    <label for="gen_est"></label>         
                                        <select class="form-control mb-3" name="gen_est" style="border: 3px solid; color: black;" id="gen_est">
                                        <option value="">Genero</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="dir_est" placeholder="Direccion"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="tel_est" placeholder="Telefono"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="em_est" placeholder="Email"style="border: 3px solid; color: black;">
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
                                    </select>
                                    <label for="id_curso"></label>         
                                        <select class="form-control mb-3" name="id_curso" style="border: 3px solid; color: black;" id="id_curso">
                                        <option value="">Curso</option>
                                        <option value="1">1102</option>
                                        <option value="2">1101</option>
                                        </select>
                                    
                                  <b><input type="submit"style="background-color:#07A1FF;font-family: monospace; border-color:#F5F5DC;" class="btn btn-info" value=Ingresar></b>
                                </form>
                                <th><label for="busqueda"></label><br><a href="estudiantes.php" class="btn btn-info">VOLVER</a></th>
                        </div>
