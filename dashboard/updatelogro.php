<?php

include("conexion1.php");
$con=conectar();

$id_logro=$_POST['id_logro'];
$nom_logro=$_POST['nom_logro'];
$per_logro=$_POST['per_logro'];
$id_ano_esc=$_POST['id_ano_esc'];



$sql="UPDATE logros SET nom_logro='$nom_logro', per_logro='$per_logro', id_ano_esc='$id_ano_esc' WHERE id_logro='$id_logro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: logro.php");
    }
?>