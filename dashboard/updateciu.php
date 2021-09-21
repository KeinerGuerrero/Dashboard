<?php

include("conexion1.php");
$con=conectar();

$id_ciu=$_POST['id_ciu'];
$nom_ciu=$_POST['nom_ciu'];




$sql="UPDATE ciudad SET nom_ciu='$nom_ciu' WHERE id_ciu='$id_ciu'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ciudad.php");
    }
?>