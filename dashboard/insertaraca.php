<?php
include("conexion1.php");
$con=conectar();

$id_ano_acad=$_POST['id_ano_acad'];
$nom_ano_acad=$_POST['nom_ano_acad'];




$sql="INSERT INTO ano_academico values('$id_ano_acad','$nom_ano_acad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: academico.php");
    
}else {
}
?>