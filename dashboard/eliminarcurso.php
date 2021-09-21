<?php

include("conexion1.php");
$con=conectar();

$id_curso=$_GET['id_curso'];

$sql="DELETE FROM cursos  WHERE id_curso='$id_curso'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cursos.php");
    }
?>