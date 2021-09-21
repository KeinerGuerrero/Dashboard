<?php
include("conexion1.php");
$con=conectar();

$id_asig=$_POST['id_asig'];
$nom_asig=$_POST['nom_asig'];
$int_horaria=$_POST['int_horaria'];
$est_asig=$_POST['est_asig'];
$id_area=$_POST['id_area'];


$sql="INSERT INTO asignaturas values('$id_asig','$nom_asig','$int_horaria','$est_asig','$id_area')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: asignaturas.php");
    
}else {
}
?>