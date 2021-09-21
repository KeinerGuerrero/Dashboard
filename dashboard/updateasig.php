<?php

include("conexion1.php");
$con=conectar();

$id_asig=$_POST['id_asig'];
$nom_asig=$_POST['nom_asig'];
$int_horaria=$_POST['int_horaria'];
$est_asig=$_POST['est_asig'];
$id_area=$_POST['id_area'];




$sql="UPDATE asignaturas SET nom_asig='$nom_asig', int_horaria='$int_horaria', est_asig='$est_asig', id_area='$id_area' WHERE id_asig='$id_asig'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: asignaturas.php");
    }
?>