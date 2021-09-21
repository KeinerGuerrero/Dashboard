<?php

include("conexion1.php");
$con=conectar();

$id_est=$_GET['id_est'];

$sql="DELETE FROM estudiantes  WHERE id_est='$id_est'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: estudiantes.php");
    }
?>
