<?php

include("conexion1.php");
$con=conectar();

$id_area=$_GET['id_area'];

$sql="DELETE FROM areas  WHERE id_area='$id_area'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: areas.php");
    }
?>