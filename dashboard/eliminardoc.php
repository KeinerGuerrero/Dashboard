<?php

include("conexion1.php");
$con=conectar();

$id_doc=$_GET['id_doc'];

$sql="DELETE FROM docentes  WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: docentes1.php");
    }
?>
