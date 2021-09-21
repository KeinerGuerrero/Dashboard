<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <img src="LOGO.PNG"width="300" height="100">
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="../index.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="dashboard.html"><i class="fa fa-home"></i><span>Inicio</span></a>
                    <a href="estudiantes.php"><i class="fas fa-user-graduate"></i><span>Estudiantes</span></a>
                    <a href="acudiente2.php"><i class="fa fa-female"></i><span>Acudiente</span></a>
                    <a href="academico.php"><i class="fa fa-calendar"></i><span>Año Academico</span></a>
                    <a href="areas.php"><i class="fas fa-journal-whills"></i><span>Areas</span></a>
                    <a href="asignaturas.php"><i class="fab fa-leanpub"></i><span>Asignaturas</span></a>
                    <a href="ciudad.php"><i class="fa fa-map-o"></i><span>Ciudad</span></a>
                    <a href="curso.php"><i class="fa fa-copyright"></i><span>Curso</span></a>
                    <a href="docentes1.php"><i class="fas fa-chalkboard-teacher"></i><span>Docentes</span></a>
                    <a href="logro.php"><i class="far fa-smile-beam"></i><span>Logros</span></a>
                    <a href="matriculas.php"><i class="fas fa-graduation-cap"></i><span>Matriculas</span></a>
                    <a href="notas2.php"><i class="fas fa-scroll"></i><span>Notas</span></a>
                    <a href="pais.php"><i class="fab fa-font-awesome-flag"></i><span>Pais</span></a>
                    <a href="periodo.php"><i class="fa fa-product-hunt"></i><span>Periodo</span></a>
                    <a href="documento2.php"><i class="fa fa-address-card-o"></i><span>Tipo Doc</span></a>
                    <a href="usuario2.php"><i class="far fa-user-circle"></i><span>Usuario</span></a>
                    <a href="back/descarga.php"><i class="fas fa-folder-open"></i><span>Backup</span></a>
                </nav>
            </div>
                <div class="columna col-lg-6">      
<?php 
    include("conexion1.php");
    $con=conectar();

    $sql="SELECT*FROM matriculas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
   <title> CRUD_MATRICULAS </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<table width="100%">
    <tr>       
        <th></th>
        <th>    
            <body style="background-color:#f1f1f1;">
            <img src="http://1.bp.blogspot.com/-7Z1AXu6m1qk/VZ1aYZht_FI/AAAAAAAAADM/71nPaZw9KeM/s1600/fce11d3e-05be-425e-b540-56f856b2c7ef.gif"width="150" height="150">
        </th>
        <th >
            <h1>Lista de Matriculas</h1>
        </th>

        <th><label for="busqueda"></label><br><a href="ingresarmatri.php" class="boton_1" ><style type="text/css">
  .boton_1{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #000000;
    background-color: #00e4e6;
    border-radius: 15px;
    border: 3px double #00e4e6;
  }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
  }
</style>INGRESAR MATRICULA</a></th>

        <th ><form method="get" ><br>
            <label for="busqueda">BUSCAR</label>
            <input  type="text" name="busqueda" id="busqueda" class="form-control mb-3" class="btn_search" placeholder="Id, Nombre, Curso, Email, Genero">
        <th><br><input type="submit"  value="BUSCAR" class="boton_1"><style type="text/css">
  .boton_1{
    text-decoration: none;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    font-family: helvetica;
    font-weight: 300;
    font-size: 25px;
    font-style: italic;
    color: #000000;
    background-color: #00e4e6;
    border-radius: 15px;
    border: 3px double #00e4e6;
    }
  .boton_1:hover{
    opacity: 0.6;
    text-decoration: none;
}
</style></a></th>

            </form>     
        <th></th>
        <th></th>
        </tr>

    </head>
    <body>
         <div class="col-md-8">
             <table class="table" border="1">
                <thead class="table-success table-striped" >
                                    <tr>
                                        <td style="font-family:initial; font-size: 9">Id Matricula</td>
                                        <td style="font-family:initial; font-size: 9">Id Estudiante</td>
                                        <td style="font-family:initial; font-size: 9">Id Año Academico</td>
                                        <td style="font-family:initial; font-size: 9">Id Curso</td>
                                        <td style="font-family:initial; font-size: 9">Id Acudiente</td>
                                        <td style="font-family:initial; font-size: 9">Editar</td>
                                        <td style="font-family:initial; font-size: 9">Eliminar</td>
                                        
                                    </tr>

                                </thead>

                                <tbody>
                                        <?php
                                       $sql="SELECT * FROM matriculas";
                                       $query=mysqli_query($con,$sql);

                                       
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><FONT COLOR="#000000"><?php  echo $row['id_matri']?></FONT></td>
                                                <td><FONT COLOR="#000000"><?php  echo $row['id_est']?></FONT></td>
                                                <td><FONT COLOR="#000000"><?php  echo $row['id_ano_acad']?></FONT></td>
                                                <td><FONT COLOR="#000000"><?php  echo $row['id_curso']?></FONT></td>
                                                <td><FONT COLOR="#000000"><?php  echo $row['id_acud']?></FONT></td>
                                                <th style="font-family:monospace; font-size: 10",color:darkred><a href="actualizarmatri.php?id_matri=<?php echo $row['id_matri'] ?>" class="btn btn-warning">Editar</a></th>
                                                <th style="font-family:monospace; font-size: 10",color:skyblue><a href="eliminarmatri.php?id_matri=<?php echo $row['id_matri'] ?>" class="btn btn-danger">Eliminar</a></th>  
                                             </tr>                                         
                                            
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
                                            </div>

                                        </div>

                                    </main>
                                </div>
                            </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
</body>

</html>