<?php

include("conexion1.php");
$con=conectar();

$id_ciu=$_GET['id_ciu'];

$sql="DELETE FROM ciudad  WHERE id_ciu='$id_ciu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ciudad.php");
    }
?>