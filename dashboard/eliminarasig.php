<?php

include("conexion1.php");
$con=conectar();

$id_asig=$_GET['id_asig'];

$sql="DELETE FROM asignaturas  WHERE id_asig='$id_asig'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asignaturas.php");
    }
?>