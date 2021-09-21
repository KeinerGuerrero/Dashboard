<?php

include("conexion1.php");
$con=conectar();

$id_per_aca=$_GET['id_per_aca'];

$sql="DELETE FROM periodo  WHERE id_per_aca='$id_per_aca'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: periodo.php");
    }
?>