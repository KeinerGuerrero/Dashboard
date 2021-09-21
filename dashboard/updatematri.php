<?php

include("conexion1.php");
$con=conectar();

$id_matri=$_POST['id_matri'];
$id_est=$_POST['id_est'];
$id_ano_acad=$_POST['id_ano_acad'];
$id_curso=$_POST['id_curso'];
$id_acud=$_POST['id_acud'];



$sql="UPDATE matriculas SET id_est='$id_est', id_ano_acad='$id_ano_acad', id_curso='$id_curso', id_acud='$id_acud' WHERE id_matri='$id_matri'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: matriculas.php");
    }
?>