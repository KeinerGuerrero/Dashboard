<?php 
    include("conexion1.php");
    $con=conectar();


    $sql="SELECT *  FROM docentes";
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
 <form action="insertardoc.php" method="POST">

                                    <input type="text" class="form-control mb3" name="id_doc" placeholder="ID"style="border: 3px solid; color: black;"><br>
                                    <label for="tipo_doc"></label>         
                                        <select class="form-control mb-3" name="tipo_doc" style="border: 3px solid; color: black;" id="tipo_doc">
                                        <option value="">Tipo de Documento</option>
                                        <option value="1">Tajeta de Identidad</option>
                                        <option value="2">Cedula de Ciudadania</option>
                                        <option value="3">Registro Civil</option>
                                        <option value="4">Cedula de Extranjeria</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="nom_doc" placeholder="Nombres"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="ap_doc" placeholder="Apellidos"style="border: 3px solid; color: black;">
                                    <label for="gen_doc"></label>         
                                        <select class="form-control mb-3" name="gen_doc" style="border: 3px solid; color: black;" id="gen_doc">
                                        <option value="">Genero</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                                    <input type="text" class="form-control mb-3" name="direc_doc" placeholder="Direccion"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="ed_doc" placeholder="Edad"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="tel_doc" placeholder="Telefono"style="border: 3px solid; color: black;">
                                    <input type="text" class="form-control mb-3" name="emdoc" placeholder="Email"style="border: 3px solid; color: black;">
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
                                    <label for="id_asig"></label>         
                                        <select class="form-control mb-3" name="id_asig" style="border: 3px solid; color: black;" id="id_asig">
                                        <option value="">ASIGNATURA</option>
                                        <option value="1">Español</option>
                                        <option value="2">Ingles</option>
                                        <option value="3">Quimica</option>
                                        <option value="4">Fisica</option>
                                        <option value="5">Ciencias Politicas</option>
                                        <option value="6">Sociales</option>
                                        <option value="7">Filosofia</option>
                                        <option value="8">Trigonometria</option>
                                        <option value="9">Estadisticas</option>
                                        <option value="10">Religion</option>
                                        <option value="11">Etica</option>
                                        <option value="12">Artistica</option>
                                        <option value="13">Edu. Fisica</option>
                                        <option value="14">Informaticas</option>
                                        <option value="15">Pedagogia</option>
                                        <option value="16">PPI</option>
                                        <option value="17">Comportamiento</option>
                                    </select>
                                    
                                  <input type="submit" class="btn btn-primary btn-block" value="INGRESAR">
                    </form>
                    <th><label for="busqueda"></label><br><a href="docentes1.php" class="btn btn-info">VOLVER</a></th>
                        </div>