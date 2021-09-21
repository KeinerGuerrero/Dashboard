<?php

include("conexion1.php");
$con=conectar();

$id_ano_acad=$_GET['id_ano_acad'];

$sql="DELETE FROM ano_academico  WHERE id_ano_acad='$id_ano_acad'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: academico.php");
    }
?>