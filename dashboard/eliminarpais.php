<?php

include("conexion1.php");
$con=conectar();

$id_pais=$_GET['id_pais'];

$sql="DELETE FROM pais  WHERE id_pais='$id_pais'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pais.php");
    }
?>