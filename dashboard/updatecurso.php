<?php

include("conexion1.php");
$con=conectar();

$id_curso=$_POST['id_curso'];
$nom_curso=$_POST['nom_curso'];
$id_ano_acad=$_POST['id_ano_acad'];
$id_doc=$_POST['id_doc'];





$sql="UPDATE cursos SET nom_curso='$nom_curso', id_ano_acad='$id_ano_acad', id_doc='$id_doc' WHERE id_curso='$id_curso'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cursos.php");
    }
?>