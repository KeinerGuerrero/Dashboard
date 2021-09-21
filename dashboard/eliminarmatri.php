<?php

include("conexion1.php");
$con=conectar();

$id_matri=$_GET['id_matri'];

$sql="DELETE FROM matriculas  WHERE id_matri='$id_matri'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: matriculas.php");
    }
?>