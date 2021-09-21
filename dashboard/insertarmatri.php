<?php
include("conexion1.php");
$con=conectar();

$id_matri=$_POST['id_matri'];
$id_est=$_POST['id_est'];
$id_ano_acad=$_POST['id_ano_acad'];
$id_curso=$_POST['id_curso'];
$id_acud=$_POST['id_acud'];


$sql="INSERT INTO matriculas values('$id_matri','$id_est','$id_ano_acad','$id_curso','$id_acud')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: matriculas.php");
    
}else {
}
?>