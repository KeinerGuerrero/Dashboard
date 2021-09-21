<?php

include("conexion2.php");
$con=conectar();

$tipo_doc=$_GET['tipo_doc'];

$sql="DELETE FROM tipodoc  WHERE tipo_doc='$tipo_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: documento2.php");
    }
?>