<?php

include("conexion2.php");
$con=conectar();

$id_usu=$_GET['id_usu'];

$sql="DELETE FROM usuarios  WHERE id_usu='$id_usu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario2.php");
    }
?>