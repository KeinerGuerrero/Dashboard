<?php 
    include("conexion2.php");
    $con=conectar();

    $sql="SELECT*FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
    <body background="imagen.JPG">
    <form class="formulario">
    
    <h1><img src="LOGO.PNG"width="300" height="100"></h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña">
         
         </div>
         <a class="button" href="dashboard.html" value="Login" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="registrarvista.html">Registrate </a></p>
     </div>
    </form>
</body>
</html>